<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the Referencia class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single Referencia object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a ReferenciaMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 * 
	 * @package My Application
	 * @subpackage MetaControls
	 * property-read Referencia $Referencia the actual Referencia data class being edited
	 * property QLabel $IdControl
	 * property-read QLabel $IdLabel
	 * property QTextBox $NomeControl
	 * property-read QLabel $NomeLabel
	 * property QListBox $ReferenciaCategoriaIdControl
	 * property-read QLabel $ReferenciaCategoriaIdLabel
	 * property QTextBox $ModeloControl
	 * property-read QLabel $ModeloLabel
	 * property QListBox $TecidoIdControl
	 * property-read QLabel $TecidoIdLabel
	 * property QListBox $CorControl
	 * property-read QLabel $CorLabel
	 * property QListBox $ReferenciaRendimentoAsUniaoControl
	 * property-read QLabel $ReferenciaRendimentoAsUniaoLabel
	 * property QListBox $TamanhoControl
	 * property-read QLabel $TamanhoLabel
	 * property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class ReferenciaMetaControlGen extends QBaseClass {
		// General Variables
		/**
		 * @var Referencia objReferencia
		 * @access protected
		 */
		protected $objReferencia;

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

		// Controls that allow the editing of Referencia's individual data fields
        /**
         * @var QLabel lblId;
         * @access protected
         */
		protected $lblId;

        /**
         * @var QTextBox txtNome;
         * @access protected
         */
		protected $txtNome;

        /**
         * @var QListBox lstReferenciaCategoria;
         * @access protected
         */
		protected $lstReferenciaCategoria;

        /**
         * @var QTextBox txtModelo;
         * @access protected
         */
		protected $txtModelo;

        /**
         * @var QListBox lstTecido;
         * @access protected
         */
		protected $lstTecido;


		// Controls that allow the viewing of Referencia's individual data fields
        /**
         * @var QLabel lblNome
         * @access protected
         */
		protected $lblNome;

        /**
         * @var QLabel lblReferenciaCategoriaId
         * @access protected
         */
		protected $lblReferenciaCategoriaId;

        /**
         * @var QLabel lblModelo
         * @access protected
         */
		protected $lblModelo;

        /**
         * @var QLabel lblTecidoId
         * @access protected
         */
		protected $lblTecidoId;


		// QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References
		protected $lstCors;

		protected $lstReferenciaRendimentosAsUniao;

		protected $lstTamanhos;


		// QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References
		protected $lblCors;

		protected $lblReferenciaRendimentosAsUniao;

		protected $lblTamanhos;



		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * ReferenciaMetaControl to edit a single Referencia object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single Referencia object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this ReferenciaMetaControl
		 * @param Referencia $objReferencia new or existing Referencia object
		 */
		 public function __construct($objParentObject, Referencia $objReferencia) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this ReferenciaMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked Referencia object
			$this->objReferencia = $objReferencia;

			// Figure out if we're Editing or Creating New
			if ($this->objReferencia->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this ReferenciaMetaControl
		 * @param integer $intId primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing Referencia object creation - defaults to CreateOrEdit
 		 * @return ReferenciaMetaControl
		 */
		public static function Create($objParentObject, $intId = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intId)) {
				$objReferencia = Referencia::Load($intId);

				// Referencia was found -- return it!
				if ($objReferencia)
					return new ReferenciaMetaControl($objParentObject, $objReferencia);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a Referencia object with PK arguments: ' . $intId);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new ReferenciaMetaControl($objParentObject, new Referencia());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this ReferenciaMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing Referencia object creation - defaults to CreateOrEdit
		 * @return ReferenciaMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intId = QApplication::PathInfo(0);
			return ReferenciaMetaControl::Create($objParentObject, $intId, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this ReferenciaMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing Referencia object creation - defaults to CreateOrEdit
		 * @return ReferenciaMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intId = QApplication::QueryString('intId');
			return ReferenciaMetaControl::Create($objParentObject, $intId, $intCreateType);
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
				$this->lblId->Text = $this->objReferencia->Id;
			else
				$this->lblId->Text = 'N/A';
			return $this->lblId;
		}

		/**
		 * Create and setup QTextBox txtNome
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtNome_Create($strControlId = null) {
			$this->txtNome = new QTextBox($this->objParentObject, $strControlId);
			$this->txtNome->Name = QApplication::Translate('Nome');
			$this->txtNome->Text = $this->objReferencia->Nome;
			$this->txtNome->Required = true;
			$this->txtNome->MaxLength = Referencia::NomeMaxLength;
			return $this->txtNome;
		}

		/**
		 * Create and setup QLabel lblNome
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblNome_Create($strControlId = null) {
			$this->lblNome = new QLabel($this->objParentObject, $strControlId);
			$this->lblNome->Name = QApplication::Translate('Nome');
			$this->lblNome->Text = $this->objReferencia->Nome;
			$this->lblNome->Required = true;
			return $this->lblNome;
		}

		/**
		 * Create and setup QListBox lstReferenciaCategoria
		 * @param string $strControlId optional ControlId to use
		 * @param QQCondition $objConditions override the default condition of QQ::All() to the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause object or array of QQClause objects for the query
		 * @return QListBox
		 */
		public function lstReferenciaCategoria_Create($strControlId = null, QQCondition $objCondition = null, $objOptionalClauses = null) {
			$this->lstReferenciaCategoria = new QListBox($this->objParentObject, $strControlId);
			$this->lstReferenciaCategoria->Name = QApplication::Translate('Referencia Categoria');
			$this->lstReferenciaCategoria->Required = true;
			if (!$this->blnEditMode)
				$this->lstReferenciaCategoria->AddItem(QApplication::Translate('- Select One -'), null);

			// Setup and perform the Query
			if (is_null($objCondition)) $objCondition = QQ::All();
			$objReferenciaCategoriaCursor = ReferenciaCategoria::QueryCursor($objCondition, $objOptionalClauses);

			// Iterate through the Cursor
			while ($objReferenciaCategoria = ReferenciaCategoria::InstantiateCursor($objReferenciaCategoriaCursor)) {
				$objListItem = new QListItem($objReferenciaCategoria->__toString(), $objReferenciaCategoria->Id);
				if (($this->objReferencia->ReferenciaCategoria) && ($this->objReferencia->ReferenciaCategoria->Id == $objReferenciaCategoria->Id))
					$objListItem->Selected = true;
				$this->lstReferenciaCategoria->AddItem($objListItem);
			}

			// Return the QListBox
			return $this->lstReferenciaCategoria;
		}

		/**
		 * Create and setup QLabel lblReferenciaCategoriaId
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblReferenciaCategoriaId_Create($strControlId = null) {
			$this->lblReferenciaCategoriaId = new QLabel($this->objParentObject, $strControlId);
			$this->lblReferenciaCategoriaId->Name = QApplication::Translate('Referencia Categoria');
			$this->lblReferenciaCategoriaId->Text = ($this->objReferencia->ReferenciaCategoria) ? $this->objReferencia->ReferenciaCategoria->__toString() : null;
			$this->lblReferenciaCategoriaId->Required = true;
			return $this->lblReferenciaCategoriaId;
		}

		/**
		 * Create and setup QTextBox txtModelo
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtModelo_Create($strControlId = null) {
			$this->txtModelo = new QTextBox($this->objParentObject, $strControlId);
			$this->txtModelo->Name = QApplication::Translate('Modelo');
			$this->txtModelo->Text = $this->objReferencia->Modelo;
			$this->txtModelo->Required = true;
			$this->txtModelo->MaxLength = Referencia::ModeloMaxLength;
			return $this->txtModelo;
		}

		/**
		 * Create and setup QLabel lblModelo
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblModelo_Create($strControlId = null) {
			$this->lblModelo = new QLabel($this->objParentObject, $strControlId);
			$this->lblModelo->Name = QApplication::Translate('Modelo');
			$this->lblModelo->Text = $this->objReferencia->Modelo;
			$this->lblModelo->Required = true;
			return $this->lblModelo;
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
				if (($this->objReferencia->Tecido) && ($this->objReferencia->Tecido->Id == $objTecido->Id))
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
			$this->lblTecidoId->Text = ($this->objReferencia->Tecido) ? $this->objReferencia->Tecido->__toString() : null;
			$this->lblTecidoId->Required = true;
			return $this->lblTecidoId;
		}

		/**
		 * Create and setup QListBox lstCors
		 * @param string $strControlId optional ControlId to use
		 * @param QQCondition $objConditions override the default condition of QQ::All() to the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause object or array of QQClause objects for the query
		 * @return QListBox
		 */
		public function lstCors_Create($strControlId = null, QQCondition $objCondition = null, $objOptionalClauses = null) {
			$this->lstCors = new QListBox($this->objParentObject, $strControlId);
			$this->lstCors->Name = QApplication::Translate('Cors');
			$this->lstCors->SelectionMode = QSelectionMode::Multiple;

			// We need to know which items to "Pre-Select"
			$objAssociatedArray = $this->objReferencia->GetCorArray();

			// Setup and perform the Query
			if (is_null($objCondition)) $objCondition = QQ::All();
			$objCorCursor = Cor::QueryCursor($objCondition, $objOptionalClauses);

			// Iterate through the Cursor
			while ($objCor = Cor::InstantiateCursor($objCorCursor)) {
				$objListItem = new QListItem($objCor->__toString(), $objCor->Id);
				foreach ($objAssociatedArray as $objAssociated) {
					if ($objAssociated->Id == $objCor->Id)
						$objListItem->Selected = true;
				}
				$this->lstCors->AddItem($objListItem);
			}

			// Return the QListControl
			return $this->lstCors;
		}

		/**
		 * Create and setup QLabel lblCors
		 * @param string $strControlId optional ControlId to use
		 * @param string $strGlue glue to display in between each associated object
		 * @return QLabel
		 */
		public function lblCors_Create($strControlId = null, $strGlue = ', ') {
			$this->lblCors = new QLabel($this->objParentObject, $strControlId);
			$this->lstCors->Name = QApplication::Translate('Cors');
			
			$objAssociatedArray = $this->objReferencia->GetCorArray();
			$strItems = array();
			foreach ($objAssociatedArray as $objAssociated)
				$strItems[] = $objAssociated->__toString();
			$this->lblCors->Text = implode($strGlue, $strItems);
			return $this->lblCors;
		}

		/**
		 * Create and setup QListBox lstReferenciaRendimentosAsUniao
		 * @param string $strControlId optional ControlId to use
		 * @param QQCondition $objConditions override the default condition of QQ::All() to the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause object or array of QQClause objects for the query
		 * @return QListBox
		 */
		public function lstReferenciaRendimentosAsUniao_Create($strControlId = null, QQCondition $objCondition = null, $objOptionalClauses = null) {
			$this->lstReferenciaRendimentosAsUniao = new QListBox($this->objParentObject, $strControlId);
			$this->lstReferenciaRendimentosAsUniao->Name = QApplication::Translate('Referencia Rendimentos As Uniao');
			$this->lstReferenciaRendimentosAsUniao->SelectionMode = QSelectionMode::Multiple;

			// We need to know which items to "Pre-Select"
			$objAssociatedArray = $this->objReferencia->GetReferenciaRendimentoAsUniaoArray();

			// Setup and perform the Query
			if (is_null($objCondition)) $objCondition = QQ::All();
			$objReferenciaRendimentoCursor = ReferenciaRendimento::QueryCursor($objCondition, $objOptionalClauses);

			// Iterate through the Cursor
			while ($objReferenciaRendimento = ReferenciaRendimento::InstantiateCursor($objReferenciaRendimentoCursor)) {
				$objListItem = new QListItem($objReferenciaRendimento->__toString(), $objReferenciaRendimento->Id);
				foreach ($objAssociatedArray as $objAssociated) {
					if ($objAssociated->Id == $objReferenciaRendimento->Id)
						$objListItem->Selected = true;
				}
				$this->lstReferenciaRendimentosAsUniao->AddItem($objListItem);
			}

			// Return the QListControl
			return $this->lstReferenciaRendimentosAsUniao;
		}

		/**
		 * Create and setup QLabel lblReferenciaRendimentosAsUniao
		 * @param string $strControlId optional ControlId to use
		 * @param string $strGlue glue to display in between each associated object
		 * @return QLabel
		 */
		public function lblReferenciaRendimentosAsUniao_Create($strControlId = null, $strGlue = ', ') {
			$this->lblReferenciaRendimentosAsUniao = new QLabel($this->objParentObject, $strControlId);
			$this->lstReferenciaRendimentosAsUniao->Name = QApplication::Translate('Referencia Rendimentos As Uniao');
			
			$objAssociatedArray = $this->objReferencia->GetReferenciaRendimentoAsUniaoArray();
			$strItems = array();
			foreach ($objAssociatedArray as $objAssociated)
				$strItems[] = $objAssociated->__toString();
			$this->lblReferenciaRendimentosAsUniao->Text = implode($strGlue, $strItems);
			return $this->lblReferenciaRendimentosAsUniao;
		}

		/**
		 * Create and setup QListBox lstTamanhos
		 * @param string $strControlId optional ControlId to use
		 * @param QQCondition $objConditions override the default condition of QQ::All() to the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause object or array of QQClause objects for the query
		 * @return QListBox
		 */
		public function lstTamanhos_Create($strControlId = null, QQCondition $objCondition = null, $objOptionalClauses = null) {
			$this->lstTamanhos = new QListBox($this->objParentObject, $strControlId);
			$this->lstTamanhos->Name = QApplication::Translate('Tamanhos');
			$this->lstTamanhos->SelectionMode = QSelectionMode::Multiple;

			// We need to know which items to "Pre-Select"
			$objAssociatedArray = $this->objReferencia->GetTamanhoArray();

			// Setup and perform the Query
			if (is_null($objCondition)) $objCondition = QQ::All();
			$objTamanhoCursor = Tamanho::QueryCursor($objCondition, $objOptionalClauses);

			// Iterate through the Cursor
			while ($objTamanho = Tamanho::InstantiateCursor($objTamanhoCursor)) {
				$objListItem = new QListItem($objTamanho->__toString(), $objTamanho->Id);
				foreach ($objAssociatedArray as $objAssociated) {
					if ($objAssociated->Id == $objTamanho->Id)
						$objListItem->Selected = true;
				}
				$this->lstTamanhos->AddItem($objListItem);
			}

			// Return the QListControl
			return $this->lstTamanhos;
		}

		/**
		 * Create and setup QLabel lblTamanhos
		 * @param string $strControlId optional ControlId to use
		 * @param string $strGlue glue to display in between each associated object
		 * @return QLabel
		 */
		public function lblTamanhos_Create($strControlId = null, $strGlue = ', ') {
			$this->lblTamanhos = new QLabel($this->objParentObject, $strControlId);
			$this->lstTamanhos->Name = QApplication::Translate('Tamanhos');
			
			$objAssociatedArray = $this->objReferencia->GetTamanhoArray();
			$strItems = array();
			foreach ($objAssociatedArray as $objAssociated)
				$strItems[] = $objAssociated->__toString();
			$this->lblTamanhos->Text = implode($strGlue, $strItems);
			return $this->lblTamanhos;
		}



		/**
		 * Refresh this MetaControl with Data from the local Referencia object.
		 * @param boolean $blnReload reload Referencia from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objReferencia->Reload();

			if ($this->lblId) if ($this->blnEditMode) $this->lblId->Text = $this->objReferencia->Id;

			if ($this->txtNome) $this->txtNome->Text = $this->objReferencia->Nome;
			if ($this->lblNome) $this->lblNome->Text = $this->objReferencia->Nome;

			if ($this->lstReferenciaCategoria) {
					$this->lstReferenciaCategoria->RemoveAllItems();
				if (!$this->blnEditMode)
					$this->lstReferenciaCategoria->AddItem(QApplication::Translate('- Select One -'), null);
				$objReferenciaCategoriaArray = ReferenciaCategoria::LoadAll();
				if ($objReferenciaCategoriaArray) foreach ($objReferenciaCategoriaArray as $objReferenciaCategoria) {
					$objListItem = new QListItem($objReferenciaCategoria->__toString(), $objReferenciaCategoria->Id);
					if (($this->objReferencia->ReferenciaCategoria) && ($this->objReferencia->ReferenciaCategoria->Id == $objReferenciaCategoria->Id))
						$objListItem->Selected = true;
					$this->lstReferenciaCategoria->AddItem($objListItem);
				}
			}
			if ($this->lblReferenciaCategoriaId) $this->lblReferenciaCategoriaId->Text = ($this->objReferencia->ReferenciaCategoria) ? $this->objReferencia->ReferenciaCategoria->__toString() : null;

			if ($this->txtModelo) $this->txtModelo->Text = $this->objReferencia->Modelo;
			if ($this->lblModelo) $this->lblModelo->Text = $this->objReferencia->Modelo;

			if ($this->lstTecido) {
					$this->lstTecido->RemoveAllItems();
				if (!$this->blnEditMode)
					$this->lstTecido->AddItem(QApplication::Translate('- Select One -'), null);
				$objTecidoArray = Tecido::LoadAll();
				if ($objTecidoArray) foreach ($objTecidoArray as $objTecido) {
					$objListItem = new QListItem($objTecido->__toString(), $objTecido->Id);
					if (($this->objReferencia->Tecido) && ($this->objReferencia->Tecido->Id == $objTecido->Id))
						$objListItem->Selected = true;
					$this->lstTecido->AddItem($objListItem);
				}
			}
			if ($this->lblTecidoId) $this->lblTecidoId->Text = ($this->objReferencia->Tecido) ? $this->objReferencia->Tecido->__toString() : null;

			if ($this->lstCors) {
				$this->lstCors->RemoveAllItems();
				$objAssociatedArray = $this->objReferencia->GetCorArray();
				$objCorArray = Cor::LoadAll();
				if ($objCorArray) foreach ($objCorArray as $objCor) {
					$objListItem = new QListItem($objCor->__toString(), $objCor->Id);
					foreach ($objAssociatedArray as $objAssociated) {
						if ($objAssociated->Id == $objCor->Id)
							$objListItem->Selected = true;
					}
					$this->lstCors->AddItem($objListItem);
				}
			}
			if ($this->lblCors) {
				$objAssociatedArray = $this->objReferencia->GetCorArray();
				$strItems = array();
				foreach ($objAssociatedArray as $objAssociated)
					$strItems[] = $objAssociated->__toString();
				$this->lblCors->Text = implode($strGlue, $strItems);
			}

			if ($this->lstReferenciaRendimentosAsUniao) {
				$this->lstReferenciaRendimentosAsUniao->RemoveAllItems();
				$objAssociatedArray = $this->objReferencia->GetReferenciaRendimentoAsUniaoArray();
				$objReferenciaRendimentoArray = ReferenciaRendimento::LoadAll();
				if ($objReferenciaRendimentoArray) foreach ($objReferenciaRendimentoArray as $objReferenciaRendimento) {
					$objListItem = new QListItem($objReferenciaRendimento->__toString(), $objReferenciaRendimento->Id);
					foreach ($objAssociatedArray as $objAssociated) {
						if ($objAssociated->Id == $objReferenciaRendimento->Id)
							$objListItem->Selected = true;
					}
					$this->lstReferenciaRendimentosAsUniao->AddItem($objListItem);
				}
			}
			if ($this->lblReferenciaRendimentosAsUniao) {
				$objAssociatedArray = $this->objReferencia->GetReferenciaRendimentoAsUniaoArray();
				$strItems = array();
				foreach ($objAssociatedArray as $objAssociated)
					$strItems[] = $objAssociated->__toString();
				$this->lblReferenciaRendimentosAsUniao->Text = implode($strGlue, $strItems);
			}

			if ($this->lstTamanhos) {
				$this->lstTamanhos->RemoveAllItems();
				$objAssociatedArray = $this->objReferencia->GetTamanhoArray();
				$objTamanhoArray = Tamanho::LoadAll();
				if ($objTamanhoArray) foreach ($objTamanhoArray as $objTamanho) {
					$objListItem = new QListItem($objTamanho->__toString(), $objTamanho->Id);
					foreach ($objAssociatedArray as $objAssociated) {
						if ($objAssociated->Id == $objTamanho->Id)
							$objListItem->Selected = true;
					}
					$this->lstTamanhos->AddItem($objListItem);
				}
			}
			if ($this->lblTamanhos) {
				$objAssociatedArray = $this->objReferencia->GetTamanhoArray();
				$strItems = array();
				foreach ($objAssociatedArray as $objAssociated)
					$strItems[] = $objAssociated->__toString();
				$this->lblTamanhos->Text = implode($strGlue, $strItems);
			}

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////

		protected function lstCors_Update() {
			if ($this->lstCors) {
				$this->objReferencia->UnassociateAllCors();
				$objSelectedListItems = $this->lstCors->SelectedItems;
				if ($objSelectedListItems) foreach ($objSelectedListItems as $objListItem) {
					$this->objReferencia->AssociateCor(Cor::Load($objListItem->Value));
				}
			}
		}

		protected function lstReferenciaRendimentosAsUniao_Update() {
			if ($this->lstReferenciaRendimentosAsUniao) {
				$this->objReferencia->UnassociateAllReferenciaRendimentosAsUniao();
				$objSelectedListItems = $this->lstReferenciaRendimentosAsUniao->SelectedItems;
				if ($objSelectedListItems) foreach ($objSelectedListItems as $objListItem) {
					$this->objReferencia->AssociateReferenciaRendimentoAsUniao(ReferenciaRendimento::Load($objListItem->Value));
				}
			}
		}

		protected function lstTamanhos_Update() {
			if ($this->lstTamanhos) {
				$this->objReferencia->UnassociateAllTamanhos();
				$objSelectedListItems = $this->lstTamanhos->SelectedItems;
				if ($objSelectedListItems) foreach ($objSelectedListItems as $objListItem) {
					$this->objReferencia->AssociateTamanho(Tamanho::Load($objListItem->Value));
				}
			}
		}





		///////////////////////////////////////////////
		// PUBLIC REFERENCIA OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's Referencia instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveReferencia() {
			try {
				// Update any fields for controls that have been created
				if ($this->txtNome) $this->objReferencia->Nome = $this->txtNome->Text;
				if ($this->lstReferenciaCategoria) $this->objReferencia->ReferenciaCategoriaId = $this->lstReferenciaCategoria->SelectedValue;
				if ($this->txtModelo) $this->objReferencia->Modelo = $this->txtModelo->Text;
				if ($this->lstTecido) $this->objReferencia->TecidoId = $this->lstTecido->SelectedValue;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the Referencia object
				$this->objReferencia->Save();

				// Finally, update any ManyToManyReferences (if any)
				$this->lstCors_Update();
				$this->lstReferenciaRendimentosAsUniao_Update();
				$this->lstTamanhos_Update();
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's Referencia instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteReferencia() {
			$this->objReferencia->UnassociateAllCors();
			$this->objReferencia->UnassociateAllReferenciaRendimentosAsUniao();
			$this->objReferencia->UnassociateAllTamanhos();
			$this->objReferencia->Delete();
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
				case 'Referencia': return $this->objReferencia;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to Referencia fields -- will be created dynamically if not yet created
				case 'IdControl':
					if (!$this->lblId) return $this->lblId_Create();
					return $this->lblId;
				case 'IdLabel':
					if (!$this->lblId) return $this->lblId_Create();
					return $this->lblId;
				case 'NomeControl':
					if (!$this->txtNome) return $this->txtNome_Create();
					return $this->txtNome;
				case 'NomeLabel':
					if (!$this->lblNome) return $this->lblNome_Create();
					return $this->lblNome;
				case 'ReferenciaCategoriaIdControl':
					if (!$this->lstReferenciaCategoria) return $this->lstReferenciaCategoria_Create();
					return $this->lstReferenciaCategoria;
				case 'ReferenciaCategoriaIdLabel':
					if (!$this->lblReferenciaCategoriaId) return $this->lblReferenciaCategoriaId_Create();
					return $this->lblReferenciaCategoriaId;
				case 'ModeloControl':
					if (!$this->txtModelo) return $this->txtModelo_Create();
					return $this->txtModelo;
				case 'ModeloLabel':
					if (!$this->lblModelo) return $this->lblModelo_Create();
					return $this->lblModelo;
				case 'TecidoIdControl':
					if (!$this->lstTecido) return $this->lstTecido_Create();
					return $this->lstTecido;
				case 'TecidoIdLabel':
					if (!$this->lblTecidoId) return $this->lblTecidoId_Create();
					return $this->lblTecidoId;
				case 'CorControl':
					if (!$this->lstCors) return $this->lstCors_Create();
					return $this->lstCors;
				case 'CorLabel':
					if (!$this->lblCors) return $this->lblCors_Create();
					return $this->lblCors;
				case 'ReferenciaRendimentoAsUniaoControl':
					if (!$this->lstReferenciaRendimentosAsUniao) return $this->lstReferenciaRendimentosAsUniao_Create();
					return $this->lstReferenciaRendimentosAsUniao;
				case 'ReferenciaRendimentoAsUniaoLabel':
					if (!$this->lblReferenciaRendimentosAsUniao) return $this->lblReferenciaRendimentosAsUniao_Create();
					return $this->lblReferenciaRendimentosAsUniao;
				case 'TamanhoControl':
					if (!$this->lstTamanhos) return $this->lstTamanhos_Create();
					return $this->lstTamanhos;
				case 'TamanhoLabel':
					if (!$this->lblTamanhos) return $this->lblTamanhos_Create();
					return $this->lblTamanhos;
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
					// Controls that point to Referencia fields
					case 'IdControl':
						return ($this->lblId = QType::Cast($mixValue, 'QControl'));
					case 'NomeControl':
						return ($this->txtNome = QType::Cast($mixValue, 'QControl'));
					case 'ReferenciaCategoriaIdControl':
						return ($this->lstReferenciaCategoria = QType::Cast($mixValue, 'QControl'));
					case 'ModeloControl':
						return ($this->txtModelo = QType::Cast($mixValue, 'QControl'));
					case 'TecidoIdControl':
						return ($this->lstTecido = QType::Cast($mixValue, 'QControl'));
					case 'CorControl':
						return ($this->lstCors = QType::Cast($mixValue, 'QControl'));
					case 'ReferenciaRendimentoAsUniaoControl':
						return ($this->lstReferenciaRendimentosAsUniao = QType::Cast($mixValue, 'QControl'));
					case 'TamanhoControl':
						return ($this->lstTamanhos = QType::Cast($mixValue, 'QControl'));
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