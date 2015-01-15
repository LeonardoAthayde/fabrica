<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the ComandoItem class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single ComandoItem object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a ComandoItemMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 * 
	 * @package My Application
	 * @subpackage MetaControls
	 * property-read ComandoItem $ComandoItem the actual ComandoItem data class being edited
	 * property QLabel $IdControl
	 * property-read QLabel $IdLabel
	 * property QListBox $ComandoIdControl
	 * property-read QLabel $ComandoIdLabel
	 * property QTextBox $ReferenciaControl
	 * property-read QLabel $ReferenciaLabel
	 * property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class ComandoItemMetaControlGen extends QBaseClass {
		// General Variables
		/**
		 * @var ComandoItem objComandoItem
		 * @access protected
		 */
		protected $objComandoItem;

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

		// Controls that allow the editing of ComandoItem's individual data fields
        /**
         * @var QLabel lblId;
         * @access protected
         */
		protected $lblId;

        /**
         * @var QListBox lstComando;
         * @access protected
         */
		protected $lstComando;

        /**
         * @var QTextBox txtReferencia;
         * @access protected
         */
		protected $txtReferencia;


		// Controls that allow the viewing of ComandoItem's individual data fields
        /**
         * @var QLabel lblComandoId
         * @access protected
         */
		protected $lblComandoId;

        /**
         * @var QLabel lblReferencia
         * @access protected
         */
		protected $lblReferencia;


		// QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References

		// QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References


		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * ComandoItemMetaControl to edit a single ComandoItem object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single ComandoItem object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this ComandoItemMetaControl
		 * @param ComandoItem $objComandoItem new or existing ComandoItem object
		 */
		 public function __construct($objParentObject, ComandoItem $objComandoItem) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this ComandoItemMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked ComandoItem object
			$this->objComandoItem = $objComandoItem;

			// Figure out if we're Editing or Creating New
			if ($this->objComandoItem->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this ComandoItemMetaControl
		 * @param integer $intId primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing ComandoItem object creation - defaults to CreateOrEdit
 		 * @return ComandoItemMetaControl
		 */
		public static function Create($objParentObject, $intId = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intId)) {
				$objComandoItem = ComandoItem::Load($intId);

				// ComandoItem was found -- return it!
				if ($objComandoItem)
					return new ComandoItemMetaControl($objParentObject, $objComandoItem);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a ComandoItem object with PK arguments: ' . $intId);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new ComandoItemMetaControl($objParentObject, new ComandoItem());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this ComandoItemMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing ComandoItem object creation - defaults to CreateOrEdit
		 * @return ComandoItemMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intId = QApplication::PathInfo(0);
			return ComandoItemMetaControl::Create($objParentObject, $intId, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this ComandoItemMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing ComandoItem object creation - defaults to CreateOrEdit
		 * @return ComandoItemMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intId = QApplication::QueryString('intId');
			return ComandoItemMetaControl::Create($objParentObject, $intId, $intCreateType);
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
				$this->lblId->Text = $this->objComandoItem->Id;
			else
				$this->lblId->Text = 'N/A';
			return $this->lblId;
		}

		/**
		 * Create and setup QListBox lstComando
		 * @param string $strControlId optional ControlId to use
		 * @param QQCondition $objConditions override the default condition of QQ::All() to the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause object or array of QQClause objects for the query
		 * @return QListBox
		 */
		public function lstComando_Create($strControlId = null, QQCondition $objCondition = null, $objOptionalClauses = null) {
			$this->lstComando = new QListBox($this->objParentObject, $strControlId);
			$this->lstComando->Name = QApplication::Translate('Comando');
			$this->lstComando->Required = true;
			if (!$this->blnEditMode)
				$this->lstComando->AddItem(QApplication::Translate('- Select One -'), null);

			// Setup and perform the Query
			if (is_null($objCondition)) $objCondition = QQ::All();
			$objComandoCursor = Comando::QueryCursor($objCondition, $objOptionalClauses);

			// Iterate through the Cursor
			while ($objComando = Comando::InstantiateCursor($objComandoCursor)) {
				$objListItem = new QListItem($objComando->__toString(), $objComando->Id);
				if (($this->objComandoItem->Comando) && ($this->objComandoItem->Comando->Id == $objComando->Id))
					$objListItem->Selected = true;
				$this->lstComando->AddItem($objListItem);
			}

			// Return the QListBox
			return $this->lstComando;
		}

		/**
		 * Create and setup QLabel lblComandoId
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblComandoId_Create($strControlId = null) {
			$this->lblComandoId = new QLabel($this->objParentObject, $strControlId);
			$this->lblComandoId->Name = QApplication::Translate('Comando');
			$this->lblComandoId->Text = ($this->objComandoItem->Comando) ? $this->objComandoItem->Comando->__toString() : null;
			$this->lblComandoId->Required = true;
			return $this->lblComandoId;
		}

		/**
		 * Create and setup QTextBox txtReferencia
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtReferencia_Create($strControlId = null) {
			$this->txtReferencia = new QTextBox($this->objParentObject, $strControlId);
			$this->txtReferencia->Name = QApplication::Translate('Referencia');
			$this->txtReferencia->Text = $this->objComandoItem->Referencia;
			$this->txtReferencia->Required = true;
			$this->txtReferencia->MaxLength = ComandoItem::ReferenciaMaxLength;
			return $this->txtReferencia;
		}

		/**
		 * Create and setup QLabel lblReferencia
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblReferencia_Create($strControlId = null) {
			$this->lblReferencia = new QLabel($this->objParentObject, $strControlId);
			$this->lblReferencia->Name = QApplication::Translate('Referencia');
			$this->lblReferencia->Text = $this->objComandoItem->Referencia;
			$this->lblReferencia->Required = true;
			return $this->lblReferencia;
		}



		/**
		 * Refresh this MetaControl with Data from the local ComandoItem object.
		 * @param boolean $blnReload reload ComandoItem from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objComandoItem->Reload();

			if ($this->lblId) if ($this->blnEditMode) $this->lblId->Text = $this->objComandoItem->Id;

			if ($this->lstComando) {
					$this->lstComando->RemoveAllItems();
				if (!$this->blnEditMode)
					$this->lstComando->AddItem(QApplication::Translate('- Select One -'), null);
				$objComandoArray = Comando::LoadAll();
				if ($objComandoArray) foreach ($objComandoArray as $objComando) {
					$objListItem = new QListItem($objComando->__toString(), $objComando->Id);
					if (($this->objComandoItem->Comando) && ($this->objComandoItem->Comando->Id == $objComando->Id))
						$objListItem->Selected = true;
					$this->lstComando->AddItem($objListItem);
				}
			}
			if ($this->lblComandoId) $this->lblComandoId->Text = ($this->objComandoItem->Comando) ? $this->objComandoItem->Comando->__toString() : null;

			if ($this->txtReferencia) $this->txtReferencia->Text = $this->objComandoItem->Referencia;
			if ($this->lblReferencia) $this->lblReferencia->Text = $this->objComandoItem->Referencia;

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC COMANDOITEM OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's ComandoItem instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveComandoItem() {
			try {
				// Update any fields for controls that have been created
				if ($this->lstComando) $this->objComandoItem->ComandoId = $this->lstComando->SelectedValue;
				if ($this->txtReferencia) $this->objComandoItem->Referencia = $this->txtReferencia->Text;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the ComandoItem object
				$this->objComandoItem->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's ComandoItem instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteComandoItem() {
			$this->objComandoItem->Delete();
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
				case 'ComandoItem': return $this->objComandoItem;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to ComandoItem fields -- will be created dynamically if not yet created
				case 'IdControl':
					if (!$this->lblId) return $this->lblId_Create();
					return $this->lblId;
				case 'IdLabel':
					if (!$this->lblId) return $this->lblId_Create();
					return $this->lblId;
				case 'ComandoIdControl':
					if (!$this->lstComando) return $this->lstComando_Create();
					return $this->lstComando;
				case 'ComandoIdLabel':
					if (!$this->lblComandoId) return $this->lblComandoId_Create();
					return $this->lblComandoId;
				case 'ReferenciaControl':
					if (!$this->txtReferencia) return $this->txtReferencia_Create();
					return $this->txtReferencia;
				case 'ReferenciaLabel':
					if (!$this->lblReferencia) return $this->lblReferencia_Create();
					return $this->lblReferencia;
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
					// Controls that point to ComandoItem fields
					case 'IdControl':
						return ($this->lblId = QType::Cast($mixValue, 'QControl'));
					case 'ComandoIdControl':
						return ($this->lstComando = QType::Cast($mixValue, 'QControl'));
					case 'ReferenciaControl':
						return ($this->txtReferencia = QType::Cast($mixValue, 'QControl'));
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