<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the ReferenciaRendimento class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single ReferenciaRendimento object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a ReferenciaRendimentoMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 * 
	 * @package My Application
	 * @subpackage MetaControls
	 * property-read ReferenciaRendimento $ReferenciaRendimento the actual ReferenciaRendimento data class being edited
	 * property QLabel $IdControl
	 * property-read QLabel $IdLabel
	 * property QListBox $MoldeIdControl
	 * property-read QLabel $MoldeIdLabel
	 * property QListBox $ReferenciaIdControl
	 * property-read QLabel $ReferenciaIdLabel
	 * property QFloatTextBox $ComprimentoControl
	 * property-read QLabel $ComprimentoLabel
	 * property QIntegerTextBox $PecasControl
	 * property-read QLabel $PecasLabel
	 * property QFloatTextBox $PesoControl
	 * property-read QLabel $PesoLabel
	 * property QFloatTextBox $PrecoControl
	 * property-read QLabel $PrecoLabel
	 * property QListBox $TecidoIdControl
	 * property-read QLabel $TecidoIdLabel
	 * property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class ReferenciaRendimentoMetaControlGen extends QBaseClass {
		// General Variables
		/**
		 * @var ReferenciaRendimento objReferenciaRendimento
		 * @access protected
		 */
		protected $objReferenciaRendimento;

		/**
		 * @var QForm|QControl objParentObject
		 * @access protected
		 */
		protected $objParentObject;

		/**
		 * @var string  strTitleVerb
		 * @access protected
		 */
		protected $strTitleVerb;

		/**
		 * @var boolean blnEditMode
		 * @access protected
		 */
		protected $blnEditMode;

		// Controls that allow the editing of ReferenciaRendimento's individual data fields
        /**
         * @var QLabel lblId;
         * @access protected
         */
		protected $lblId;

        /**
         * @var QListBox lstMolde;
         * @access protected
         */
		protected $lstMolde;

        /**
         * @var QListBox lstReferencia;
         * @access protected
         */
		protected $lstReferencia;

        /**
         * @var QFloatTextBox txtComprimento;
         * @access protected
         */
		protected $txtComprimento;

        /**
         * @var QIntegerTextBox txtPecas;
         * @access protected
         */
		protected $txtPecas;

        /**
         * @var QFloatTextBox txtPeso;
         * @access protected
         */
		protected $txtPeso;

        /**
         * @var QFloatTextBox txtPreco;
         * @access protected
         */
		protected $txtPreco;

        /**
         * @var QListBox lstTecido;
         * @access protected
         */
		protected $lstTecido;


		// Controls that allow the viewing of ReferenciaRendimento's individual data fields
        /**
         * @var QLabel lblMoldeId
         * @access protected
         */
		protected $lblMoldeId;

        /**
         * @var QLabel lblReferenciaId
         * @access protected
         */
		protected $lblReferenciaId;

        /**
         * @var QLabel lblComprimento
         * @access protected
         */
		protected $lblComprimento;

        /**
         * @var QLabel lblPecas
         * @access protected
         */
		protected $lblPecas;

        /**
         * @var QLabel lblPeso
         * @access protected
         */
		protected $lblPeso;

        /**
         * @var QLabel lblPreco
         * @access protected
         */
		protected $lblPreco;

        /**
         * @var QLabel lblTecidoId
         * @access protected
         */
		protected $lblTecidoId;


		// QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References

		// QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References


		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * ReferenciaRendimentoMetaControl to edit a single ReferenciaRendimento object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single ReferenciaRendimento object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this ReferenciaRendimentoMetaControl
		 * @param ReferenciaRendimento $objReferenciaRendimento new or existing ReferenciaRendimento object
		 */
		 public function __construct($objParentObject, ReferenciaRendimento $objReferenciaRendimento) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this ReferenciaRendimentoMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked ReferenciaRendimento object
			$this->objReferenciaRendimento = $objReferenciaRendimento;

			// Figure out if we're Editing or Creating New
			if ($this->objReferenciaRendimento->__Restored) {
				$this->strTitleVerb = QApplication::Translate('Edit');
				$this->blnEditMode = true;
			} else {
				$this->strTitleVerb = QApplication::Translate('Create');
				$this->blnEditMode = false;
			}
		 }

		/**
		 * Static Helper Method to Create using PK arguments
		 * You must pass in the PK arguments on an object to load, or leave it blank to create a new one.
		 * If you want to load via QueryString or PathInfo, use the CreateFromQueryString or CreateFromPathInfo
		 * static helper methods.  Finally, specify a CreateType to define whether or not we are only allowed to 
		 * edit, or if we are also allowed to create a new one, etc.
		 * 
		 * @param mixed $objParentObject QForm or QPanel which will be using this ReferenciaRendimentoMetaControl
		 * @param integer $intId primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing ReferenciaRendimento object creation - defaults to CreateOrEdit
 		 * @return ReferenciaRendimentoMetaControl
		 */
		public static function Create($objParentObject, $intId = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intId)) {
				$objReferenciaRendimento = ReferenciaRendimento::Load($intId);

				// ReferenciaRendimento was found -- return it!
				if ($objReferenciaRendimento)
					return new ReferenciaRendimentoMetaControl($objParentObject, $objReferenciaRendimento);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a ReferenciaRendimento object with PK arguments: ' . $intId);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new ReferenciaRendimentoMetaControl($objParentObject, new ReferenciaRendimento());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this ReferenciaRendimentoMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing ReferenciaRendimento object creation - defaults to CreateOrEdit
		 * @return ReferenciaRendimentoMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intId = QApplication::PathInfo(0);
			return ReferenciaRendimentoMetaControl::Create($objParentObject, $intId, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this ReferenciaRendimentoMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing ReferenciaRendimento object creation - defaults to CreateOrEdit
		 * @return ReferenciaRendimentoMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intId = QApplication::QueryString('intId');
			return ReferenciaRendimentoMetaControl::Create($objParentObject, $intId, $intCreateType);
		}



		///////////////////////////////////////////////
		// PUBLIC CREATE and REFRESH METHODS
		///////////////////////////////////////////////

		/**
		 * Create and setup QLabel lblId
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblId_Create($strControlId = null) {
			$this->lblId = new QLabel($this->objParentObject, $strControlId);
			$this->lblId->Name = QApplication::Translate('Id');
			if ($this->blnEditMode)
				$this->lblId->Text = $this->objReferenciaRendimento->Id;
			else
				$this->lblId->Text = 'N/A';
			return $this->lblId;
		}

		/**
		 * Create and setup QListBox lstMolde
		 * @param string $strControlId optional ControlId to use
		 * @param QQCondition $objConditions override the default condition of QQ::All() to the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause object or array of QQClause objects for the query
		 * @return QListBox
		 */
		public function lstMolde_Create($strControlId = null, QQCondition $objCondition = null, $objOptionalClauses = null) {
			$this->lstMolde = new QListBox($this->objParentObject, $strControlId);
			$this->lstMolde->Name = QApplication::Translate('Molde');
			$this->lstMolde->AddItem(QApplication::Translate('- Select One -'), null);

			// Setup and perform the Query
			if (is_null($objCondition)) $objCondition = QQ::All();
			$objMoldeCursor = Molde::QueryCursor($objCondition, $objOptionalClauses);

			// Iterate through the Cursor
			while ($objMolde = Molde::InstantiateCursor($objMoldeCursor)) {
				$objListItem = new QListItem($objMolde->__toString(), $objMolde->Id);
				if (($this->objReferenciaRendimento->Molde) && ($this->objReferenciaRendimento->Molde->Id == $objMolde->Id))
					$objListItem->Selected = true;
				$this->lstMolde->AddItem($objListItem);
			}

			// Return the QListBox
			return $this->lstMolde;
		}

		/**
		 * Create and setup QLabel lblMoldeId
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblMoldeId_Create($strControlId = null) {
			$this->lblMoldeId = new QLabel($this->objParentObject, $strControlId);
			$this->lblMoldeId->Name = QApplication::Translate('Molde');
			$this->lblMoldeId->Text = ($this->objReferenciaRendimento->Molde) ? $this->objReferenciaRendimento->Molde->__toString() : null;
			return $this->lblMoldeId;
		}

		/**
		 * Create and setup QListBox lstReferencia
		 * @param string $strControlId optional ControlId to use
		 * @param QQCondition $objConditions override the default condition of QQ::All() to the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause object or array of QQClause objects for the query
		 * @return QListBox
		 */
		public function lstReferencia_Create($strControlId = null, QQCondition $objCondition = null, $objOptionalClauses = null) {
			$this->lstReferencia = new QListBox($this->objParentObject, $strControlId);
			$this->lstReferencia->Name = QApplication::Translate('Referencia');
			$this->lstReferencia->Required = true;
			if (!$this->blnEditMode)
				$this->lstReferencia->AddItem(QApplication::Translate('- Select One -'), null);

			// Setup and perform the Query
			if (is_null($objCondition)) $objCondition = QQ::All();
			$objReferenciaCursor = Referencia::QueryCursor($objCondition, $objOptionalClauses);

			// Iterate through the Cursor
			while ($objReferencia = Referencia::InstantiateCursor($objReferenciaCursor)) {
				$objListItem = new QListItem($objReferencia->__toString(), $objReferencia->Id);
				if (($this->objReferenciaRendimento->Referencia) && ($this->objReferenciaRendimento->Referencia->Id == $objReferencia->Id))
					$objListItem->Selected = true;
				$this->lstReferencia->AddItem($objListItem);
			}

			// Return the QListBox
			return $this->lstReferencia;
		}

		/**
		 * Create and setup QLabel lblReferenciaId
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblReferenciaId_Create($strControlId = null) {
			$this->lblReferenciaId = new QLabel($this->objParentObject, $strControlId);
			$this->lblReferenciaId->Name = QApplication::Translate('Referencia');
			$this->lblReferenciaId->Text = ($this->objReferenciaRendimento->Referencia) ? $this->objReferenciaRendimento->Referencia->__toString() : null;
			$this->lblReferenciaId->Required = true;
			return $this->lblReferenciaId;
		}

		/**
		 * Create and setup QFloatTextBox txtComprimento
		 * @param string $strControlId optional ControlId to use
		 * @return QFloatTextBox
		 */
		public function txtComprimento_Create($strControlId = null) {
			$this->txtComprimento = new QFloatTextBox($this->objParentObject, $strControlId);
			$this->txtComprimento->Name = QApplication::Translate('Comprimento');
			$this->txtComprimento->Text = $this->objReferenciaRendimento->Comprimento;
			$this->txtComprimento->Required = true;
			return $this->txtComprimento;
		}

		/**
		 * Create and setup QLabel lblComprimento
		 * @param string $strControlId optional ControlId to use
		 * @param string $strFormat optional sprintf format to use
		 * @return QLabel
		 */
		public function lblComprimento_Create($strControlId = null, $strFormat = null) {
			$this->lblComprimento = new QLabel($this->objParentObject, $strControlId);
			$this->lblComprimento->Name = QApplication::Translate('Comprimento');
			$this->lblComprimento->Text = $this->objReferenciaRendimento->Comprimento;
			$this->lblComprimento->Required = true;
			$this->lblComprimento->Format = $strFormat;
			return $this->lblComprimento;
		}

		/**
		 * Create and setup QIntegerTextBox txtPecas
		 * @param string $strControlId optional ControlId to use
		 * @return QIntegerTextBox
		 */
		public function txtPecas_Create($strControlId = null) {
			$this->txtPecas = new QIntegerTextBox($this->objParentObject, $strControlId);
			$this->txtPecas->Name = QApplication::Translate('Pecas');
			$this->txtPecas->Text = $this->objReferenciaRendimento->Pecas;
			$this->txtPecas->Required = true;
			return $this->txtPecas;
		}

		/**
		 * Create and setup QLabel lblPecas
		 * @param string $strControlId optional ControlId to use
		 * @param string $strFormat optional sprintf format to use
		 * @return QLabel
		 */
		public function lblPecas_Create($strControlId = null, $strFormat = null) {
			$this->lblPecas = new QLabel($this->objParentObject, $strControlId);
			$this->lblPecas->Name = QApplication::Translate('Pecas');
			$this->lblPecas->Text = $this->objReferenciaRendimento->Pecas;
			$this->lblPecas->Required = true;
			$this->lblPecas->Format = $strFormat;
			return $this->lblPecas;
		}

		/**
		 * Create and setup QFloatTextBox txtPeso
		 * @param string $strControlId optional ControlId to use
		 * @return QFloatTextBox
		 */
		public function txtPeso_Create($strControlId = null) {
			$this->txtPeso = new QFloatTextBox($this->objParentObject, $strControlId);
			$this->txtPeso->Name = QApplication::Translate('Peso');
			$this->txtPeso->Text = $this->objReferenciaRendimento->Peso;
			$this->txtPeso->Required = true;
			return $this->txtPeso;
		}

		/**
		 * Create and setup QLabel lblPeso
		 * @param string $strControlId optional ControlId to use
		 * @param string $strFormat optional sprintf format to use
		 * @return QLabel
		 */
		public function lblPeso_Create($strControlId = null, $strFormat = null) {
			$this->lblPeso = new QLabel($this->objParentObject, $strControlId);
			$this->lblPeso->Name = QApplication::Translate('Peso');
			$this->lblPeso->Text = $this->objReferenciaRendimento->Peso;
			$this->lblPeso->Required = true;
			$this->lblPeso->Format = $strFormat;
			return $this->lblPeso;
		}

		/**
		 * Create and setup QFloatTextBox txtPreco
		 * @param string $strControlId optional ControlId to use
		 * @return QFloatTextBox
		 */
		public function txtPreco_Create($strControlId = null) {
			$this->txtPreco = new QFloatTextBox($this->objParentObject, $strControlId);
			$this->txtPreco->Name = QApplication::Translate('Preco');
			$this->txtPreco->Text = $this->objReferenciaRendimento->Preco;
			$this->txtPreco->Required = true;
			return $this->txtPreco;
		}

		/**
		 * Create and setup QLabel lblPreco
		 * @param string $strControlId optional ControlId to use
		 * @param string $strFormat optional sprintf format to use
		 * @return QLabel
		 */
		public function lblPreco_Create($strControlId = null, $strFormat = null) {
			$this->lblPreco = new QLabel($this->objParentObject, $strControlId);
			$this->lblPreco->Name = QApplication::Translate('Preco');
			$this->lblPreco->Text = $this->objReferenciaRendimento->Preco;
			$this->lblPreco->Required = true;
			$this->lblPreco->Format = $strFormat;
			return $this->lblPreco;
		}

		/**
		 * Create and setup QListBox lstTecido
		 * @param string $strControlId optional ControlId to use
		 * @param QQCondition $objConditions override the default condition of QQ::All() to the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause object or array of QQClause objects for the query
		 * @return QListBox
		 */
		public function lstTecido_Create($strControlId = null, QQCondition $objCondition = null, $objOptionalClauses = null) {
			$this->lstTecido = new QListBox($this->objParentObject, $strControlId);
			$this->lstTecido->Name = QApplication::Translate('Tecido');
			$this->lstTecido->Required = true;
			if (!$this->blnEditMode)
				$this->lstTecido->AddItem(QApplication::Translate('- Select One -'), null);

			// Setup and perform the Query
			if (is_null($objCondition)) $objCondition = QQ::All();
			$objTecidoCursor = Tecido::QueryCursor($objCondition, $objOptionalClauses);

			// Iterate through the Cursor
			while ($objTecido = Tecido::InstantiateCursor($objTecidoCursor)) {
				$objListItem = new QListItem($objTecido->__toString(), $objTecido->Id);
				if (($this->objReferenciaRendimento->Tecido) && ($this->objReferenciaRendimento->Tecido->Id == $objTecido->Id))
					$objListItem->Selected = true;
				$this->lstTecido->AddItem($objListItem);
			}

			// Return the QListBox
			return $this->lstTecido;
		}

		/**
		 * Create and setup QLabel lblTecidoId
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblTecidoId_Create($strControlId = null) {
			$this->lblTecidoId = new QLabel($this->objParentObject, $strControlId);
			$this->lblTecidoId->Name = QApplication::Translate('Tecido');
			$this->lblTecidoId->Text = ($this->objReferenciaRendimento->Tecido) ? $this->objReferenciaRendimento->Tecido->__toString() : null;
			$this->lblTecidoId->Required = true;
			return $this->lblTecidoId;
		}



		/**
		 * Refresh this MetaControl with Data from the local ReferenciaRendimento object.
		 * @param boolean $blnReload reload ReferenciaRendimento from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objReferenciaRendimento->Reload();

			if ($this->lblId) if ($this->blnEditMode) $this->lblId->Text = $this->objReferenciaRendimento->Id;

			if ($this->lstMolde) {
					$this->lstMolde->RemoveAllItems();
				$this->lstMolde->AddItem(QApplication::Translate('- Select One -'), null);
				$objMoldeArray = Molde::LoadAll();
				if ($objMoldeArray) foreach ($objMoldeArray as $objMolde) {
					$objListItem = new QListItem($objMolde->__toString(), $objMolde->Id);
					if (($this->objReferenciaRendimento->Molde) && ($this->objReferenciaRendimento->Molde->Id == $objMolde->Id))
						$objListItem->Selected = true;
					$this->lstMolde->AddItem($objListItem);
				}
			}
			if ($this->lblMoldeId) $this->lblMoldeId->Text = ($this->objReferenciaRendimento->Molde) ? $this->objReferenciaRendimento->Molde->__toString() : null;

			if ($this->lstReferencia) {
					$this->lstReferencia->RemoveAllItems();
				if (!$this->blnEditMode)
					$this->lstReferencia->AddItem(QApplication::Translate('- Select One -'), null);
				$objReferenciaArray = Referencia::LoadAll();
				if ($objReferenciaArray) foreach ($objReferenciaArray as $objReferencia) {
					$objListItem = new QListItem($objReferencia->__toString(), $objReferencia->Id);
					if (($this->objReferenciaRendimento->Referencia) && ($this->objReferenciaRendimento->Referencia->Id == $objReferencia->Id))
						$objListItem->Selected = true;
					$this->lstReferencia->AddItem($objListItem);
				}
			}
			if ($this->lblReferenciaId) $this->lblReferenciaId->Text = ($this->objReferenciaRendimento->Referencia) ? $this->objReferenciaRendimento->Referencia->__toString() : null;

			if ($this->txtComprimento) $this->txtComprimento->Text = $this->objReferenciaRendimento->Comprimento;
			if ($this->lblComprimento) $this->lblComprimento->Text = $this->objReferenciaRendimento->Comprimento;

			if ($this->txtPecas) $this->txtPecas->Text = $this->objReferenciaRendimento->Pecas;
			if ($this->lblPecas) $this->lblPecas->Text = $this->objReferenciaRendimento->Pecas;

			if ($this->txtPeso) $this->txtPeso->Text = $this->objReferenciaRendimento->Peso;
			if ($this->lblPeso) $this->lblPeso->Text = $this->objReferenciaRendimento->Peso;

			if ($this->txtPreco) $this->txtPreco->Text = $this->objReferenciaRendimento->Preco;
			if ($this->lblPreco) $this->lblPreco->Text = $this->objReferenciaRendimento->Preco;

			if ($this->lstTecido) {
					$this->lstTecido->RemoveAllItems();
				if (!$this->blnEditMode)
					$this->lstTecido->AddItem(QApplication::Translate('- Select One -'), null);
				$objTecidoArray = Tecido::LoadAll();
				if ($objTecidoArray) foreach ($objTecidoArray as $objTecido) {
					$objListItem = new QListItem($objTecido->__toString(), $objTecido->Id);
					if (($this->objReferenciaRendimento->Tecido) && ($this->objReferenciaRendimento->Tecido->Id == $objTecido->Id))
						$objListItem->Selected = true;
					$this->lstTecido->AddItem($objListItem);
				}
			}
			if ($this->lblTecidoId) $this->lblTecidoId->Text = ($this->objReferenciaRendimento->Tecido) ? $this->objReferenciaRendimento->Tecido->__toString() : null;

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC REFERENCIARENDIMENTO OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's ReferenciaRendimento instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveReferenciaRendimento() {
			try {
				// Update any fields for controls that have been created
				if ($this->lstMolde) $this->objReferenciaRendimento->MoldeId = $this->lstMolde->SelectedValue;
				if ($this->lstReferencia) $this->objReferenciaRendimento->ReferenciaId = $this->lstReferencia->SelectedValue;
				if ($this->txtComprimento) $this->objReferenciaRendimento->Comprimento = $this->txtComprimento->Text;
				if ($this->txtPecas) $this->objReferenciaRendimento->Pecas = $this->txtPecas->Text;
				if ($this->txtPeso) $this->objReferenciaRendimento->Peso = $this->txtPeso->Text;
				if ($this->txtPreco) $this->objReferenciaRendimento->Preco = $this->txtPreco->Text;
				if ($this->lstTecido) $this->objReferenciaRendimento->TecidoId = $this->lstTecido->SelectedValue;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the ReferenciaRendimento object
				$this->objReferenciaRendimento->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's ReferenciaRendimento instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteReferenciaRendimento() {
			$this->objReferenciaRendimento->Delete();
		}		



		///////////////////////////////////////////////
		// PUBLIC GETTERS and SETTERS
		///////////////////////////////////////////////

		/**
		 * Override method to perform a property "Get"
		 * This will get the value of $strName
		 *
		 * @param string $strName Name of the property to get
		 * @return mixed
		 */
		public function __get($strName) {
			switch ($strName) {
				// General MetaControlVariables
				case 'ReferenciaRendimento': return $this->objReferenciaRendimento;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to ReferenciaRendimento fields -- will be created dynamically if not yet created
				case 'IdControl':
					if (!$this->lblId) return $this->lblId_Create();
					return $this->lblId;
				case 'IdLabel':
					if (!$this->lblId) return $this->lblId_Create();
					return $this->lblId;
				case 'MoldeIdControl':
					if (!$this->lstMolde) return $this->lstMolde_Create();
					return $this->lstMolde;
				case 'MoldeIdLabel':
					if (!$this->lblMoldeId) return $this->lblMoldeId_Create();
					return $this->lblMoldeId;
				case 'ReferenciaIdControl':
					if (!$this->lstReferencia) return $this->lstReferencia_Create();
					return $this->lstReferencia;
				case 'ReferenciaIdLabel':
					if (!$this->lblReferenciaId) return $this->lblReferenciaId_Create();
					return $this->lblReferenciaId;
				case 'ComprimentoControl':
					if (!$this->txtComprimento) return $this->txtComprimento_Create();
					return $this->txtComprimento;
				case 'ComprimentoLabel':
					if (!$this->lblComprimento) return $this->lblComprimento_Create();
					return $this->lblComprimento;
				case 'PecasControl':
					if (!$this->txtPecas) return $this->txtPecas_Create();
					return $this->txtPecas;
				case 'PecasLabel':
					if (!$this->lblPecas) return $this->lblPecas_Create();
					return $this->lblPecas;
				case 'PesoControl':
					if (!$this->txtPeso) return $this->txtPeso_Create();
					return $this->txtPeso;
				case 'PesoLabel':
					if (!$this->lblPeso) return $this->lblPeso_Create();
					return $this->lblPeso;
				case 'PrecoControl':
					if (!$this->txtPreco) return $this->txtPreco_Create();
					return $this->txtPreco;
				case 'PrecoLabel':
					if (!$this->lblPreco) return $this->lblPreco_Create();
					return $this->lblPreco;
				case 'TecidoIdControl':
					if (!$this->lstTecido) return $this->lstTecido_Create();
					return $this->lstTecido;
				case 'TecidoIdLabel':
					if (!$this->lblTecidoId) return $this->lblTecidoId_Create();
					return $this->lblTecidoId;
				default:
					try {
						return parent::__get($strName);
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
			}
		}

		/**
		 * Override method to perform a property "Set"
		 * This will set the property $strName to be $mixValue
		 *
		 * @param string $strName Name of the property to set
		 * @param string $mixValue New value of the property
		 * @return mixed
		 */
		public function __set($strName, $mixValue) {
			try {
				switch ($strName) {
					// Controls that point to ReferenciaRendimento fields
					case 'IdControl':
						return ($this->lblId = QType::Cast($mixValue, 'QControl'));
					case 'MoldeIdControl':
						return ($this->lstMolde = QType::Cast($mixValue, 'QControl'));
					case 'ReferenciaIdControl':
						return ($this->lstReferencia = QType::Cast($mixValue, 'QControl'));
					case 'ComprimentoControl':
						return ($this->txtComprimento = QType::Cast($mixValue, 'QControl'));
					case 'PecasControl':
						return ($this->txtPecas = QType::Cast($mixValue, 'QControl'));
					case 'PesoControl':
						return ($this->txtPeso = QType::Cast($mixValue, 'QControl'));
					case 'PrecoControl':
						return ($this->txtPreco = QType::Cast($mixValue, 'QControl'));
					case 'TecidoIdControl':
						return ($this->lstTecido = QType::Cast($mixValue, 'QControl'));
					default:
						return parent::__set($strName, $mixValue);
				}
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}
	}
?>