<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the Colecao class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single Colecao object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a ColecaoMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 * 
	 * @package My Application
	 * @subpackage MetaControls
	 * property-read Colecao $Colecao the actual Colecao data class being edited
	 * property QLabel $IdControl
	 * property-read QLabel $IdLabel
	 * property QTextBox $NomeControl
	 * property-read QLabel $NomeLabel
	 * property QListBox $ReferenciaControl
	 * property-read QLabel $ReferenciaLabel
	 * property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class ColecaoMetaControlGen extends QBaseClass {
		// General Variables
		/**
		 * @var Colecao objColecao
		 * @access protected
		 */
		protected $objColecao;

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

		// Controls that allow the editing of Colecao's individual data fields
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


		// Controls that allow the viewing of Colecao's individual data fields
        /**
         * @var QLabel lblNome
         * @access protected
         */
		protected $lblNome;


		// QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References
		protected $lstReferencias;


		// QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References
		protected $lblReferencias;



		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * ColecaoMetaControl to edit a single Colecao object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single Colecao object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this ColecaoMetaControl
		 * @param Colecao $objColecao new or existing Colecao object
		 */
		 public function __construct($objParentObject, Colecao $objColecao) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this ColecaoMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked Colecao object
			$this->objColecao = $objColecao;

			// Figure out if we're Editing or Creating New
			if ($this->objColecao->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this ColecaoMetaControl
		 * @param integer $intId primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing Colecao object creation - defaults to CreateOrEdit
 		 * @return ColecaoMetaControl
		 */
		public static function Create($objParentObject, $intId = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intId)) {
				$objColecao = Colecao::Load($intId);

				// Colecao was found -- return it!
				if ($objColecao)
					return new ColecaoMetaControl($objParentObject, $objColecao);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a Colecao object with PK arguments: ' . $intId);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new ColecaoMetaControl($objParentObject, new Colecao());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this ColecaoMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing Colecao object creation - defaults to CreateOrEdit
		 * @return ColecaoMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intId = QApplication::PathInfo(0);
			return ColecaoMetaControl::Create($objParentObject, $intId, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this ColecaoMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing Colecao object creation - defaults to CreateOrEdit
		 * @return ColecaoMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intId = QApplication::QueryString('intId');
			return ColecaoMetaControl::Create($objParentObject, $intId, $intCreateType);
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
				$this->lblId->Text = $this->objColecao->Id;
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
			$this->txtNome->Text = $this->objColecao->Nome;
			$this->txtNome->Required = true;
			$this->txtNome->MaxLength = Colecao::NomeMaxLength;
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
			$this->lblNome->Text = $this->objColecao->Nome;
			$this->lblNome->Required = true;
			return $this->lblNome;
		}

		/**
		 * Create and setup QListBox lstReferencias
		 * @param string $strControlId optional ControlId to use
		 * @param QQCondition $objConditions override the default condition of QQ::All() to the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause object or array of QQClause objects for the query
		 * @return QListBox
		 */
		public function lstReferencias_Create($strControlId = null, QQCondition $objCondition = null, $objOptionalClauses = null) {
			$this->lstReferencias = new QListBox($this->objParentObject, $strControlId);
			$this->lstReferencias->Name = QApplication::Translate('Referencias');
			$this->lstReferencias->SelectionMode = QSelectionMode::Multiple;

			// We need to know which items to "Pre-Select"
			$objAssociatedArray = $this->objColecao->GetReferenciaArray();

			// Setup and perform the Query
			if (is_null($objCondition)) $objCondition = QQ::All();
			$objReferenciaCursor = Referencia::QueryCursor($objCondition, $objOptionalClauses);

			// Iterate through the Cursor
			while ($objReferencia = Referencia::InstantiateCursor($objReferenciaCursor)) {
				$objListItem = new QListItem($objReferencia->__toString(), $objReferencia->Id);
				foreach ($objAssociatedArray as $objAssociated) {
					if ($objAssociated->Id == $objReferencia->Id)
						$objListItem->Selected = true;
				}
				$this->lstReferencias->AddItem($objListItem);
			}

			// Return the QListControl
			return $this->lstReferencias;
		}

		/**
		 * Create and setup QLabel lblReferencias
		 * @param string $strControlId optional ControlId to use
		 * @param string $strGlue glue to display in between each associated object
		 * @return QLabel
		 */
		public function lblReferencias_Create($strControlId = null, $strGlue = ', ') {
			$this->lblReferencias = new QLabel($this->objParentObject, $strControlId);
			$this->lstReferencias->Name = QApplication::Translate('Referencias');
			
			$objAssociatedArray = $this->objColecao->GetReferenciaArray();
			$strItems = array();
			foreach ($objAssociatedArray as $objAssociated)
				$strItems[] = $objAssociated->__toString();
			$this->lblReferencias->Text = implode($strGlue, $strItems);
			return $this->lblReferencias;
		}



		/**
		 * Refresh this MetaControl with Data from the local Colecao object.
		 * @param boolean $blnReload reload Colecao from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objColecao->Reload();

			if ($this->lblId) if ($this->blnEditMode) $this->lblId->Text = $this->objColecao->Id;

			if ($this->txtNome) $this->txtNome->Text = $this->objColecao->Nome;
			if ($this->lblNome) $this->lblNome->Text = $this->objColecao->Nome;

			if ($this->lstReferencias) {
				$this->lstReferencias->RemoveAllItems();
				$objAssociatedArray = $this->objColecao->GetReferenciaArray();
				$objReferenciaArray = Referencia::LoadAll();
				if ($objReferenciaArray) foreach ($objReferenciaArray as $objReferencia) {
					$objListItem = new QListItem($objReferencia->__toString(), $objReferencia->Id);
					foreach ($objAssociatedArray as $objAssociated) {
						if ($objAssociated->Id == $objReferencia->Id)
							$objListItem->Selected = true;
					}
					$this->lstReferencias->AddItem($objListItem);
				}
			}
			if ($this->lblReferencias) {
				$objAssociatedArray = $this->objColecao->GetReferenciaArray();
				$strItems = array();
				foreach ($objAssociatedArray as $objAssociated)
					$strItems[] = $objAssociated->__toString();
				$this->lblReferencias->Text = implode($strGlue, $strItems);
			}

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////

		protected function lstReferencias_Update() {
			if ($this->lstReferencias) {
				$this->objColecao->UnassociateAllReferencias();
				$objSelectedListItems = $this->lstReferencias->SelectedItems;
				if ($objSelectedListItems) foreach ($objSelectedListItems as $objListItem) {
					$this->objColecao->AssociateReferencia(Referencia::Load($objListItem->Value));
				}
			}
		}





		///////////////////////////////////////////////
		// PUBLIC COLECAO OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's Colecao instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveColecao() {
			try {
				// Update any fields for controls that have been created
				if ($this->txtNome) $this->objColecao->Nome = $this->txtNome->Text;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the Colecao object
				$this->objColecao->Save();

				// Finally, update any ManyToManyReferences (if any)
				$this->lstReferencias_Update();
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's Colecao instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteColecao() {
			$this->objColecao->UnassociateAllReferencias();
			$this->objColecao->Delete();
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
				case 'Colecao': return $this->objColecao;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to Colecao fields -- will be created dynamically if not yet created
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
				case 'ReferenciaControl':
					if (!$this->lstReferencias) return $this->lstReferencias_Create();
					return $this->lstReferencias;
				case 'ReferenciaLabel':
					if (!$this->lblReferencias) return $this->lblReferencias_Create();
					return $this->lblReferencias;
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
					// Controls that point to Colecao fields
					case 'IdControl':
						return ($this->lblId = QType::Cast($mixValue, 'QControl'));
					case 'NomeControl':
						return ($this->txtNome = QType::Cast($mixValue, 'QControl'));
					case 'ReferenciaControl':
						return ($this->lstReferencias = QType::Cast($mixValue, 'QControl'));
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