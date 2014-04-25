<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the BalancoAcoesDepedencia class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single BalancoAcoesDepedencia object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a BalancoAcoesDepedenciaMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 * 
	 * @package My Application
	 * @subpackage MetaControls
	 * property-read BalancoAcoesDepedencia $BalancoAcoesDepedencia the actual BalancoAcoesDepedencia data class being edited
	 * property QLabel $IdControl
	 * property-read QLabel $IdLabel
	 * property QListBox $FluxogramaItemRealIdControl
	 * property-read QLabel $FluxogramaItemRealIdLabel
	 * property QListBox $BalancoAcoesIdControl
	 * property-read QLabel $BalancoAcoesIdLabel
	 * property QIntegerTextBox $QuantidadeDisponibilizadaControl
	 * property-read QLabel $QuantidadeDisponibilizadaLabel
	 * property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class BalancoAcoesDepedenciaMetaControlGen extends QBaseClass {
		// General Variables
		/**
		 * @var BalancoAcoesDepedencia objBalancoAcoesDepedencia
		 * @access protected
		 */
		protected $objBalancoAcoesDepedencia;

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

		// Controls that allow the editing of BalancoAcoesDepedencia's individual data fields
        /**
         * @var QLabel lblId;
         * @access protected
         */
		protected $lblId;

        /**
         * @var QListBox lstFluxogramaItemReal;
         * @access protected
         */
		protected $lstFluxogramaItemReal;

        /**
         * @var QListBox lstBalancoAcoes;
         * @access protected
         */
		protected $lstBalancoAcoes;

        /**
         * @var QIntegerTextBox txtQuantidadeDisponibilizada;
         * @access protected
         */
		protected $txtQuantidadeDisponibilizada;


		// Controls that allow the viewing of BalancoAcoesDepedencia's individual data fields
        /**
         * @var QLabel lblFluxogramaItemRealId
         * @access protected
         */
		protected $lblFluxogramaItemRealId;

        /**
         * @var QLabel lblBalancoAcoesId
         * @access protected
         */
		protected $lblBalancoAcoesId;

        /**
         * @var QLabel lblQuantidadeDisponibilizada
         * @access protected
         */
		protected $lblQuantidadeDisponibilizada;


		// QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References

		// QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References


		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * BalancoAcoesDepedenciaMetaControl to edit a single BalancoAcoesDepedencia object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single BalancoAcoesDepedencia object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this BalancoAcoesDepedenciaMetaControl
		 * @param BalancoAcoesDepedencia $objBalancoAcoesDepedencia new or existing BalancoAcoesDepedencia object
		 */
		 public function __construct($objParentObject, BalancoAcoesDepedencia $objBalancoAcoesDepedencia) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this BalancoAcoesDepedenciaMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked BalancoAcoesDepedencia object
			$this->objBalancoAcoesDepedencia = $objBalancoAcoesDepedencia;

			// Figure out if we're Editing or Creating New
			if ($this->objBalancoAcoesDepedencia->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this BalancoAcoesDepedenciaMetaControl
		 * @param integer $intId primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing BalancoAcoesDepedencia object creation - defaults to CreateOrEdit
 		 * @return BalancoAcoesDepedenciaMetaControl
		 */
		public static function Create($objParentObject, $intId = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intId)) {
				$objBalancoAcoesDepedencia = BalancoAcoesDepedencia::Load($intId);

				// BalancoAcoesDepedencia was found -- return it!
				if ($objBalancoAcoesDepedencia)
					return new BalancoAcoesDepedenciaMetaControl($objParentObject, $objBalancoAcoesDepedencia);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a BalancoAcoesDepedencia object with PK arguments: ' . $intId);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new BalancoAcoesDepedenciaMetaControl($objParentObject, new BalancoAcoesDepedencia());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this BalancoAcoesDepedenciaMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing BalancoAcoesDepedencia object creation - defaults to CreateOrEdit
		 * @return BalancoAcoesDepedenciaMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intId = QApplication::PathInfo(0);
			return BalancoAcoesDepedenciaMetaControl::Create($objParentObject, $intId, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this BalancoAcoesDepedenciaMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing BalancoAcoesDepedencia object creation - defaults to CreateOrEdit
		 * @return BalancoAcoesDepedenciaMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intId = QApplication::QueryString('intId');
			return BalancoAcoesDepedenciaMetaControl::Create($objParentObject, $intId, $intCreateType);
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
				$this->lblId->Text = $this->objBalancoAcoesDepedencia->Id;
			else
				$this->lblId->Text = 'N/A';
			return $this->lblId;
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
				if (($this->objBalancoAcoesDepedencia->FluxogramaItemReal) && ($this->objBalancoAcoesDepedencia->FluxogramaItemReal->Id == $objFluxogramaItemReal->Id))
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
			$this->lblFluxogramaItemRealId->Text = ($this->objBalancoAcoesDepedencia->FluxogramaItemReal) ? $this->objBalancoAcoesDepedencia->FluxogramaItemReal->__toString() : null;
			$this->lblFluxogramaItemRealId->Required = true;
			return $this->lblFluxogramaItemRealId;
		}

		/**
		 * Create and setup QListBox lstBalancoAcoes
		 * @param string $strControlId optional ControlId to use
		 * @param QQCondition $objConditions override the default condition of QQ::All() to the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause object or array of QQClause objects for the query
		 * @return QListBox
		 */
		public function lstBalancoAcoes_Create($strControlId = null, QQCondition $objCondition = null, $objOptionalClauses = null) {
			$this->lstBalancoAcoes = new QListBox($this->objParentObject, $strControlId);
			$this->lstBalancoAcoes->Name = QApplication::Translate('Balanco Acoes');
			$this->lstBalancoAcoes->Required = true;
			if (!$this->blnEditMode)
				$this->lstBalancoAcoes->AddItem(QApplication::Translate('- Select One -'), null);

			// Setup and perform the Query
			if (is_null($objCondition)) $objCondition = QQ::All();
			$objBalancoAcoesCursor = BalancoAcoes::QueryCursor($objCondition, $objOptionalClauses);

			// Iterate through the Cursor
			while ($objBalancoAcoes = BalancoAcoes::InstantiateCursor($objBalancoAcoesCursor)) {
				$objListItem = new QListItem($objBalancoAcoes->__toString(), $objBalancoAcoes->Id);
				if (($this->objBalancoAcoesDepedencia->BalancoAcoes) && ($this->objBalancoAcoesDepedencia->BalancoAcoes->Id == $objBalancoAcoes->Id))
					$objListItem->Selected = true;
				$this->lstBalancoAcoes->AddItem($objListItem);
			}

			// Return the QListBox
			return $this->lstBalancoAcoes;
		}

		/**
		 * Create and setup QLabel lblBalancoAcoesId
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblBalancoAcoesId_Create($strControlId = null) {
			$this->lblBalancoAcoesId = new QLabel($this->objParentObject, $strControlId);
			$this->lblBalancoAcoesId->Name = QApplication::Translate('Balanco Acoes');
			$this->lblBalancoAcoesId->Text = ($this->objBalancoAcoesDepedencia->BalancoAcoes) ? $this->objBalancoAcoesDepedencia->BalancoAcoes->__toString() : null;
			$this->lblBalancoAcoesId->Required = true;
			return $this->lblBalancoAcoesId;
		}

		/**
		 * Create and setup QIntegerTextBox txtQuantidadeDisponibilizada
		 * @param string $strControlId optional ControlId to use
		 * @return QIntegerTextBox
		 */
		public function txtQuantidadeDisponibilizada_Create($strControlId = null) {
			$this->txtQuantidadeDisponibilizada = new QIntegerTextBox($this->objParentObject, $strControlId);
			$this->txtQuantidadeDisponibilizada->Name = QApplication::Translate('Quantidade Disponibilizada');
			$this->txtQuantidadeDisponibilizada->Text = $this->objBalancoAcoesDepedencia->QuantidadeDisponibilizada;
			$this->txtQuantidadeDisponibilizada->Required = true;
			return $this->txtQuantidadeDisponibilizada;
		}

		/**
		 * Create and setup QLabel lblQuantidadeDisponibilizada
		 * @param string $strControlId optional ControlId to use
		 * @param string $strFormat optional sprintf format to use
		 * @return QLabel
		 */
		public function lblQuantidadeDisponibilizada_Create($strControlId = null, $strFormat = null) {
			$this->lblQuantidadeDisponibilizada = new QLabel($this->objParentObject, $strControlId);
			$this->lblQuantidadeDisponibilizada->Name = QApplication::Translate('Quantidade Disponibilizada');
			$this->lblQuantidadeDisponibilizada->Text = $this->objBalancoAcoesDepedencia->QuantidadeDisponibilizada;
			$this->lblQuantidadeDisponibilizada->Required = true;
			$this->lblQuantidadeDisponibilizada->Format = $strFormat;
			return $this->lblQuantidadeDisponibilizada;
		}



		/**
		 * Refresh this MetaControl with Data from the local BalancoAcoesDepedencia object.
		 * @param boolean $blnReload reload BalancoAcoesDepedencia from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objBalancoAcoesDepedencia->Reload();

			if ($this->lblId) if ($this->blnEditMode) $this->lblId->Text = $this->objBalancoAcoesDepedencia->Id;

			if ($this->lstFluxogramaItemReal) {
					$this->lstFluxogramaItemReal->RemoveAllItems();
				if (!$this->blnEditMode)
					$this->lstFluxogramaItemReal->AddItem(QApplication::Translate('- Select One -'), null);
				$objFluxogramaItemRealArray = FluxogramaItemReal::LoadAll();
				if ($objFluxogramaItemRealArray) foreach ($objFluxogramaItemRealArray as $objFluxogramaItemReal) {
					$objListItem = new QListItem($objFluxogramaItemReal->__toString(), $objFluxogramaItemReal->Id);
					if (($this->objBalancoAcoesDepedencia->FluxogramaItemReal) && ($this->objBalancoAcoesDepedencia->FluxogramaItemReal->Id == $objFluxogramaItemReal->Id))
						$objListItem->Selected = true;
					$this->lstFluxogramaItemReal->AddItem($objListItem);
				}
			}
			if ($this->lblFluxogramaItemRealId) $this->lblFluxogramaItemRealId->Text = ($this->objBalancoAcoesDepedencia->FluxogramaItemReal) ? $this->objBalancoAcoesDepedencia->FluxogramaItemReal->__toString() : null;

			if ($this->lstBalancoAcoes) {
					$this->lstBalancoAcoes->RemoveAllItems();
				if (!$this->blnEditMode)
					$this->lstBalancoAcoes->AddItem(QApplication::Translate('- Select One -'), null);
				$objBalancoAcoesArray = BalancoAcoes::LoadAll();
				if ($objBalancoAcoesArray) foreach ($objBalancoAcoesArray as $objBalancoAcoes) {
					$objListItem = new QListItem($objBalancoAcoes->__toString(), $objBalancoAcoes->Id);
					if (($this->objBalancoAcoesDepedencia->BalancoAcoes) && ($this->objBalancoAcoesDepedencia->BalancoAcoes->Id == $objBalancoAcoes->Id))
						$objListItem->Selected = true;
					$this->lstBalancoAcoes->AddItem($objListItem);
				}
			}
			if ($this->lblBalancoAcoesId) $this->lblBalancoAcoesId->Text = ($this->objBalancoAcoesDepedencia->BalancoAcoes) ? $this->objBalancoAcoesDepedencia->BalancoAcoes->__toString() : null;

			if ($this->txtQuantidadeDisponibilizada) $this->txtQuantidadeDisponibilizada->Text = $this->objBalancoAcoesDepedencia->QuantidadeDisponibilizada;
			if ($this->lblQuantidadeDisponibilizada) $this->lblQuantidadeDisponibilizada->Text = $this->objBalancoAcoesDepedencia->QuantidadeDisponibilizada;

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC BALANCOACOESDEPEDENCIA OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's BalancoAcoesDepedencia instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveBalancoAcoesDepedencia() {
			try {
				// Update any fields for controls that have been created
				if ($this->lstFluxogramaItemReal) $this->objBalancoAcoesDepedencia->FluxogramaItemRealId = $this->lstFluxogramaItemReal->SelectedValue;
				if ($this->lstBalancoAcoes) $this->objBalancoAcoesDepedencia->BalancoAcoesId = $this->lstBalancoAcoes->SelectedValue;
				if ($this->txtQuantidadeDisponibilizada) $this->objBalancoAcoesDepedencia->QuantidadeDisponibilizada = $this->txtQuantidadeDisponibilizada->Text;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the BalancoAcoesDepedencia object
				$this->objBalancoAcoesDepedencia->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's BalancoAcoesDepedencia instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteBalancoAcoesDepedencia() {
			$this->objBalancoAcoesDepedencia->Delete();
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
				case 'BalancoAcoesDepedencia': return $this->objBalancoAcoesDepedencia;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to BalancoAcoesDepedencia fields -- will be created dynamically if not yet created
				case 'IdControl':
					if (!$this->lblId) return $this->lblId_Create();
					return $this->lblId;
				case 'IdLabel':
					if (!$this->lblId) return $this->lblId_Create();
					return $this->lblId;
				case 'FluxogramaItemRealIdControl':
					if (!$this->lstFluxogramaItemReal) return $this->lstFluxogramaItemReal_Create();
					return $this->lstFluxogramaItemReal;
				case 'FluxogramaItemRealIdLabel':
					if (!$this->lblFluxogramaItemRealId) return $this->lblFluxogramaItemRealId_Create();
					return $this->lblFluxogramaItemRealId;
				case 'BalancoAcoesIdControl':
					if (!$this->lstBalancoAcoes) return $this->lstBalancoAcoes_Create();
					return $this->lstBalancoAcoes;
				case 'BalancoAcoesIdLabel':
					if (!$this->lblBalancoAcoesId) return $this->lblBalancoAcoesId_Create();
					return $this->lblBalancoAcoesId;
				case 'QuantidadeDisponibilizadaControl':
					if (!$this->txtQuantidadeDisponibilizada) return $this->txtQuantidadeDisponibilizada_Create();
					return $this->txtQuantidadeDisponibilizada;
				case 'QuantidadeDisponibilizadaLabel':
					if (!$this->lblQuantidadeDisponibilizada) return $this->lblQuantidadeDisponibilizada_Create();
					return $this->lblQuantidadeDisponibilizada;
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
					// Controls that point to BalancoAcoesDepedencia fields
					case 'IdControl':
						return ($this->lblId = QType::Cast($mixValue, 'QControl'));
					case 'FluxogramaItemRealIdControl':
						return ($this->lstFluxogramaItemReal = QType::Cast($mixValue, 'QControl'));
					case 'BalancoAcoesIdControl':
						return ($this->lstBalancoAcoes = QType::Cast($mixValue, 'QControl'));
					case 'QuantidadeDisponibilizadaControl':
						return ($this->txtQuantidadeDisponibilizada = QType::Cast($mixValue, 'QControl'));
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