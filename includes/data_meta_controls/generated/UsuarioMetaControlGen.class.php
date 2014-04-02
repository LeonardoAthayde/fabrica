<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the Usuario class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single Usuario object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a UsuarioMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 * 
	 * @package My Application
	 * @subpackage MetaControls
	 * property-read Usuario $Usuario the actual Usuario data class being edited
	 * property QLabel $IdControl
	 * property-read QLabel $IdLabel
	 * property QTextBox $NomeControl
	 * property-read QLabel $NomeLabel
	 * property QIntegerTextBox $SenhaControl
	 * property-read QLabel $SenhaLabel
	 * property QListBox $MenuControl
	 * property-read QLabel $MenuLabel
	 * property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class UsuarioMetaControlGen extends QBaseClass {
		// General Variables
		/**
		 * @var Usuario objUsuario
		 * @access protected
		 */
		protected $objUsuario;

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

		// Controls that allow the editing of Usuario's individual data fields
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
         * @var QIntegerTextBox txtSenha;
         * @access protected
         */
		protected $txtSenha;


		// Controls that allow the viewing of Usuario's individual data fields
        /**
         * @var QLabel lblNome
         * @access protected
         */
		protected $lblNome;

        /**
         * @var QLabel lblSenha
         * @access protected
         */
		protected $lblSenha;


		// QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References
		protected $lstMenus;


		// QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References
		protected $lblMenus;



		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * UsuarioMetaControl to edit a single Usuario object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single Usuario object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this UsuarioMetaControl
		 * @param Usuario $objUsuario new or existing Usuario object
		 */
		 public function __construct($objParentObject, Usuario $objUsuario) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this UsuarioMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked Usuario object
			$this->objUsuario = $objUsuario;

			// Figure out if we're Editing or Creating New
			if ($this->objUsuario->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this UsuarioMetaControl
		 * @param integer $intId primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing Usuario object creation - defaults to CreateOrEdit
 		 * @return UsuarioMetaControl
		 */
		public static function Create($objParentObject, $intId = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intId)) {
				$objUsuario = Usuario::Load($intId);

				// Usuario was found -- return it!
				if ($objUsuario)
					return new UsuarioMetaControl($objParentObject, $objUsuario);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a Usuario object with PK arguments: ' . $intId);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new UsuarioMetaControl($objParentObject, new Usuario());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this UsuarioMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing Usuario object creation - defaults to CreateOrEdit
		 * @return UsuarioMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intId = QApplication::PathInfo(0);
			return UsuarioMetaControl::Create($objParentObject, $intId, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this UsuarioMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing Usuario object creation - defaults to CreateOrEdit
		 * @return UsuarioMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intId = QApplication::QueryString('intId');
			return UsuarioMetaControl::Create($objParentObject, $intId, $intCreateType);
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
				$this->lblId->Text = $this->objUsuario->Id;
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
			$this->txtNome->Text = $this->objUsuario->Nome;
			$this->txtNome->Required = true;
			$this->txtNome->MaxLength = Usuario::NomeMaxLength;
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
			$this->lblNome->Text = $this->objUsuario->Nome;
			$this->lblNome->Required = true;
			return $this->lblNome;
		}

		/**
		 * Create and setup QIntegerTextBox txtSenha
		 * @param string $strControlId optional ControlId to use
		 * @return QIntegerTextBox
		 */
		public function txtSenha_Create($strControlId = null) {
			$this->txtSenha = new QIntegerTextBox($this->objParentObject, $strControlId);
			$this->txtSenha->Name = QApplication::Translate('Senha');
			$this->txtSenha->Text = $this->objUsuario->Senha;
			$this->txtSenha->Required = true;
			return $this->txtSenha;
		}

		/**
		 * Create and setup QLabel lblSenha
		 * @param string $strControlId optional ControlId to use
		 * @param string $strFormat optional sprintf format to use
		 * @return QLabel
		 */
		public function lblSenha_Create($strControlId = null, $strFormat = null) {
			$this->lblSenha = new QLabel($this->objParentObject, $strControlId);
			$this->lblSenha->Name = QApplication::Translate('Senha');
			$this->lblSenha->Text = $this->objUsuario->Senha;
			$this->lblSenha->Required = true;
			$this->lblSenha->Format = $strFormat;
			return $this->lblSenha;
		}

		/**
		 * Create and setup QListBox lstMenus
		 * @param string $strControlId optional ControlId to use
		 * @param QQCondition $objConditions override the default condition of QQ::All() to the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause object or array of QQClause objects for the query
		 * @return QListBox
		 */
		public function lstMenus_Create($strControlId = null, QQCondition $objCondition = null, $objOptionalClauses = null) {
			$this->lstMenus = new QListBox($this->objParentObject, $strControlId);
			$this->lstMenus->Name = QApplication::Translate('Menus');
			$this->lstMenus->SelectionMode = QSelectionMode::Multiple;

			// We need to know which items to "Pre-Select"
			$objAssociatedArray = $this->objUsuario->GetMenuArray();

			// Setup and perform the Query
			if (is_null($objCondition)) $objCondition = QQ::All();
			$objMenuCursor = Menu::QueryCursor($objCondition, $objOptionalClauses);

			// Iterate through the Cursor
			while ($objMenu = Menu::InstantiateCursor($objMenuCursor)) {
				$objListItem = new QListItem($objMenu->__toString(), $objMenu->Id);
				foreach ($objAssociatedArray as $objAssociated) {
					if ($objAssociated->Id == $objMenu->Id)
						$objListItem->Selected = true;
				}
				$this->lstMenus->AddItem($objListItem);
			}

			// Return the QListControl
			return $this->lstMenus;
		}

		/**
		 * Create and setup QLabel lblMenus
		 * @param string $strControlId optional ControlId to use
		 * @param string $strGlue glue to display in between each associated object
		 * @return QLabel
		 */
		public function lblMenus_Create($strControlId = null, $strGlue = ', ') {
			$this->lblMenus = new QLabel($this->objParentObject, $strControlId);
			$this->lstMenus->Name = QApplication::Translate('Menus');
			
			$objAssociatedArray = $this->objUsuario->GetMenuArray();
			$strItems = array();
			foreach ($objAssociatedArray as $objAssociated)
				$strItems[] = $objAssociated->__toString();
			$this->lblMenus->Text = implode($strGlue, $strItems);
			return $this->lblMenus;
		}



		/**
		 * Refresh this MetaControl with Data from the local Usuario object.
		 * @param boolean $blnReload reload Usuario from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objUsuario->Reload();

			if ($this->lblId) if ($this->blnEditMode) $this->lblId->Text = $this->objUsuario->Id;

			if ($this->txtNome) $this->txtNome->Text = $this->objUsuario->Nome;
			if ($this->lblNome) $this->lblNome->Text = $this->objUsuario->Nome;

			if ($this->txtSenha) $this->txtSenha->Text = $this->objUsuario->Senha;
			if ($this->lblSenha) $this->lblSenha->Text = $this->objUsuario->Senha;

			if ($this->lstMenus) {
				$this->lstMenus->RemoveAllItems();
				$objAssociatedArray = $this->objUsuario->GetMenuArray();
				$objMenuArray = Menu::LoadAll();
				if ($objMenuArray) foreach ($objMenuArray as $objMenu) {
					$objListItem = new QListItem($objMenu->__toString(), $objMenu->Id);
					foreach ($objAssociatedArray as $objAssociated) {
						if ($objAssociated->Id == $objMenu->Id)
							$objListItem->Selected = true;
					}
					$this->lstMenus->AddItem($objListItem);
				}
			}
			if ($this->lblMenus) {
				$objAssociatedArray = $this->objUsuario->GetMenuArray();
				$strItems = array();
				foreach ($objAssociatedArray as $objAssociated)
					$strItems[] = $objAssociated->__toString();
				$this->lblMenus->Text = implode($strGlue, $strItems);
			}

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////

		protected function lstMenus_Update() {
			if ($this->lstMenus) {
				$this->objUsuario->UnassociateAllMenus();
				$objSelectedListItems = $this->lstMenus->SelectedItems;
				if ($objSelectedListItems) foreach ($objSelectedListItems as $objListItem) {
					$this->objUsuario->AssociateMenu(Menu::Load($objListItem->Value));
				}
			}
		}





		///////////////////////////////////////////////
		// PUBLIC USUARIO OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's Usuario instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveUsuario() {
			try {
				// Update any fields for controls that have been created
				if ($this->txtNome) $this->objUsuario->Nome = $this->txtNome->Text;
				if ($this->txtSenha) $this->objUsuario->Senha = $this->txtSenha->Text;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the Usuario object
				$this->objUsuario->Save();

				// Finally, update any ManyToManyReferences (if any)
				$this->lstMenus_Update();
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's Usuario instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteUsuario() {
			$this->objUsuario->UnassociateAllMenus();
			$this->objUsuario->Delete();
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
				case 'Usuario': return $this->objUsuario;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to Usuario fields -- will be created dynamically if not yet created
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
				case 'SenhaControl':
					if (!$this->txtSenha) return $this->txtSenha_Create();
					return $this->txtSenha;
				case 'SenhaLabel':
					if (!$this->lblSenha) return $this->lblSenha_Create();
					return $this->lblSenha;
				case 'MenuControl':
					if (!$this->lstMenus) return $this->lstMenus_Create();
					return $this->lstMenus;
				case 'MenuLabel':
					if (!$this->lblMenus) return $this->lblMenus_Create();
					return $this->lblMenus;
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
					// Controls that point to Usuario fields
					case 'IdControl':
						return ($this->lblId = QType::Cast($mixValue, 'QControl'));
					case 'NomeControl':
						return ($this->txtNome = QType::Cast($mixValue, 'QControl'));
					case 'SenhaControl':
						return ($this->txtSenha = QType::Cast($mixValue, 'QControl'));
					case 'MenuControl':
						return ($this->lstMenus = QType::Cast($mixValue, 'QControl'));
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