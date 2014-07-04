<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the ComandoRiscoPeca class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single ComandoRiscoPeca object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a ComandoRiscoPecaMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 * 
	 * @package My Application
	 * @subpackage MetaControls
	 * property-read ComandoRiscoPeca $ComandoRiscoPeca the actual ComandoRiscoPeca data class being edited
	 * property QLabel $IdControl
	 * property-read QLabel $IdLabel
	 * property QIntegerTextBox $QuantidadeRealControl
	 * property-read QLabel $QuantidadeRealLabel
	 * property QFloatTextBox $PesoControl
	 * property-read QLabel $PesoLabel
	 * property QListBox $ComandoRiscoIdControl
	 * property-read QLabel $ComandoRiscoIdLabel
	 * property QListBox $ComandoPecaIdControl
	 * property-read QLabel $ComandoPecaIdLabel
	 * property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class ComandoRiscoPecaMetaControlGen extends QBaseClass {
		// General Variables
		/**
		 * @var ComandoRiscoPeca objComandoRiscoPeca
		 * @access protected
		 */
		protected $objComandoRiscoPeca;

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

		// Controls that allow the editing of ComandoRiscoPeca's individual data fields
        /**
         * @var QLabel lblId;
         * @access protected
         */
		protected $lblId;

        /**
         * @var QIntegerTextBox txtQuantidadeReal;
         * @access protected
         */
		protected $txtQuantidadeReal;

        /**
         * @var QFloatTextBox txtPeso;
         * @access protected
         */
		protected $txtPeso;

        /**
         * @var QListBox lstComandoRisco;
         * @access protected
         */
		protected $lstComandoRisco;

        /**
         * @var QListBox lstComandoPeca;
         * @access protected
         */
		protected $lstComandoPeca;


		// Controls that allow the viewing of ComandoRiscoPeca's individual data fields
        /**
         * @var QLabel lblQuantidadeReal
         * @access protected
         */
		protected $lblQuantidadeReal;

        /**
         * @var QLabel lblPeso
         * @access protected
         */
		protected $lblPeso;

        /**
         * @var QLabel lblComandoRiscoId
         * @access protected
         */
		protected $lblComandoRiscoId;

        /**
         * @var QLabel lblComandoPecaId
         * @access protected
         */
		protected $lblComandoPecaId;


		// QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References

		// QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References


		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * ComandoRiscoPecaMetaControl to edit a single ComandoRiscoPeca object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single ComandoRiscoPeca object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this ComandoRiscoPecaMetaControl
		 * @param ComandoRiscoPeca $objComandoRiscoPeca new or existing ComandoRiscoPeca object
		 */
		 public function __construct($objParentObject, ComandoRiscoPeca $objComandoRiscoPeca) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this ComandoRiscoPecaMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked ComandoRiscoPeca object
			$this->objComandoRiscoPeca = $objComandoRiscoPeca;

			// Figure out if we're Editing or Creating New
			if ($this->objComandoRiscoPeca->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this ComandoRiscoPecaMetaControl
		 * @param integer $intId primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing ComandoRiscoPeca object creation - defaults to CreateOrEdit
 		 * @return ComandoRiscoPecaMetaControl
		 */
		public static function Create($objParentObject, $intId = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intId)) {
				$objComandoRiscoPeca = ComandoRiscoPeca::Load($intId);

				// ComandoRiscoPeca was found -- return it!
				if ($objComandoRiscoPeca)
					return new ComandoRiscoPecaMetaControl($objParentObject, $objComandoRiscoPeca);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a ComandoRiscoPeca object with PK arguments: ' . $intId);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new ComandoRiscoPecaMetaControl($objParentObject, new ComandoRiscoPeca());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this ComandoRiscoPecaMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing ComandoRiscoPeca object creation - defaults to CreateOrEdit
		 * @return ComandoRiscoPecaMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intId = QApplication::PathInfo(0);
			return ComandoRiscoPecaMetaControl::Create($objParentObject, $intId, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this ComandoRiscoPecaMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing ComandoRiscoPeca object creation - defaults to CreateOrEdit
		 * @return ComandoRiscoPecaMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intId = QApplication::QueryString('intId');
			return ComandoRiscoPecaMetaControl::Create($objParentObject, $intId, $intCreateType);
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
				$this->lblId->Text = $this->objComandoRiscoPeca->Id;
			else
				$this->lblId->Text = 'N/A';
			return $this->lblId;
		}

		/**
		 * Create and setup QIntegerTextBox txtQuantidadeReal
		 * @param string $strControlId optional ControlId to use
		 * @return QIntegerTextBox
		 */
		public function txtQuantidadeReal_Create($strControlId = null) {
			$this->txtQuantidadeReal = new QIntegerTextBox($this->objParentObject, $strControlId);
			$this->txtQuantidadeReal->Name = QApplication::Translate('Quantidade Real');
			$this->txtQuantidadeReal->Text = $this->objComandoRiscoPeca->QuantidadeReal;
			$this->txtQuantidadeReal->Required = true;
			return $this->txtQuantidadeReal;
		}

		/**
		 * Create and setup QLabel lblQuantidadeReal
		 * @param string $strControlId optional ControlId to use
		 * @param string $strFormat optional sprintf format to use
		 * @return QLabel
		 */
		public function lblQuantidadeReal_Create($strControlId = null, $strFormat = null) {
			$this->lblQuantidadeReal = new QLabel($this->objParentObject, $strControlId);
			$this->lblQuantidadeReal->Name = QApplication::Translate('Quantidade Real');
			$this->lblQuantidadeReal->Text = $this->objComandoRiscoPeca->QuantidadeReal;
			$this->lblQuantidadeReal->Required = true;
			$this->lblQuantidadeReal->Format = $strFormat;
			return $this->lblQuantidadeReal;
		}

		/**
		 * Create and setup QFloatTextBox txtPeso
		 * @param string $strControlId optional ControlId to use
		 * @return QFloatTextBox
		 */
		public function txtPeso_Create($strControlId = null) {
			$this->txtPeso = new QFloatTextBox($this->objParentObject, $strControlId);
			$this->txtPeso->Name = QApplication::Translate('Peso');
			$this->txtPeso->Text = $this->objComandoRiscoPeca->Peso;
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
			$this->lblPeso->Text = $this->objComandoRiscoPeca->Peso;
			$this->lblPeso->Required = true;
			$this->lblPeso->Format = $strFormat;
			return $this->lblPeso;
		}

		/**
		 * Create and setup QListBox lstComandoRisco
		 * @param string $strControlId optional ControlId to use
		 * @param QQCondition $objConditions override the default condition of QQ::All() to the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause object or array of QQClause objects for the query
		 * @return QListBox
		 */
		public function lstComandoRisco_Create($strControlId = null, QQCondition $objCondition = null, $objOptionalClauses = null) {
			$this->lstComandoRisco = new QListBox($this->objParentObject, $strControlId);
			$this->lstComandoRisco->Name = QApplication::Translate('Comando Risco');
			$this->lstComandoRisco->Required = true;
			if (!$this->blnEditMode)
				$this->lstComandoRisco->AddItem(QApplication::Translate('- Select One -'), null);

			// Setup and perform the Query
			if (is_null($objCondition)) $objCondition = QQ::All();
			$objComandoRiscoCursor = ComandoRisco::QueryCursor($objCondition, $objOptionalClauses);

			// Iterate through the Cursor
			while ($objComandoRisco = ComandoRisco::InstantiateCursor($objComandoRiscoCursor)) {
				$objListItem = new QListItem($objComandoRisco->__toString(), $objComandoRisco->Id);
				if (($this->objComandoRiscoPeca->ComandoRisco) && ($this->objComandoRiscoPeca->ComandoRisco->Id == $objComandoRisco->Id))
					$objListItem->Selected = true;
				$this->lstComandoRisco->AddItem($objListItem);
			}

			// Return the QListBox
			return $this->lstComandoRisco;
		}

		/**
		 * Create and setup QLabel lblComandoRiscoId
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblComandoRiscoId_Create($strControlId = null) {
			$this->lblComandoRiscoId = new QLabel($this->objParentObject, $strControlId);
			$this->lblComandoRiscoId->Name = QApplication::Translate('Comando Risco');
			$this->lblComandoRiscoId->Text = ($this->objComandoRiscoPeca->ComandoRisco) ? $this->objComandoRiscoPeca->ComandoRisco->__toString() : null;
			$this->lblComandoRiscoId->Required = true;
			return $this->lblComandoRiscoId;
		}

		/**
		 * Create and setup QListBox lstComandoPeca
		 * @param string $strControlId optional ControlId to use
		 * @param QQCondition $objConditions override the default condition of QQ::All() to the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause object or array of QQClause objects for the query
		 * @return QListBox
		 */
		public function lstComandoPeca_Create($strControlId = null, QQCondition $objCondition = null, $objOptionalClauses = null) {
			$this->lstComandoPeca = new QListBox($this->objParentObject, $strControlId);
			$this->lstComandoPeca->Name = QApplication::Translate('Comando Peca');
			$this->lstComandoPeca->Required = true;
			if (!$this->blnEditMode)
				$this->lstComandoPeca->AddItem(QApplication::Translate('- Select One -'), null);

			// Setup and perform the Query
			if (is_null($objCondition)) $objCondition = QQ::All();
			$objComandoPecaCursor = ComandoPeca::QueryCursor($objCondition, $objOptionalClauses);

			// Iterate through the Cursor
			while ($objComandoPeca = ComandoPeca::InstantiateCursor($objComandoPecaCursor)) {
				$objListItem = new QListItem($objComandoPeca->__toString(), $objComandoPeca->Id);
				if (($this->objComandoRiscoPeca->ComandoPeca) && ($this->objComandoRiscoPeca->ComandoPeca->Id == $objComandoPeca->Id))
					$objListItem->Selected = true;
				$this->lstComandoPeca->AddItem($objListItem);
			}

			// Return the QListBox
			return $this->lstComandoPeca;
		}

		/**
		 * Create and setup QLabel lblComandoPecaId
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblComandoPecaId_Create($strControlId = null) {
			$this->lblComandoPecaId = new QLabel($this->objParentObject, $strControlId);
			$this->lblComandoPecaId->Name = QApplication::Translate('Comando Peca');
			$this->lblComandoPecaId->Text = ($this->objComandoRiscoPeca->ComandoPeca) ? $this->objComandoRiscoPeca->ComandoPeca->__toString() : null;
			$this->lblComandoPecaId->Required = true;
			return $this->lblComandoPecaId;
		}



		/**
		 * Refresh this MetaControl with Data from the local ComandoRiscoPeca object.
		 * @param boolean $blnReload reload ComandoRiscoPeca from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objComandoRiscoPeca->Reload();

			if ($this->lblId) if ($this->blnEditMode) $this->lblId->Text = $this->objComandoRiscoPeca->Id;

			if ($this->txtQuantidadeReal) $this->txtQuantidadeReal->Text = $this->objComandoRiscoPeca->QuantidadeReal;
			if ($this->lblQuantidadeReal) $this->lblQuantidadeReal->Text = $this->objComandoRiscoPeca->QuantidadeReal;

			if ($this->txtPeso) $this->txtPeso->Text = $this->objComandoRiscoPeca->Peso;
			if ($this->lblPeso) $this->lblPeso->Text = $this->objComandoRiscoPeca->Peso;

			if ($this->lstComandoRisco) {
					$this->lstComandoRisco->RemoveAllItems();
				if (!$this->blnEditMode)
					$this->lstComandoRisco->AddItem(QApplication::Translate('- Select One -'), null);
				$objComandoRiscoArray = ComandoRisco::LoadAll();
				if ($objComandoRiscoArray) foreach ($objComandoRiscoArray as $objComandoRisco) {
					$objListItem = new QListItem($objComandoRisco->__toString(), $objComandoRisco->Id);
					if (($this->objComandoRiscoPeca->ComandoRisco) && ($this->objComandoRiscoPeca->ComandoRisco->Id == $objComandoRisco->Id))
						$objListItem->Selected = true;
					$this->lstComandoRisco->AddItem($objListItem);
				}
			}
			if ($this->lblComandoRiscoId) $this->lblComandoRiscoId->Text = ($this->objComandoRiscoPeca->ComandoRisco) ? $this->objComandoRiscoPeca->ComandoRisco->__toString() : null;

			if ($this->lstComandoPeca) {
					$this->lstComandoPeca->RemoveAllItems();
				if (!$this->blnEditMode)
					$this->lstComandoPeca->AddItem(QApplication::Translate('- Select One -'), null);
				$objComandoPecaArray = ComandoPeca::LoadAll();
				if ($objComandoPecaArray) foreach ($objComandoPecaArray as $objComandoPeca) {
					$objListItem = new QListItem($objComandoPeca->__toString(), $objComandoPeca->Id);
					if (($this->objComandoRiscoPeca->ComandoPeca) && ($this->objComandoRiscoPeca->ComandoPeca->Id == $objComandoPeca->Id))
						$objListItem->Selected = true;
					$this->lstComandoPeca->AddItem($objListItem);
				}
			}
			if ($this->lblComandoPecaId) $this->lblComandoPecaId->Text = ($this->objComandoRiscoPeca->ComandoPeca) ? $this->objComandoRiscoPeca->ComandoPeca->__toString() : null;

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC COMANDORISCOPECA OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's ComandoRiscoPeca instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveComandoRiscoPeca() {
			try {
				// Update any fields for controls that have been created
				if ($this->txtQuantidadeReal) $this->objComandoRiscoPeca->QuantidadeReal = $this->txtQuantidadeReal->Text;
				if ($this->txtPeso) $this->objComandoRiscoPeca->Peso = $this->txtPeso->Text;
				if ($this->lstComandoRisco) $this->objComandoRiscoPeca->ComandoRiscoId = $this->lstComandoRisco->SelectedValue;
				if ($this->lstComandoPeca) $this->objComandoRiscoPeca->ComandoPecaId = $this->lstComandoPeca->SelectedValue;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the ComandoRiscoPeca object
				$this->objComandoRiscoPeca->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's ComandoRiscoPeca instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteComandoRiscoPeca() {
			$this->objComandoRiscoPeca->Delete();
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
				case 'ComandoRiscoPeca': return $this->objComandoRiscoPeca;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to ComandoRiscoPeca fields -- will be created dynamically if not yet created
				case 'IdControl':
					if (!$this->lblId) return $this->lblId_Create();
					return $this->lblId;
				case 'IdLabel':
					if (!$this->lblId) return $this->lblId_Create();
					return $this->lblId;
				case 'QuantidadeRealControl':
					if (!$this->txtQuantidadeReal) return $this->txtQuantidadeReal_Create();
					return $this->txtQuantidadeReal;
				case 'QuantidadeRealLabel':
					if (!$this->lblQuantidadeReal) return $this->lblQuantidadeReal_Create();
					return $this->lblQuantidadeReal;
				case 'PesoControl':
					if (!$this->txtPeso) return $this->txtPeso_Create();
					return $this->txtPeso;
				case 'PesoLabel':
					if (!$this->lblPeso) return $this->lblPeso_Create();
					return $this->lblPeso;
				case 'ComandoRiscoIdControl':
					if (!$this->lstComandoRisco) return $this->lstComandoRisco_Create();
					return $this->lstComandoRisco;
				case 'ComandoRiscoIdLabel':
					if (!$this->lblComandoRiscoId) return $this->lblComandoRiscoId_Create();
					return $this->lblComandoRiscoId;
				case 'ComandoPecaIdControl':
					if (!$this->lstComandoPeca) return $this->lstComandoPeca_Create();
					return $this->lstComandoPeca;
				case 'ComandoPecaIdLabel':
					if (!$this->lblComandoPecaId) return $this->lblComandoPecaId_Create();
					return $this->lblComandoPecaId;
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
					// Controls that point to ComandoRiscoPeca fields
					case 'IdControl':
						return ($this->lblId = QType::Cast($mixValue, 'QControl'));
					case 'QuantidadeRealControl':
						return ($this->txtQuantidadeReal = QType::Cast($mixValue, 'QControl'));
					case 'PesoControl':
						return ($this->txtPeso = QType::Cast($mixValue, 'QControl'));
					case 'ComandoRiscoIdControl':
						return ($this->lstComandoRisco = QType::Cast($mixValue, 'QControl'));
					case 'ComandoPecaIdControl':
						return ($this->lstComandoPeca = QType::Cast($mixValue, 'QControl'));
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