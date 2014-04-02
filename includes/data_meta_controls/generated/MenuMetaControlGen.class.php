<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the Menu class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single Menu object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a MenuMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 * 
	 * @package My Application
	 * @subpackage MetaControls
	 * property-read Menu $Menu the actual Menu data class being edited
	 * property QLabel $IdControl
	 * property-read QLabel $IdLabel
	 * property QTextBox $NomeControl
	 * property-read QLabel $NomeLabel
	 * property QTextBox $LinkControl
	 * property-read QLabel $LinkLabel
	 * property QListBox $MenuIdControl
	 * property-read QLabel $MenuIdLabel
	 * property QIntegerTextBox $OrdenacaoControl
	 * property-read QLabel $OrdenacaoLabel
	 * property QTextBox $IconControl
	 * property-read QLabel $IconLabel
	 * property QListBox $UsuarioControl
	 * property-read QLabel $UsuarioLabel
	 * property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class MenuMetaControlGen extends QBaseClass {
		// General Variables
		/**
		 * @var Menu objMenu
		 * @access protected
		 */
		protected $objMenu;

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

		// Controls that allow the editing of Menu's individual data fields
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
         * @var QTextBox txtLink;
         * @access protected
         */
		protected $txtLink;

        /**
         * @var QListBox lstMenu;
         * @access protected
         */
		protected $lstMenu;

        /**
         * @var QIntegerTextBox txtOrdenacao;
         * @access protected
         */
		protected $txtOrdenacao;

        /**
         * @var QTextBox txtIcon;
         * @access protected
         */
		protected $txtIcon;


		// Controls that allow the viewing of Menu's individual data fields
        /**
         * @var QLabel lblNome
         * @access protected
         */
		protected $lblNome;

        /**
         * @var QLabel lblLink
         * @access protected
         */
		protected $lblLink;

        /**
         * @var QLabel lblMenuId
         * @access protected
         */
		protected $lblMenuId;

        /**
         * @var QLabel lblOrdenacao
         * @access protected
         */
		protected $lblOrdenacao;

        /**
         * @var QLabel lblIcon
         * @access protected
         */
		protected $lblIcon;


		// QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References
		protected $lstUsuarios;


		// QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References
		protected $lblUsuarios;



		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * MenuMetaControl to edit a single Menu object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single Menu object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this MenuMetaControl
		 * @param Menu $objMenu new or existing Menu object
		 */
		 public function __construct($objParentObject, Menu $objMenu) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this MenuMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked Menu object
			$this->objMenu = $objMenu;

			// Figure out if we're Editing or Creating New
			if ($this->objMenu->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this MenuMetaControl
		 * @param integer $intId primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing Menu object creation - defaults to CreateOrEdit
 		 * @return MenuMetaControl
		 */
		public static function Create($objParentObject, $intId = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intId)) {
				$objMenu = Menu::Load($intId);

				// Menu was found -- return it!
				if ($objMenu)
					return new MenuMetaControl($objParentObject, $objMenu);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a Menu object with PK arguments: ' . $intId);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new MenuMetaControl($objParentObject, new Menu());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this MenuMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing Menu object creation - defaults to CreateOrEdit
		 * @return MenuMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intId = QApplication::PathInfo(0);
			return MenuMetaControl::Create($objParentObject, $intId, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this MenuMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing Menu object creation - defaults to CreateOrEdit
		 * @return MenuMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intId = QApplication::QueryString('intId');
			return MenuMetaControl::Create($objParentObject, $intId, $intCreateType);
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
				$this->lblId->Text = $this->objMenu->Id;
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
			$this->txtNome->Text = $this->objMenu->Nome;
			$this->txtNome->Required = true;
			$this->txtNome->MaxLength = Menu::NomeMaxLength;
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
			$this->lblNome->Text = $this->objMenu->Nome;
			$this->lblNome->Required = true;
			return $this->lblNome;
		}

		/**
		 * Create and setup QTextBox txtLink
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtLink_Create($strControlId = null) {
			$this->txtLink = new QTextBox($this->objParentObject, $strControlId);
			$this->txtLink->Name = QApplication::Translate('Link');
			$this->txtLink->Text = $this->objMenu->Link;
			$this->txtLink->MaxLength = Menu::LinkMaxLength;
			return $this->txtLink;
		}

		/**
		 * Create and setup QLabel lblLink
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblLink_Create($strControlId = null) {
			$this->lblLink = new QLabel($this->objParentObject, $strControlId);
			$this->lblLink->Name = QApplication::Translate('Link');
			$this->lblLink->Text = $this->objMenu->Link;
			return $this->lblLink;
		}

		/**
		 * Create and setup QListBox lstMenu
		 * @param string $strControlId optional ControlId to use
		 * @param QQCondition $objConditions override the default condition of QQ::All() to the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause object or array of QQClause objects for the query
		 * @return QListBox
		 */
		public function lstMenu_Create($strControlId = null, QQCondition $objCondition = null, $objOptionalClauses = null) {
			$this->lstMenu = new QListBox($this->objParentObject, $strControlId);
			$this->lstMenu->Name = QApplication::Translate('Menu');
			$this->lstMenu->AddItem(QApplication::Translate('- Select One -'), null);

			// Setup and perform the Query
			if (is_null($objCondition)) $objCondition = QQ::All();
			$objMenuCursor = Menu::QueryCursor($objCondition, $objOptionalClauses);

			// Iterate through the Cursor
			while ($objMenu = Menu::InstantiateCursor($objMenuCursor)) {
				$objListItem = new QListItem($objMenu->__toString(), $objMenu->Id);
				if (($this->objMenu->Menu) && ($this->objMenu->Menu->Id == $objMenu->Id))
					$objListItem->Selected = true;
				$this->lstMenu->AddItem($objListItem);
			}

			// Return the QListBox
			return $this->lstMenu;
		}

		/**
		 * Create and setup QLabel lblMenuId
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblMenuId_Create($strControlId = null) {
			$this->lblMenuId = new QLabel($this->objParentObject, $strControlId);
			$this->lblMenuId->Name = QApplication::Translate('Menu');
			$this->lblMenuId->Text = ($this->objMenu->Menu) ? $this->objMenu->Menu->__toString() : null;
			return $this->lblMenuId;
		}

		/**
		 * Create and setup QIntegerTextBox txtOrdenacao
		 * @param string $strControlId optional ControlId to use
		 * @return QIntegerTextBox
		 */
		public function txtOrdenacao_Create($strControlId = null) {
			$this->txtOrdenacao = new QIntegerTextBox($this->objParentObject, $strControlId);
			$this->txtOrdenacao->Name = QApplication::Translate('Ordenacao');
			$this->txtOrdenacao->Text = $this->objMenu->Ordenacao;
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
			$this->lblOrdenacao->Text = $this->objMenu->Ordenacao;
			$this->lblOrdenacao->Format = $strFormat;
			return $this->lblOrdenacao;
		}

		/**
		 * Create and setup QTextBox txtIcon
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtIcon_Create($strControlId = null) {
			$this->txtIcon = new QTextBox($this->objParentObject, $strControlId);
			$this->txtIcon->Name = QApplication::Translate('Icon');
			$this->txtIcon->Text = $this->objMenu->Icon;
			$this->txtIcon->MaxLength = Menu::IconMaxLength;
			return $this->txtIcon;
		}

		/**
		 * Create and setup QLabel lblIcon
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblIcon_Create($strControlId = null) {
			$this->lblIcon = new QLabel($this->objParentObject, $strControlId);
			$this->lblIcon->Name = QApplication::Translate('Icon');
			$this->lblIcon->Text = $this->objMenu->Icon;
			return $this->lblIcon;
		}

		/**
		 * Create and setup QListBox lstUsuarios
		 * @param string $strControlId optional ControlId to use
		 * @param QQCondition $objConditions override the default condition of QQ::All() to the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause object or array of QQClause objects for the query
		 * @return QListBox
		 */
		public function lstUsuarios_Create($strControlId = null, QQCondition $objCondition = null, $objOptionalClauses = null) {
			$this->lstUsuarios = new QListBox($this->objParentObject, $strControlId);
			$this->lstUsuarios->Name = QApplication::Translate('Usuarios');
			$this->lstUsuarios->SelectionMode = QSelectionMode::Multiple;

			// We need to know which items to "Pre-Select"
			$objAssociatedArray = $this->objMenu->GetUsuarioArray();

			// Setup and perform the Query
			if (is_null($objCondition)) $objCondition = QQ::All();
			$objUsuarioCursor = Usuario::QueryCursor($objCondition, $objOptionalClauses);

			// Iterate through the Cursor
			while ($objUsuario = Usuario::InstantiateCursor($objUsuarioCursor)) {
				$objListItem = new QListItem($objUsuario->__toString(), $objUsuario->Id);
				foreach ($objAssociatedArray as $objAssociated) {
					if ($objAssociated->Id == $objUsuario->Id)
						$objListItem->Selected = true;
				}
				$this->lstUsuarios->AddItem($objListItem);
			}

			// Return the QListControl
			return $this->lstUsuarios;
		}

		/**
		 * Create and setup QLabel lblUsuarios
		 * @param string $strControlId optional ControlId to use
		 * @param string $strGlue glue to display in between each associated object
		 * @return QLabel
		 */
		public function lblUsuarios_Create($strControlId = null, $strGlue = ', ') {
			$this->lblUsuarios = new QLabel($this->objParentObject, $strControlId);
			$this->lstUsuarios->Name = QApplication::Translate('Usuarios');
			
			$objAssociatedArray = $this->objMenu->GetUsuarioArray();
			$strItems = array();
			foreach ($objAssociatedArray as $objAssociated)
				$strItems[] = $objAssociated->__toString();
			$this->lblUsuarios->Text = implode($strGlue, $strItems);
			return $this->lblUsuarios;
		}



		/**
		 * Refresh this MetaControl with Data from the local Menu object.
		 * @param boolean $blnReload reload Menu from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objMenu->Reload();

			if ($this->lblId) if ($this->blnEditMode) $this->lblId->Text = $this->objMenu->Id;

			if ($this->txtNome) $this->txtNome->Text = $this->objMenu->Nome;
			if ($this->lblNome) $this->lblNome->Text = $this->objMenu->Nome;

			if ($this->txtLink) $this->txtLink->Text = $this->objMenu->Link;
			if ($this->lblLink) $this->lblLink->Text = $this->objMenu->Link;

			if ($this->lstMenu) {
					$this->lstMenu->RemoveAllItems();
				$this->lstMenu->AddItem(QApplication::Translate('- Select One -'), null);
				$objMenuArray = Menu::LoadAll();
				if ($objMenuArray) foreach ($objMenuArray as $objMenu) {
					$objListItem = new QListItem($objMenu->__toString(), $objMenu->Id);
					if (($this->objMenu->Menu) && ($this->objMenu->Menu->Id == $objMenu->Id))
						$objListItem->Selected = true;
					$this->lstMenu->AddItem($objListItem);
				}
			}
			if ($this->lblMenuId) $this->lblMenuId->Text = ($this->objMenu->Menu) ? $this->objMenu->Menu->__toString() : null;

			if ($this->txtOrdenacao) $this->txtOrdenacao->Text = $this->objMenu->Ordenacao;
			if ($this->lblOrdenacao) $this->lblOrdenacao->Text = $this->objMenu->Ordenacao;

			if ($this->txtIcon) $this->txtIcon->Text = $this->objMenu->Icon;
			if ($this->lblIcon) $this->lblIcon->Text = $this->objMenu->Icon;

			if ($this->lstUsuarios) {
				$this->lstUsuarios->RemoveAllItems();
				$objAssociatedArray = $this->objMenu->GetUsuarioArray();
				$objUsuarioArray = Usuario::LoadAll();
				if ($objUsuarioArray) foreach ($objUsuarioArray as $objUsuario) {
					$objListItem = new QListItem($objUsuario->__toString(), $objUsuario->Id);
					foreach ($objAssociatedArray as $objAssociated) {
						if ($objAssociated->Id == $objUsuario->Id)
							$objListItem->Selected = true;
					}
					$this->lstUsuarios->AddItem($objListItem);
				}
			}
			if ($this->lblUsuarios) {
				$objAssociatedArray = $this->objMenu->GetUsuarioArray();
				$strItems = array();
				foreach ($objAssociatedArray as $objAssociated)
					$strItems[] = $objAssociated->__toString();
				$this->lblUsuarios->Text = implode($strGlue, $strItems);
			}

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////

		protected function lstUsuarios_Update() {
			if ($this->lstUsuarios) {
				$this->objMenu->UnassociateAllUsuarios();
				$objSelectedListItems = $this->lstUsuarios->SelectedItems;
				if ($objSelectedListItems) foreach ($objSelectedListItems as $objListItem) {
					$this->objMenu->AssociateUsuario(Usuario::Load($objListItem->Value));
				}
			}
		}





		///////////////////////////////////////////////
		// PUBLIC MENU OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's Menu instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveMenu() {
			try {
				// Update any fields for controls that have been created
				if ($this->txtNome) $this->objMenu->Nome = $this->txtNome->Text;
				if ($this->txtLink) $this->objMenu->Link = $this->txtLink->Text;
				if ($this->lstMenu) $this->objMenu->MenuId = $this->lstMenu->SelectedValue;
				if ($this->txtOrdenacao) $this->objMenu->Ordenacao = $this->txtOrdenacao->Text;
				if ($this->txtIcon) $this->objMenu->Icon = $this->txtIcon->Text;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the Menu object
				$this->objMenu->Save();

				// Finally, update any ManyToManyReferences (if any)
				$this->lstUsuarios_Update();
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's Menu instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteMenu() {
			$this->objMenu->UnassociateAllUsuarios();
			$this->objMenu->Delete();
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
				case 'Menu': return $this->objMenu;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to Menu fields -- will be created dynamically if not yet created
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
				case 'LinkControl':
					if (!$this->txtLink) return $this->txtLink_Create();
					return $this->txtLink;
				case 'LinkLabel':
					if (!$this->lblLink) return $this->lblLink_Create();
					return $this->lblLink;
				case 'MenuIdControl':
					if (!$this->lstMenu) return $this->lstMenu_Create();
					return $this->lstMenu;
				case 'MenuIdLabel':
					if (!$this->lblMenuId) return $this->lblMenuId_Create();
					return $this->lblMenuId;
				case 'OrdenacaoControl':
					if (!$this->txtOrdenacao) return $this->txtOrdenacao_Create();
					return $this->txtOrdenacao;
				case 'OrdenacaoLabel':
					if (!$this->lblOrdenacao) return $this->lblOrdenacao_Create();
					return $this->lblOrdenacao;
				case 'IconControl':
					if (!$this->txtIcon) return $this->txtIcon_Create();
					return $this->txtIcon;
				case 'IconLabel':
					if (!$this->lblIcon) return $this->lblIcon_Create();
					return $this->lblIcon;
				case 'UsuarioControl':
					if (!$this->lstUsuarios) return $this->lstUsuarios_Create();
					return $this->lstUsuarios;
				case 'UsuarioLabel':
					if (!$this->lblUsuarios) return $this->lblUsuarios_Create();
					return $this->lblUsuarios;
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
					// Controls that point to Menu fields
					case 'IdControl':
						return ($this->lblId = QType::Cast($mixValue, 'QControl'));
					case 'NomeControl':
						return ($this->txtNome = QType::Cast($mixValue, 'QControl'));
					case 'LinkControl':
						return ($this->txtLink = QType::Cast($mixValue, 'QControl'));
					case 'MenuIdControl':
						return ($this->lstMenu = QType::Cast($mixValue, 'QControl'));
					case 'OrdenacaoControl':
						return ($this->txtOrdenacao = QType::Cast($mixValue, 'QControl'));
					case 'IconControl':
						return ($this->txtIcon = QType::Cast($mixValue, 'QControl'));
					case 'UsuarioControl':
						return ($this->lstUsuarios = QType::Cast($mixValue, 'QControl'));
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