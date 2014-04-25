<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the BalancoAcoes class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single BalancoAcoes object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a BalancoAcoesMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 * 
	 * @package My Application
	 * @subpackage MetaControls
	 * property-read BalancoAcoes $BalancoAcoes the actual BalancoAcoes data class being edited
	 * property QLabel $IdControl
	 * property-read QLabel $IdLabel
	 * property QListBox $OrdemProducaoGradeIdControl
	 * property-read QLabel $OrdemProducaoGradeIdLabel
	 * property QListBox $FluxogramaItemRealIdControl
	 * property-read QLabel $FluxogramaItemRealIdLabel
	 * property QIntegerTextBox $QuantidadeDisponivelControl
	 * property-read QLabel $QuantidadeDisponivelLabel
	 * property QIntegerTextBox $QuantidadeRemetidaControl
	 * property-read QLabel $QuantidadeRemetidaLabel
	 * property QIntegerTextBox $QuantidadeProduzidaControl
	 * property-read QLabel $QuantidadeProduzidaLabel
	 * property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class BalancoAcoesMetaControlGen extends QBaseClass {
		// General Variables
		/**
		 * @var BalancoAcoes objBalancoAcoes
		 * @access protected
		 */
		protected $objBalancoAcoes;

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

		// Controls that allow the editing of BalancoAcoes's individual data fields
        /**
         * @var QLabel lblId;
         * @access protected
         */
		protected $lblId;

        /**
         * @var QListBox lstOrdemProducaoGrade;
         * @access protected
         */
		protected $lstOrdemProducaoGrade;

        /**
         * @var QListBox lstFluxogramaItemReal;
         * @access protected
         */
		protected $lstFluxogramaItemReal;

        /**
         * @var QIntegerTextBox txtQuantidadeDisponivel;
         * @access protected
         */
		protected $txtQuantidadeDisponivel;

        /**
         * @var QIntegerTextBox txtQuantidadeRemetida;
         * @access protected
         */
		protected $txtQuantidadeRemetida;

        /**
         * @var QIntegerTextBox txtQuantidadeProduzida;
         * @access protected
         */
		protected $txtQuantidadeProduzida;


		// Controls that allow the viewing of BalancoAcoes's individual data fields
        /**
         * @var QLabel lblOrdemProducaoGradeId
         * @access protected
         */
		protected $lblOrdemProducaoGradeId;

        /**
         * @var QLabel lblFluxogramaItemRealId
         * @access protected
         */
		protected $lblFluxogramaItemRealId;

        /**
         * @var QLabel lblQuantidadeDisponivel
         * @access protected
         */
		protected $lblQuantidadeDisponivel;

        /**
         * @var QLabel lblQuantidadeRemetida
         * @access protected
         */
		protected $lblQuantidadeRemetida;

        /**
         * @var QLabel lblQuantidadeProduzida
         * @access protected
         */
		protected $lblQuantidadeProduzida;


		// QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References

		// QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References


		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * BalancoAcoesMetaControl to edit a single BalancoAcoes object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single BalancoAcoes object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this BalancoAcoesMetaControl
		 * @param BalancoAcoes $objBalancoAcoes new or existing BalancoAcoes object
		 */
		 public function __construct($objParentObject, BalancoAcoes $objBalancoAcoes) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this BalancoAcoesMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked BalancoAcoes object
			$this->objBalancoAcoes = $objBalancoAcoes;

			// Figure out if we're Editing or Creating New
			if ($this->objBalancoAcoes->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this BalancoAcoesMetaControl
		 * @param integer $intId primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing BalancoAcoes object creation - defaults to CreateOrEdit
 		 * @return BalancoAcoesMetaControl
		 */
		public static function Create($objParentObject, $intId = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intId)) {
				$objBalancoAcoes = BalancoAcoes::Load($intId);

				// BalancoAcoes was found -- return it!
				if ($objBalancoAcoes)
					return new BalancoAcoesMetaControl($objParentObject, $objBalancoAcoes);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a BalancoAcoes object with PK arguments: ' . $intId);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new BalancoAcoesMetaControl($objParentObject, new BalancoAcoes());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this BalancoAcoesMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing BalancoAcoes object creation - defaults to CreateOrEdit
		 * @return BalancoAcoesMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intId = QApplication::PathInfo(0);
			return BalancoAcoesMetaControl::Create($objParentObject, $intId, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this BalancoAcoesMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing BalancoAcoes object creation - defaults to CreateOrEdit
		 * @return BalancoAcoesMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intId = QApplication::QueryString('intId');
			return BalancoAcoesMetaControl::Create($objParentObject, $intId, $intCreateType);
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
				$this->lblId->Text = $this->objBalancoAcoes->Id;
			else
				$this->lblId->Text = 'N/A';
			return $this->lblId;
		}

		/**
		 * Create and setup QListBox lstOrdemProducaoGrade
		 * @param string $strControlId optional ControlId to use
		 * @param QQCondition $objConditions override the default condition of QQ::All() to the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause object or array of QQClause objects for the query
		 * @return QListBox
		 */
		public function lstOrdemProducaoGrade_Create($strControlId = null, QQCondition $objCondition = null, $objOptionalClauses = null) {
			$this->lstOrdemProducaoGrade = new QListBox($this->objParentObject, $strControlId);
			$this->lstOrdemProducaoGrade->Name = QApplication::Translate('Ordem Producao Grade');
			$this->lstOrdemProducaoGrade->Required = true;
			if (!$this->blnEditMode)
				$this->lstOrdemProducaoGrade->AddItem(QApplication::Translate('- Select One -'), null);

			// Setup and perform the Query
			if (is_null($objCondition)) $objCondition = QQ::All();
			$objOrdemProducaoGradeCursor = OrdemProducaoGrade::QueryCursor($objCondition, $objOptionalClauses);

			// Iterate through the Cursor
			while ($objOrdemProducaoGrade = OrdemProducaoGrade::InstantiateCursor($objOrdemProducaoGradeCursor)) {
				$objListItem = new QListItem($objOrdemProducaoGrade->__toString(), $objOrdemProducaoGrade->Id);
				if (($this->objBalancoAcoes->OrdemProducaoGrade) && ($this->objBalancoAcoes->OrdemProducaoGrade->Id == $objOrdemProducaoGrade->Id))
					$objListItem->Selected = true;
				$this->lstOrdemProducaoGrade->AddItem($objListItem);
			}

			// Return the QListBox
			return $this->lstOrdemProducaoGrade;
		}

		/**
		 * Create and setup QLabel lblOrdemProducaoGradeId
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblOrdemProducaoGradeId_Create($strControlId = null) {
			$this->lblOrdemProducaoGradeId = new QLabel($this->objParentObject, $strControlId);
			$this->lblOrdemProducaoGradeId->Name = QApplication::Translate('Ordem Producao Grade');
			$this->lblOrdemProducaoGradeId->Text = ($this->objBalancoAcoes->OrdemProducaoGrade) ? $this->objBalancoAcoes->OrdemProducaoGrade->__toString() : null;
			$this->lblOrdemProducaoGradeId->Required = true;
			return $this->lblOrdemProducaoGradeId;
		}

		/**
		 * Create and setup QListBox lstFluxogramaItemReal
		 * @param string $strControlId optional ControlId to use
		 * @param QQCondition $objConditions override the default condition of QQ::All() to the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause object or array of QQClause objects for the query
		 * @return QListBox
		 */
		public function lstFluxogramaItemReal_Create($strControlId = null, QQCondition $objCondition = null, $objOptionalClauses = null) {
			$this->lstFluxogramaItemReal = new QListBox($this->objParentObject, $strControlId);
			$this->lstFluxogramaItemReal->Name = QApplication::Translate('Fluxograma Item Real');
			$this->lstFluxogramaItemReal->Required = true;
			if (!$this->blnEditMode)
				$this->lstFluxogramaItemReal->AddItem(QApplication::Translate('- Select One -'), null);

			// Setup and perform the Query
			if (is_null($objCondition)) $objCondition = QQ::All();
			$objFluxogramaItemRealCursor = FluxogramaItemReal::QueryCursor($objCondition, $objOptionalClauses);

			// Iterate through the Cursor
			while ($objFluxogramaItemReal = FluxogramaItemReal::InstantiateCursor($objFluxogramaItemRealCursor)) {
				$objListItem = new QListItem($objFluxogramaItemReal->__toString(), $objFluxogramaItemReal->Id);
				if (($this->objBalancoAcoes->FluxogramaItemReal) && ($this->objBalancoAcoes->FluxogramaItemReal->Id == $objFluxogramaItemReal->Id))
					$objListItem->Selected = true;
				$this->lstFluxogramaItemReal->AddItem($objListItem);
			}

			// Return the QListBox
			return $this->lstFluxogramaItemReal;
		}

		/**
		 * Create and setup QLabel lblFluxogramaItemRealId
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblFluxogramaItemRealId_Create($strControlId = null) {
			$this->lblFluxogramaItemRealId = new QLabel($this->objParentObject, $strControlId);
			$this->lblFluxogramaItemRealId->Name = QApplication::Translate('Fluxograma Item Real');
			$this->lblFluxogramaItemRealId->Text = ($this->objBalancoAcoes->FluxogramaItemReal) ? $this->objBalancoAcoes->FluxogramaItemReal->__toString() : null;
			$this->lblFluxogramaItemRealId->Required = true;
			return $this->lblFluxogramaItemRealId;
		}

		/**
		 * Create and setup QIntegerTextBox txtQuantidadeDisponivel
		 * @param string $strControlId optional ControlId to use
		 * @return QIntegerTextBox
		 */
		public function txtQuantidadeDisponivel_Create($strControlId = null) {
			$this->txtQuantidadeDisponivel = new QIntegerTextBox($this->objParentObject, $strControlId);
			$this->txtQuantidadeDisponivel->Name = QApplication::Translate('Quantidade Disponivel');
			$this->txtQuantidadeDisponivel->Text = $this->objBalancoAcoes->QuantidadeDisponivel;
			$this->txtQuantidadeDisponivel->Required = true;
			return $this->txtQuantidadeDisponivel;
		}

		/**
		 * Create and setup QLabel lblQuantidadeDisponivel
		 * @param string $strControlId optional ControlId to use
		 * @param string $strFormat optional sprintf format to use
		 * @return QLabel
		 */
		public function lblQuantidadeDisponivel_Create($strControlId = null, $strFormat = null) {
			$this->lblQuantidadeDisponivel = new QLabel($this->objParentObject, $strControlId);
			$this->lblQuantidadeDisponivel->Name = QApplication::Translate('Quantidade Disponivel');
			$this->lblQuantidadeDisponivel->Text = $this->objBalancoAcoes->QuantidadeDisponivel;
			$this->lblQuantidadeDisponivel->Required = true;
			$this->lblQuantidadeDisponivel->Format = $strFormat;
			return $this->lblQuantidadeDisponivel;
		}

		/**
		 * Create and setup QIntegerTextBox txtQuantidadeRemetida
		 * @param string $strControlId optional ControlId to use
		 * @return QIntegerTextBox
		 */
		public function txtQuantidadeRemetida_Create($strControlId = null) {
			$this->txtQuantidadeRemetida = new QIntegerTextBox($this->objParentObject, $strControlId);
			$this->txtQuantidadeRemetida->Name = QApplication::Translate('Quantidade Remetida');
			$this->txtQuantidadeRemetida->Text = $this->objBalancoAcoes->QuantidadeRemetida;
			$this->txtQuantidadeRemetida->Required = true;
			return $this->txtQuantidadeRemetida;
		}

		/**
		 * Create and setup QLabel lblQuantidadeRemetida
		 * @param string $strControlId optional ControlId to use
		 * @param string $strFormat optional sprintf format to use
		 * @return QLabel
		 */
		public function lblQuantidadeRemetida_Create($strControlId = null, $strFormat = null) {
			$this->lblQuantidadeRemetida = new QLabel($this->objParentObject, $strControlId);
			$this->lblQuantidadeRemetida->Name = QApplication::Translate('Quantidade Remetida');
			$this->lblQuantidadeRemetida->Text = $this->objBalancoAcoes->QuantidadeRemetida;
			$this->lblQuantidadeRemetida->Required = true;
			$this->lblQuantidadeRemetida->Format = $strFormat;
			return $this->lblQuantidadeRemetida;
		}

		/**
		 * Create and setup QIntegerTextBox txtQuantidadeProduzida
		 * @param string $strControlId optional ControlId to use
		 * @return QIntegerTextBox
		 */
		public function txtQuantidadeProduzida_Create($strControlId = null) {
			$this->txtQuantidadeProduzida = new QIntegerTextBox($this->objParentObject, $strControlId);
			$this->txtQuantidadeProduzida->Name = QApplication::Translate('Quantidade Produzida');
			$this->txtQuantidadeProduzida->Text = $this->objBalancoAcoes->QuantidadeProduzida;
			$this->txtQuantidadeProduzida->Required = true;
			return $this->txtQuantidadeProduzida;
		}

		/**
		 * Create and setup QLabel lblQuantidadeProduzida
		 * @param string $strControlId optional ControlId to use
		 * @param string $strFormat optional sprintf format to use
		 * @return QLabel
		 */
		public function lblQuantidadeProduzida_Create($strControlId = null, $strFormat = null) {
			$this->lblQuantidadeProduzida = new QLabel($this->objParentObject, $strControlId);
			$this->lblQuantidadeProduzida->Name = QApplication::Translate('Quantidade Produzida');
			$this->lblQuantidadeProduzida->Text = $this->objBalancoAcoes->QuantidadeProduzida;
			$this->lblQuantidadeProduzida->Required = true;
			$this->lblQuantidadeProduzida->Format = $strFormat;
			return $this->lblQuantidadeProduzida;
		}



		/**
		 * Refresh this MetaControl with Data from the local BalancoAcoes object.
		 * @param boolean $blnReload reload BalancoAcoes from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objBalancoAcoes->Reload();

			if ($this->lblId) if ($this->blnEditMode) $this->lblId->Text = $this->objBalancoAcoes->Id;

			if ($this->lstOrdemProducaoGrade) {
					$this->lstOrdemProducaoGrade->RemoveAllItems();
				if (!$this->blnEditMode)
					$this->lstOrdemProducaoGrade->AddItem(QApplication::Translate('- Select One -'), null);
				$objOrdemProducaoGradeArray = OrdemProducaoGrade::LoadAll();
				if ($objOrdemProducaoGradeArray) foreach ($objOrdemProducaoGradeArray as $objOrdemProducaoGrade) {
					$objListItem = new QListItem($objOrdemProducaoGrade->__toString(), $objOrdemProducaoGrade->Id);
					if (($this->objBalancoAcoes->OrdemProducaoGrade) && ($this->objBalancoAcoes->OrdemProducaoGrade->Id == $objOrdemProducaoGrade->Id))
						$objListItem->Selected = true;
					$this->lstOrdemProducaoGrade->AddItem($objListItem);
				}
			}
			if ($this->lblOrdemProducaoGradeId) $this->lblOrdemProducaoGradeId->Text = ($this->objBalancoAcoes->OrdemProducaoGrade) ? $this->objBalancoAcoes->OrdemProducaoGrade->__toString() : null;

			if ($this->lstFluxogramaItemReal) {
					$this->lstFluxogramaItemReal->RemoveAllItems();
				if (!$this->blnEditMode)
					$this->lstFluxogramaItemReal->AddItem(QApplication::Translate('- Select One -'), null);
				$objFluxogramaItemRealArray = FluxogramaItemReal::LoadAll();
				if ($objFluxogramaItemRealArray) foreach ($objFluxogramaItemRealArray as $objFluxogramaItemReal) {
					$objListItem = new QListItem($objFluxogramaItemReal->__toString(), $objFluxogramaItemReal->Id);
					if (($this->objBalancoAcoes->FluxogramaItemReal) && ($this->objBalancoAcoes->FluxogramaItemReal->Id == $objFluxogramaItemReal->Id))
						$objListItem->Selected = true;
					$this->lstFluxogramaItemReal->AddItem($objListItem);
				}
			}
			if ($this->lblFluxogramaItemRealId) $this->lblFluxogramaItemRealId->Text = ($this->objBalancoAcoes->FluxogramaItemReal) ? $this->objBalancoAcoes->FluxogramaItemReal->__toString() : null;

			if ($this->txtQuantidadeDisponivel) $this->txtQuantidadeDisponivel->Text = $this->objBalancoAcoes->QuantidadeDisponivel;
			if ($this->lblQuantidadeDisponivel) $this->lblQuantidadeDisponivel->Text = $this->objBalancoAcoes->QuantidadeDisponivel;

			if ($this->txtQuantidadeRemetida) $this->txtQuantidadeRemetida->Text = $this->objBalancoAcoes->QuantidadeRemetida;
			if ($this->lblQuantidadeRemetida) $this->lblQuantidadeRemetida->Text = $this->objBalancoAcoes->QuantidadeRemetida;

			if ($this->txtQuantidadeProduzida) $this->txtQuantidadeProduzida->Text = $this->objBalancoAcoes->QuantidadeProduzida;
			if ($this->lblQuantidadeProduzida) $this->lblQuantidadeProduzida->Text = $this->objBalancoAcoes->QuantidadeProduzida;

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC BALANCOACOES OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's BalancoAcoes instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveBalancoAcoes() {
			try {
				// Update any fields for controls that have been created
				if ($this->lstOrdemProducaoGrade) $this->objBalancoAcoes->OrdemProducaoGradeId = $this->lstOrdemProducaoGrade->SelectedValue;
				if ($this->lstFluxogramaItemReal) $this->objBalancoAcoes->FluxogramaItemRealId = $this->lstFluxogramaItemReal->SelectedValue;
				if ($this->txtQuantidadeDisponivel) $this->objBalancoAcoes->QuantidadeDisponivel = $this->txtQuantidadeDisponivel->Text;
				if ($this->txtQuantidadeRemetida) $this->objBalancoAcoes->QuantidadeRemetida = $this->txtQuantidadeRemetida->Text;
				if ($this->txtQuantidadeProduzida) $this->objBalancoAcoes->QuantidadeProduzida = $this->txtQuantidadeProduzida->Text;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the BalancoAcoes object
				$this->objBalancoAcoes->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's BalancoAcoes instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteBalancoAcoes() {
			$this->objBalancoAcoes->Delete();
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
				case 'BalancoAcoes': return $this->objBalancoAcoes;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to BalancoAcoes fields -- will be created dynamically if not yet created
				case 'IdControl':
					if (!$this->lblId) return $this->lblId_Create();
					return $this->lblId;
				case 'IdLabel':
					if (!$this->lblId) return $this->lblId_Create();
					return $this->lblId;
				case 'OrdemProducaoGradeIdControl':
					if (!$this->lstOrdemProducaoGrade) return $this->lstOrdemProducaoGrade_Create();
					return $this->lstOrdemProducaoGrade;
				case 'OrdemProducaoGradeIdLabel':
					if (!$this->lblOrdemProducaoGradeId) return $this->lblOrdemProducaoGradeId_Create();
					return $this->lblOrdemProducaoGradeId;
				case 'FluxogramaItemRealIdControl':
					if (!$this->lstFluxogramaItemReal) return $this->lstFluxogramaItemReal_Create();
					return $this->lstFluxogramaItemReal;
				case 'FluxogramaItemRealIdLabel':
					if (!$this->lblFluxogramaItemRealId) return $this->lblFluxogramaItemRealId_Create();
					return $this->lblFluxogramaItemRealId;
				case 'QuantidadeDisponivelControl':
					if (!$this->txtQuantidadeDisponivel) return $this->txtQuantidadeDisponivel_Create();
					return $this->txtQuantidadeDisponivel;
				case 'QuantidadeDisponivelLabel':
					if (!$this->lblQuantidadeDisponivel) return $this->lblQuantidadeDisponivel_Create();
					return $this->lblQuantidadeDisponivel;
				case 'QuantidadeRemetidaControl':
					if (!$this->txtQuantidadeRemetida) return $this->txtQuantidadeRemetida_Create();
					return $this->txtQuantidadeRemetida;
				case 'QuantidadeRemetidaLabel':
					if (!$this->lblQuantidadeRemetida) return $this->lblQuantidadeRemetida_Create();
					return $this->lblQuantidadeRemetida;
				case 'QuantidadeProduzidaControl':
					if (!$this->txtQuantidadeProduzida) return $this->txtQuantidadeProduzida_Create();
					return $this->txtQuantidadeProduzida;
				case 'QuantidadeProduzidaLabel':
					if (!$this->lblQuantidadeProduzida) return $this->lblQuantidadeProduzida_Create();
					return $this->lblQuantidadeProduzida;
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
					// Controls that point to BalancoAcoes fields
					case 'IdControl':
						return ($this->lblId = QType::Cast($mixValue, 'QControl'));
					case 'OrdemProducaoGradeIdControl':
						return ($this->lstOrdemProducaoGrade = QType::Cast($mixValue, 'QControl'));
					case 'FluxogramaItemRealIdControl':
						return ($this->lstFluxogramaItemReal = QType::Cast($mixValue, 'QControl'));
					case 'QuantidadeDisponivelControl':
						return ($this->txtQuantidadeDisponivel = QType::Cast($mixValue, 'QControl'));
					case 'QuantidadeRemetidaControl':
						return ($this->txtQuantidadeRemetida = QType::Cast($mixValue, 'QControl'));
					case 'QuantidadeProduzidaControl':
						return ($this->txtQuantidadeProduzida = QType::Cast($mixValue, 'QControl'));
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