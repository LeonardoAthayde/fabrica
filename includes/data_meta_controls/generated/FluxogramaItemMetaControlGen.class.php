<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the FluxogramaItem class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single FluxogramaItem object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a FluxogramaItemMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 * 
	 * @package My Application
	 * @subpackage MetaControls
	 * property-read FluxogramaItem $FluxogramaItem the actual FluxogramaItem data class being edited
	 * property QLabel $IdControl
	 * property-read QLabel $IdLabel
	 * property QListBox $ReferenciaIdControl
	 * property-read QLabel $ReferenciaIdLabel
	 * property QIntegerTextBox $OrdenacaoControl
	 * property-read QLabel $OrdenacaoLabel
	 * property QListBox $FluxogramaAcoesIdControl
	 * property-read QLabel $FluxogramaAcoesIdLabel
	 * property QListBox $MaquinaIdControl
	 * property-read QLabel $MaquinaIdLabel
	 * property QIntegerTextBox $TempoControl
	 * property-read QLabel $TempoLabel
	 * property QCheckBox $AtivoControl
	 * property-read QLabel $AtivoLabel
	 * property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class FluxogramaItemMetaControlGen extends QBaseClass {
		// General Variables
		/**
		 * @var FluxogramaItem objFluxogramaItem
		 * @access protected
		 */
		protected $objFluxogramaItem;

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

		// Controls that allow the editing of FluxogramaItem's individual data fields
        /**
         * @var QLabel lblId;
         * @access protected
         */
		protected $lblId;

        /**
         * @var QListBox lstReferencia;
         * @access protected
         */
		protected $lstReferencia;

        /**
         * @var QIntegerTextBox txtOrdenacao;
         * @access protected
         */
		protected $txtOrdenacao;

        /**
         * @var QListBox lstFluxogramaAcoes;
         * @access protected
         */
		protected $lstFluxogramaAcoes;

        /**
         * @var QListBox lstMaquina;
         * @access protected
         */
		protected $lstMaquina;

        /**
         * @var QIntegerTextBox txtTempo;
         * @access protected
         */
		protected $txtTempo;

        /**
         * @var QCheckBox chkAtivo;
         * @access protected
         */
		protected $chkAtivo;


		// Controls that allow the viewing of FluxogramaItem's individual data fields
        /**
         * @var QLabel lblReferenciaId
         * @access protected
         */
		protected $lblReferenciaId;

        /**
         * @var QLabel lblOrdenacao
         * @access protected
         */
		protected $lblOrdenacao;

        /**
         * @var QLabel lblFluxogramaAcoesId
         * @access protected
         */
		protected $lblFluxogramaAcoesId;

        /**
         * @var QLabel lblMaquinaId
         * @access protected
         */
		protected $lblMaquinaId;

        /**
         * @var QLabel lblTempo
         * @access protected
         */
		protected $lblTempo;

        /**
         * @var QLabel lblAtivo
         * @access protected
         */
		protected $lblAtivo;


		// QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References

		// QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References


		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * FluxogramaItemMetaControl to edit a single FluxogramaItem object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single FluxogramaItem object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this FluxogramaItemMetaControl
		 * @param FluxogramaItem $objFluxogramaItem new or existing FluxogramaItem object
		 */
		 public function __construct($objParentObject, FluxogramaItem $objFluxogramaItem) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this FluxogramaItemMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked FluxogramaItem object
			$this->objFluxogramaItem = $objFluxogramaItem;

			// Figure out if we're Editing or Creating New
			if ($this->objFluxogramaItem->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this FluxogramaItemMetaControl
		 * @param integer $intId primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing FluxogramaItem object creation - defaults to CreateOrEdit
 		 * @return FluxogramaItemMetaControl
		 */
		public static function Create($objParentObject, $intId = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intId)) {
				$objFluxogramaItem = FluxogramaItem::Load($intId);

				// FluxogramaItem was found -- return it!
				if ($objFluxogramaItem)
					return new FluxogramaItemMetaControl($objParentObject, $objFluxogramaItem);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a FluxogramaItem object with PK arguments: ' . $intId);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new FluxogramaItemMetaControl($objParentObject, new FluxogramaItem());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this FluxogramaItemMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing FluxogramaItem object creation - defaults to CreateOrEdit
		 * @return FluxogramaItemMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intId = QApplication::PathInfo(0);
			return FluxogramaItemMetaControl::Create($objParentObject, $intId, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this FluxogramaItemMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing FluxogramaItem object creation - defaults to CreateOrEdit
		 * @return FluxogramaItemMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intId = QApplication::QueryString('intId');
			return FluxogramaItemMetaControl::Create($objParentObject, $intId, $intCreateType);
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
				$this->lblId->Text = $this->objFluxogramaItem->Id;
			else
				$this->lblId->Text = 'N/A';
			return $this->lblId;
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
				if (($this->objFluxogramaItem->Referencia) && ($this->objFluxogramaItem->Referencia->Id == $objReferencia->Id))
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
			$this->lblReferenciaId->Text = ($this->objFluxogramaItem->Referencia) ? $this->objFluxogramaItem->Referencia->__toString() : null;
			$this->lblReferenciaId->Required = true;
			return $this->lblReferenciaId;
		}

		/**
		 * Create and setup QIntegerTextBox txtOrdenacao
		 * @param string $strControlId optional ControlId to use
		 * @return QIntegerTextBox
		 */
		public function txtOrdenacao_Create($strControlId = null) {
			$this->txtOrdenacao = new QIntegerTextBox($this->objParentObject, $strControlId);
			$this->txtOrdenacao->Name = QApplication::Translate('Ordenacao');
			$this->txtOrdenacao->Text = $this->objFluxogramaItem->Ordenacao;
			$this->txtOrdenacao->Required = true;
			return $this->txtOrdenacao;
		}

		/**
		 * Create and setup QLabel lblOrdenacao
		 * @param string $strControlId optional ControlId to use
		 * @param string $strFormat optional sprintf format to use
		 * @return QLabel
		 */
		public function lblOrdenacao_Create($strControlId = null, $strFormat = null) {
			$this->lblOrdenacao = new QLabel($this->objParentObject, $strControlId);
			$this->lblOrdenacao->Name = QApplication::Translate('Ordenacao');
			$this->lblOrdenacao->Text = $this->objFluxogramaItem->Ordenacao;
			$this->lblOrdenacao->Required = true;
			$this->lblOrdenacao->Format = $strFormat;
			return $this->lblOrdenacao;
		}

		/**
		 * Create and setup QListBox lstFluxogramaAcoes
		 * @param string $strControlId optional ControlId to use
		 * @param QQCondition $objConditions override the default condition of QQ::All() to the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause object or array of QQClause objects for the query
		 * @return QListBox
		 */
		public function lstFluxogramaAcoes_Create($strControlId = null, QQCondition $objCondition = null, $objOptionalClauses = null) {
			$this->lstFluxogramaAcoes = new QListBox($this->objParentObject, $strControlId);
			$this->lstFluxogramaAcoes->Name = QApplication::Translate('Fluxograma Acoes');
			$this->lstFluxogramaAcoes->AddItem(QApplication::Translate('- Select One -'), null);

			// Setup and perform the Query
			if (is_null($objCondition)) $objCondition = QQ::All();
			$objFluxogramaAcoesCursor = FluxogramaAcoes::QueryCursor($objCondition, $objOptionalClauses);

			// Iterate through the Cursor
			while ($objFluxogramaAcoes = FluxogramaAcoes::InstantiateCursor($objFluxogramaAcoesCursor)) {
				$objListItem = new QListItem($objFluxogramaAcoes->__toString(), $objFluxogramaAcoes->Id);
				if (($this->objFluxogramaItem->FluxogramaAcoes) && ($this->objFluxogramaItem->FluxogramaAcoes->Id == $objFluxogramaAcoes->Id))
					$objListItem->Selected = true;
				$this->lstFluxogramaAcoes->AddItem($objListItem);
			}

			// Return the QListBox
			return $this->lstFluxogramaAcoes;
		}

		/**
		 * Create and setup QLabel lblFluxogramaAcoesId
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblFluxogramaAcoesId_Create($strControlId = null) {
			$this->lblFluxogramaAcoesId = new QLabel($this->objParentObject, $strControlId);
			$this->lblFluxogramaAcoesId->Name = QApplication::Translate('Fluxograma Acoes');
			$this->lblFluxogramaAcoesId->Text = ($this->objFluxogramaItem->FluxogramaAcoes) ? $this->objFluxogramaItem->FluxogramaAcoes->__toString() : null;
			return $this->lblFluxogramaAcoesId;
		}

		/**
		 * Create and setup QListBox lstMaquina
		 * @param string $strControlId optional ControlId to use
		 * @param QQCondition $objConditions override the default condition of QQ::All() to the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause object or array of QQClause objects for the query
		 * @return QListBox
		 */
		public function lstMaquina_Create($strControlId = null, QQCondition $objCondition = null, $objOptionalClauses = null) {
			$this->lstMaquina = new QListBox($this->objParentObject, $strControlId);
			$this->lstMaquina->Name = QApplication::Translate('Maquina');
			$this->lstMaquina->AddItem(QApplication::Translate('- Select One -'), null);

			// Setup and perform the Query
			if (is_null($objCondition)) $objCondition = QQ::All();
			$objMaquinaCursor = Maquina::QueryCursor($objCondition, $objOptionalClauses);

			// Iterate through the Cursor
			while ($objMaquina = Maquina::InstantiateCursor($objMaquinaCursor)) {
				$objListItem = new QListItem($objMaquina->__toString(), $objMaquina->Id);
				if (($this->objFluxogramaItem->Maquina) && ($this->objFluxogramaItem->Maquina->Id == $objMaquina->Id))
					$objListItem->Selected = true;
				$this->lstMaquina->AddItem($objListItem);
			}

			// Return the QListBox
			return $this->lstMaquina;
		}

		/**
		 * Create and setup QLabel lblMaquinaId
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblMaquinaId_Create($strControlId = null) {
			$this->lblMaquinaId = new QLabel($this->objParentObject, $strControlId);
			$this->lblMaquinaId->Name = QApplication::Translate('Maquina');
			$this->lblMaquinaId->Text = ($this->objFluxogramaItem->Maquina) ? $this->objFluxogramaItem->Maquina->__toString() : null;
			return $this->lblMaquinaId;
		}

		/**
		 * Create and setup QIntegerTextBox txtTempo
		 * @param string $strControlId optional ControlId to use
		 * @return QIntegerTextBox
		 */
		public function txtTempo_Create($strControlId = null) {
			$this->txtTempo = new QIntegerTextBox($this->objParentObject, $strControlId);
			$this->txtTempo->Name = QApplication::Translate('Tempo');
			$this->txtTempo->Text = $this->objFluxogramaItem->Tempo;
			return $this->txtTempo;
		}

		/**
		 * Create and setup QLabel lblTempo
		 * @param string $strControlId optional ControlId to use
		 * @param string $strFormat optional sprintf format to use
		 * @return QLabel
		 */
		public function lblTempo_Create($strControlId = null, $strFormat = null) {
			$this->lblTempo = new QLabel($this->objParentObject, $strControlId);
			$this->lblTempo->Name = QApplication::Translate('Tempo');
			$this->lblTempo->Text = $this->objFluxogramaItem->Tempo;
			$this->lblTempo->Format = $strFormat;
			return $this->lblTempo;
		}

		/**
		 * Create and setup QCheckBox chkAtivo
		 * @param string $strControlId optional ControlId to use
		 * @return QCheckBox
		 */
		public function chkAtivo_Create($strControlId = null) {
			$this->chkAtivo = new QCheckBox($this->objParentObject, $strControlId);
			$this->chkAtivo->Name = QApplication::Translate('Ativo');
			$this->chkAtivo->Checked = $this->objFluxogramaItem->Ativo;
			return $this->chkAtivo;
		}

		/**
		 * Create and setup QLabel lblAtivo
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblAtivo_Create($strControlId = null) {
			$this->lblAtivo = new QLabel($this->objParentObject, $strControlId);
			$this->lblAtivo->Name = QApplication::Translate('Ativo');
			$this->lblAtivo->Text = ($this->objFluxogramaItem->Ativo) ? QApplication::Translate('Yes') : QApplication::Translate('No');
			return $this->lblAtivo;
		}



		/**
		 * Refresh this MetaControl with Data from the local FluxogramaItem object.
		 * @param boolean $blnReload reload FluxogramaItem from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objFluxogramaItem->Reload();

			if ($this->lblId) if ($this->blnEditMode) $this->lblId->Text = $this->objFluxogramaItem->Id;

			if ($this->lstReferencia) {
					$this->lstReferencia->RemoveAllItems();
				if (!$this->blnEditMode)
					$this->lstReferencia->AddItem(QApplication::Translate('- Select One -'), null);
				$objReferenciaArray = Referencia::LoadAll();
				if ($objReferenciaArray) foreach ($objReferenciaArray as $objReferencia) {
					$objListItem = new QListItem($objReferencia->__toString(), $objReferencia->Id);
					if (($this->objFluxogramaItem->Referencia) && ($this->objFluxogramaItem->Referencia->Id == $objReferencia->Id))
						$objListItem->Selected = true;
					$this->lstReferencia->AddItem($objListItem);
				}
			}
			if ($this->lblReferenciaId) $this->lblReferenciaId->Text = ($this->objFluxogramaItem->Referencia) ? $this->objFluxogramaItem->Referencia->__toString() : null;

			if ($this->txtOrdenacao) $this->txtOrdenacao->Text = $this->objFluxogramaItem->Ordenacao;
			if ($this->lblOrdenacao) $this->lblOrdenacao->Text = $this->objFluxogramaItem->Ordenacao;

			if ($this->lstFluxogramaAcoes) {
					$this->lstFluxogramaAcoes->RemoveAllItems();
				$this->lstFluxogramaAcoes->AddItem(QApplication::Translate('- Select One -'), null);
				$objFluxogramaAcoesArray = FluxogramaAcoes::LoadAll();
				if ($objFluxogramaAcoesArray) foreach ($objFluxogramaAcoesArray as $objFluxogramaAcoes) {
					$objListItem = new QListItem($objFluxogramaAcoes->__toString(), $objFluxogramaAcoes->Id);
					if (($this->objFluxogramaItem->FluxogramaAcoes) && ($this->objFluxogramaItem->FluxogramaAcoes->Id == $objFluxogramaAcoes->Id))
						$objListItem->Selected = true;
					$this->lstFluxogramaAcoes->AddItem($objListItem);
				}
			}
			if ($this->lblFluxogramaAcoesId) $this->lblFluxogramaAcoesId->Text = ($this->objFluxogramaItem->FluxogramaAcoes) ? $this->objFluxogramaItem->FluxogramaAcoes->__toString() : null;

			if ($this->lstMaquina) {
					$this->lstMaquina->RemoveAllItems();
				$this->lstMaquina->AddItem(QApplication::Translate('- Select One -'), null);
				$objMaquinaArray = Maquina::LoadAll();
				if ($objMaquinaArray) foreach ($objMaquinaArray as $objMaquina) {
					$objListItem = new QListItem($objMaquina->__toString(), $objMaquina->Id);
					if (($this->objFluxogramaItem->Maquina) && ($this->objFluxogramaItem->Maquina->Id == $objMaquina->Id))
						$objListItem->Selected = true;
					$this->lstMaquina->AddItem($objListItem);
				}
			}
			if ($this->lblMaquinaId) $this->lblMaquinaId->Text = ($this->objFluxogramaItem->Maquina) ? $this->objFluxogramaItem->Maquina->__toString() : null;

			if ($this->txtTempo) $this->txtTempo->Text = $this->objFluxogramaItem->Tempo;
			if ($this->lblTempo) $this->lblTempo->Text = $this->objFluxogramaItem->Tempo;

			if ($this->chkAtivo) $this->chkAtivo->Checked = $this->objFluxogramaItem->Ativo;
			if ($this->lblAtivo) $this->lblAtivo->Text = ($this->objFluxogramaItem->Ativo) ? QApplication::Translate('Yes') : QApplication::Translate('No');

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC FLUXOGRAMAITEM OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's FluxogramaItem instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveFluxogramaItem() {
			try {
				// Update any fields for controls that have been created
				if ($this->lstReferencia) $this->objFluxogramaItem->ReferenciaId = $this->lstReferencia->SelectedValue;
				if ($this->txtOrdenacao) $this->objFluxogramaItem->Ordenacao = $this->txtOrdenacao->Text;
				if ($this->lstFluxogramaAcoes) $this->objFluxogramaItem->FluxogramaAcoesId = $this->lstFluxogramaAcoes->SelectedValue;
				if ($this->lstMaquina) $this->objFluxogramaItem->MaquinaId = $this->lstMaquina->SelectedValue;
				if ($this->txtTempo) $this->objFluxogramaItem->Tempo = $this->txtTempo->Text;
				if ($this->chkAtivo) $this->objFluxogramaItem->Ativo = $this->chkAtivo->Checked;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the FluxogramaItem object
				$this->objFluxogramaItem->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's FluxogramaItem instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteFluxogramaItem() {
			$this->objFluxogramaItem->Delete();
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
				case 'FluxogramaItem': return $this->objFluxogramaItem;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to FluxogramaItem fields -- will be created dynamically if not yet created
				case 'IdControl':
					if (!$this->lblId) return $this->lblId_Create();
					return $this->lblId;
				case 'IdLabel':
					if (!$this->lblId) return $this->lblId_Create();
					return $this->lblId;
				case 'ReferenciaIdControl':
					if (!$this->lstReferencia) return $this->lstReferencia_Create();
					return $this->lstReferencia;
				case 'ReferenciaIdLabel':
					if (!$this->lblReferenciaId) return $this->lblReferenciaId_Create();
					return $this->lblReferenciaId;
				case 'OrdenacaoControl':
					if (!$this->txtOrdenacao) return $this->txtOrdenacao_Create();
					return $this->txtOrdenacao;
				case 'OrdenacaoLabel':
					if (!$this->lblOrdenacao) return $this->lblOrdenacao_Create();
					return $this->lblOrdenacao;
				case 'FluxogramaAcoesIdControl':
					if (!$this->lstFluxogramaAcoes) return $this->lstFluxogramaAcoes_Create();
					return $this->lstFluxogramaAcoes;
				case 'FluxogramaAcoesIdLabel':
					if (!$this->lblFluxogramaAcoesId) return $this->lblFluxogramaAcoesId_Create();
					return $this->lblFluxogramaAcoesId;
				case 'MaquinaIdControl':
					if (!$this->lstMaquina) return $this->lstMaquina_Create();
					return $this->lstMaquina;
				case 'MaquinaIdLabel':
					if (!$this->lblMaquinaId) return $this->lblMaquinaId_Create();
					return $this->lblMaquinaId;
				case 'TempoControl':
					if (!$this->txtTempo) return $this->txtTempo_Create();
					return $this->txtTempo;
				case 'TempoLabel':
					if (!$this->lblTempo) return $this->lblTempo_Create();
					return $this->lblTempo;
				case 'AtivoControl':
					if (!$this->chkAtivo) return $this->chkAtivo_Create();
					return $this->chkAtivo;
				case 'AtivoLabel':
					if (!$this->lblAtivo) return $this->lblAtivo_Create();
					return $this->lblAtivo;
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
					// Controls that point to FluxogramaItem fields
					case 'IdControl':
						return ($this->lblId = QType::Cast($mixValue, 'QControl'));
					case 'ReferenciaIdControl':
						return ($this->lstReferencia = QType::Cast($mixValue, 'QControl'));
					case 'OrdenacaoControl':
						return ($this->txtOrdenacao = QType::Cast($mixValue, 'QControl'));
					case 'FluxogramaAcoesIdControl':
						return ($this->lstFluxogramaAcoes = QType::Cast($mixValue, 'QControl'));
					case 'MaquinaIdControl':
						return ($this->lstMaquina = QType::Cast($mixValue, 'QControl'));
					case 'TempoControl':
						return ($this->txtTempo = QType::Cast($mixValue, 'QControl'));
					case 'AtivoControl':
						return ($this->chkAtivo = QType::Cast($mixValue, 'QControl'));
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