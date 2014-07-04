<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the BalancoPecas class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single BalancoPecas object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a BalancoPecasMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 * 
	 * @package My Application
	 * @subpackage MetaControls
	 * property-read BalancoPecas $BalancoPecas the actual BalancoPecas data class being edited
	 * property QLabel $IdControl
	 * property-read QLabel $IdLabel
	 * property QListBox $OrdemProducaoGradeIdControl
	 * property-read QLabel $OrdemProducaoGradeIdLabel
	 * property QIntegerTextBox $BalancoControl
	 * property-read QLabel $BalancoLabel
	 * property QIntegerTextBox $QuantidadeProduzidaControl
	 * property-read QLabel $QuantidadeProduzidaLabel
	 * property QCheckBox $ConcluidoControl
	 * property-read QLabel $ConcluidoLabel
	 * property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class BalancoPecasMetaControlGen extends QBaseClass {
		// General Variables
		/**
		 * @var BalancoPecas objBalancoPecas
		 * @access protected
		 */
		protected $objBalancoPecas;

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

		// Controls that allow the editing of BalancoPecas's individual data fields
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
         * @var QIntegerTextBox txtBalanco;
         * @access protected
         */
		protected $txtBalanco;

        /**
         * @var QIntegerTextBox txtQuantidadeProduzida;
         * @access protected
         */
		protected $txtQuantidadeProduzida;

        /**
         * @var QCheckBox chkConcluido;
         * @access protected
         */
		protected $chkConcluido;


		// Controls that allow the viewing of BalancoPecas's individual data fields
        /**
         * @var QLabel lblOrdemProducaoGradeId
         * @access protected
         */
		protected $lblOrdemProducaoGradeId;

        /**
         * @var QLabel lblBalanco
         * @access protected
         */
		protected $lblBalanco;

        /**
         * @var QLabel lblQuantidadeProduzida
         * @access protected
         */
		protected $lblQuantidadeProduzida;

        /**
         * @var QLabel lblConcluido
         * @access protected
         */
		protected $lblConcluido;


		// QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References

		// QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References


		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * BalancoPecasMetaControl to edit a single BalancoPecas object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single BalancoPecas object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this BalancoPecasMetaControl
		 * @param BalancoPecas $objBalancoPecas new or existing BalancoPecas object
		 */
		 public function __construct($objParentObject, BalancoPecas $objBalancoPecas) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this BalancoPecasMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked BalancoPecas object
			$this->objBalancoPecas = $objBalancoPecas;

			// Figure out if we're Editing or Creating New
			if ($this->objBalancoPecas->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this BalancoPecasMetaControl
		 * @param integer $intId primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing BalancoPecas object creation - defaults to CreateOrEdit
 		 * @return BalancoPecasMetaControl
		 */
		public static function Create($objParentObject, $intId = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intId)) {
				$objBalancoPecas = BalancoPecas::Load($intId);

				// BalancoPecas was found -- return it!
				if ($objBalancoPecas)
					return new BalancoPecasMetaControl($objParentObject, $objBalancoPecas);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a BalancoPecas object with PK arguments: ' . $intId);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new BalancoPecasMetaControl($objParentObject, new BalancoPecas());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this BalancoPecasMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing BalancoPecas object creation - defaults to CreateOrEdit
		 * @return BalancoPecasMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intId = QApplication::PathInfo(0);
			return BalancoPecasMetaControl::Create($objParentObject, $intId, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this BalancoPecasMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing BalancoPecas object creation - defaults to CreateOrEdit
		 * @return BalancoPecasMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intId = QApplication::QueryString('intId');
			return BalancoPecasMetaControl::Create($objParentObject, $intId, $intCreateType);
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
				$this->lblId->Text = $this->objBalancoPecas->Id;
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
			$objOrdemProducaoGradeCursor = ComandoRisco::QueryCursor($objCondition, $objOptionalClauses);

			// Iterate through the Cursor
			while ($objOrdemProducaoGrade = ComandoRisco::InstantiateCursor($objOrdemProducaoGradeCursor)) {
				$objListItem = new QListItem($objOrdemProducaoGrade->__toString(), $objOrdemProducaoGrade->Id);
				if (($this->objBalancoPecas->OrdemProducaoGrade) && ($this->objBalancoPecas->OrdemProducaoGrade->Id == $objOrdemProducaoGrade->Id))
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
			$this->lblOrdemProducaoGradeId->Text = ($this->objBalancoPecas->OrdemProducaoGrade) ? $this->objBalancoPecas->OrdemProducaoGrade->__toString() : null;
			$this->lblOrdemProducaoGradeId->Required = true;
			return $this->lblOrdemProducaoGradeId;
		}

		/**
		 * Create and setup QIntegerTextBox txtBalanco
		 * @param string $strControlId optional ControlId to use
		 * @return QIntegerTextBox
		 */
		public function txtBalanco_Create($strControlId = null) {
			$this->txtBalanco = new QIntegerTextBox($this->objParentObject, $strControlId);
			$this->txtBalanco->Name = QApplication::Translate('Balanco');
			$this->txtBalanco->Text = $this->objBalancoPecas->Balanco;
			$this->txtBalanco->Required = true;
			return $this->txtBalanco;
		}

		/**
		 * Create and setup QLabel lblBalanco
		 * @param string $strControlId optional ControlId to use
		 * @param string $strFormat optional sprintf format to use
		 * @return QLabel
		 */
		public function lblBalanco_Create($strControlId = null, $strFormat = null) {
			$this->lblBalanco = new QLabel($this->objParentObject, $strControlId);
			$this->lblBalanco->Name = QApplication::Translate('Balanco');
			$this->lblBalanco->Text = $this->objBalancoPecas->Balanco;
			$this->lblBalanco->Required = true;
			$this->lblBalanco->Format = $strFormat;
			return $this->lblBalanco;
		}

		/**
		 * Create and setup QIntegerTextBox txtQuantidadeProduzida
		 * @param string $strControlId optional ControlId to use
		 * @return QIntegerTextBox
		 */
		public function txtQuantidadeProduzida_Create($strControlId = null) {
			$this->txtQuantidadeProduzida = new QIntegerTextBox($this->objParentObject, $strControlId);
			$this->txtQuantidadeProduzida->Name = QApplication::Translate('Quantidade Produzida');
			$this->txtQuantidadeProduzida->Text = $this->objBalancoPecas->QuantidadeProduzida;
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
			$this->lblQuantidadeProduzida->Text = $this->objBalancoPecas->QuantidadeProduzida;
			$this->lblQuantidadeProduzida->Required = true;
			$this->lblQuantidadeProduzida->Format = $strFormat;
			return $this->lblQuantidadeProduzida;
		}

		/**
		 * Create and setup QCheckBox chkConcluido
		 * @param string $strControlId optional ControlId to use
		 * @return QCheckBox
		 */
		public function chkConcluido_Create($strControlId = null) {
			$this->chkConcluido = new QCheckBox($this->objParentObject, $strControlId);
			$this->chkConcluido->Name = QApplication::Translate('Concluido');
			$this->chkConcluido->Checked = $this->objBalancoPecas->Concluido;
			return $this->chkConcluido;
		}

		/**
		 * Create and setup QLabel lblConcluido
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblConcluido_Create($strControlId = null) {
			$this->lblConcluido = new QLabel($this->objParentObject, $strControlId);
			$this->lblConcluido->Name = QApplication::Translate('Concluido');
			$this->lblConcluido->Text = ($this->objBalancoPecas->Concluido) ? QApplication::Translate('Yes') : QApplication::Translate('No');
			return $this->lblConcluido;
		}



		/**
		 * Refresh this MetaControl with Data from the local BalancoPecas object.
		 * @param boolean $blnReload reload BalancoPecas from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objBalancoPecas->Reload();

			if ($this->lblId) if ($this->blnEditMode) $this->lblId->Text = $this->objBalancoPecas->Id;

			if ($this->lstOrdemProducaoGrade) {
					$this->lstOrdemProducaoGrade->RemoveAllItems();
				if (!$this->blnEditMode)
					$this->lstOrdemProducaoGrade->AddItem(QApplication::Translate('- Select One -'), null);
				$objOrdemProducaoGradeArray = ComandoRisco::LoadAll();
				if ($objOrdemProducaoGradeArray) foreach ($objOrdemProducaoGradeArray as $objOrdemProducaoGrade) {
					$objListItem = new QListItem($objOrdemProducaoGrade->__toString(), $objOrdemProducaoGrade->Id);
					if (($this->objBalancoPecas->OrdemProducaoGrade) && ($this->objBalancoPecas->OrdemProducaoGrade->Id == $objOrdemProducaoGrade->Id))
						$objListItem->Selected = true;
					$this->lstOrdemProducaoGrade->AddItem($objListItem);
				}
			}
			if ($this->lblOrdemProducaoGradeId) $this->lblOrdemProducaoGradeId->Text = ($this->objBalancoPecas->OrdemProducaoGrade) ? $this->objBalancoPecas->OrdemProducaoGrade->__toString() : null;

			if ($this->txtBalanco) $this->txtBalanco->Text = $this->objBalancoPecas->Balanco;
			if ($this->lblBalanco) $this->lblBalanco->Text = $this->objBalancoPecas->Balanco;

			if ($this->txtQuantidadeProduzida) $this->txtQuantidadeProduzida->Text = $this->objBalancoPecas->QuantidadeProduzida;
			if ($this->lblQuantidadeProduzida) $this->lblQuantidadeProduzida->Text = $this->objBalancoPecas->QuantidadeProduzida;

			if ($this->chkConcluido) $this->chkConcluido->Checked = $this->objBalancoPecas->Concluido;
			if ($this->lblConcluido) $this->lblConcluido->Text = ($this->objBalancoPecas->Concluido) ? QApplication::Translate('Yes') : QApplication::Translate('No');

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC BALANCOPECAS OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's BalancoPecas instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveBalancoPecas() {
			try {
				// Update any fields for controls that have been created
				if ($this->lstOrdemProducaoGrade) $this->objBalancoPecas->OrdemProducaoGradeId = $this->lstOrdemProducaoGrade->SelectedValue;
				if ($this->txtBalanco) $this->objBalancoPecas->Balanco = $this->txtBalanco->Text;
				if ($this->txtQuantidadeProduzida) $this->objBalancoPecas->QuantidadeProduzida = $this->txtQuantidadeProduzida->Text;
				if ($this->chkConcluido) $this->objBalancoPecas->Concluido = $this->chkConcluido->Checked;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the BalancoPecas object
				$this->objBalancoPecas->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's BalancoPecas instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteBalancoPecas() {
			$this->objBalancoPecas->Delete();
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
				case 'BalancoPecas': return $this->objBalancoPecas;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to BalancoPecas fields -- will be created dynamically if not yet created
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
				case 'BalancoControl':
					if (!$this->txtBalanco) return $this->txtBalanco_Create();
					return $this->txtBalanco;
				case 'BalancoLabel':
					if (!$this->lblBalanco) return $this->lblBalanco_Create();
					return $this->lblBalanco;
				case 'QuantidadeProduzidaControl':
					if (!$this->txtQuantidadeProduzida) return $this->txtQuantidadeProduzida_Create();
					return $this->txtQuantidadeProduzida;
				case 'QuantidadeProduzidaLabel':
					if (!$this->lblQuantidadeProduzida) return $this->lblQuantidadeProduzida_Create();
					return $this->lblQuantidadeProduzida;
				case 'ConcluidoControl':
					if (!$this->chkConcluido) return $this->chkConcluido_Create();
					return $this->chkConcluido;
				case 'ConcluidoLabel':
					if (!$this->lblConcluido) return $this->lblConcluido_Create();
					return $this->lblConcluido;
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
					// Controls that point to BalancoPecas fields
					case 'IdControl':
						return ($this->lblId = QType::Cast($mixValue, 'QControl'));
					case 'OrdemProducaoGradeIdControl':
						return ($this->lstOrdemProducaoGrade = QType::Cast($mixValue, 'QControl'));
					case 'BalancoControl':
						return ($this->txtBalanco = QType::Cast($mixValue, 'QControl'));
					case 'QuantidadeProduzidaControl':
						return ($this->txtQuantidadeProduzida = QType::Cast($mixValue, 'QControl'));
					case 'ConcluidoControl':
						return ($this->chkConcluido = QType::Cast($mixValue, 'QControl'));
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