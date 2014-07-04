<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the ComandoPeca class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single ComandoPeca object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a ComandoPecaMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 * 
	 * @package My Application
	 * @subpackage MetaControls
	 * property-read ComandoPeca $ComandoPeca the actual ComandoPeca data class being edited
	 * property QLabel $IdControl
	 * property-read QLabel $IdLabel
	 * property QFloatTextBox $PesoControl
	 * property-read QLabel $PesoLabel
	 * property QIntegerTextBox $QuantidadePanosControl
	 * property-read QLabel $QuantidadePanosLabel
	 * property QListBox $ComandoIdControl
	 * property-read QLabel $ComandoIdLabel
	 * property QListBox $TecidoIdControl
	 * property-read QLabel $TecidoIdLabel
	 * property QListBox $CorIdControl
	 * property-read QLabel $CorIdLabel
	 * property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class ComandoPecaMetaControlGen extends QBaseClass {
		// General Variables
		/**
		 * @var ComandoPeca objComandoPeca
		 * @access protected
		 */
		protected $objComandoPeca;

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

		// Controls that allow the editing of ComandoPeca's individual data fields
        /**
         * @var QLabel lblId;
         * @access protected
         */
		protected $lblId;

        /**
         * @var QFloatTextBox txtPeso;
         * @access protected
         */
		protected $txtPeso;

        /**
         * @var QIntegerTextBox txtQuantidadePanos;
         * @access protected
         */
		protected $txtQuantidadePanos;

        /**
         * @var QListBox lstComando;
         * @access protected
         */
		protected $lstComando;

        /**
         * @var QListBox lstTecido;
         * @access protected
         */
		protected $lstTecido;

        /**
         * @var QListBox lstCor;
         * @access protected
         */
		protected $lstCor;


		// Controls that allow the viewing of ComandoPeca's individual data fields
        /**
         * @var QLabel lblPeso
         * @access protected
         */
		protected $lblPeso;

        /**
         * @var QLabel lblQuantidadePanos
         * @access protected
         */
		protected $lblQuantidadePanos;

        /**
         * @var QLabel lblComandoId
         * @access protected
         */
		protected $lblComandoId;

        /**
         * @var QLabel lblTecidoId
         * @access protected
         */
		protected $lblTecidoId;

        /**
         * @var QLabel lblCorId
         * @access protected
         */
		protected $lblCorId;


		// QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References

		// QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References


		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * ComandoPecaMetaControl to edit a single ComandoPeca object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single ComandoPeca object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this ComandoPecaMetaControl
		 * @param ComandoPeca $objComandoPeca new or existing ComandoPeca object
		 */
		 public function __construct($objParentObject, ComandoPeca $objComandoPeca) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this ComandoPecaMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked ComandoPeca object
			$this->objComandoPeca = $objComandoPeca;

			// Figure out if we're Editing or Creating New
			if ($this->objComandoPeca->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this ComandoPecaMetaControl
		 * @param integer $intId primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing ComandoPeca object creation - defaults to CreateOrEdit
 		 * @return ComandoPecaMetaControl
		 */
		public static function Create($objParentObject, $intId = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intId)) {
				$objComandoPeca = ComandoPeca::Load($intId);

				// ComandoPeca was found -- return it!
				if ($objComandoPeca)
					return new ComandoPecaMetaControl($objParentObject, $objComandoPeca);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a ComandoPeca object with PK arguments: ' . $intId);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new ComandoPecaMetaControl($objParentObject, new ComandoPeca());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this ComandoPecaMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing ComandoPeca object creation - defaults to CreateOrEdit
		 * @return ComandoPecaMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intId = QApplication::PathInfo(0);
			return ComandoPecaMetaControl::Create($objParentObject, $intId, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this ComandoPecaMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing ComandoPeca object creation - defaults to CreateOrEdit
		 * @return ComandoPecaMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intId = QApplication::QueryString('intId');
			return ComandoPecaMetaControl::Create($objParentObject, $intId, $intCreateType);
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
				$this->lblId->Text = $this->objComandoPeca->Id;
			else
				$this->lblId->Text = 'N/A';
			return $this->lblId;
		}

		/**
		 * Create and setup QFloatTextBox txtPeso
		 * @param string $strControlId optional ControlId to use
		 * @return QFloatTextBox
		 */
		public function txtPeso_Create($strControlId = null) {
			$this->txtPeso = new QFloatTextBox($this->objParentObject, $strControlId);
			$this->txtPeso->Name = QApplication::Translate('Peso');
			$this->txtPeso->Text = $this->objComandoPeca->Peso;
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
			$this->lblPeso->Text = $this->objComandoPeca->Peso;
			$this->lblPeso->Format = $strFormat;
			return $this->lblPeso;
		}

		/**
		 * Create and setup QIntegerTextBox txtQuantidadePanos
		 * @param string $strControlId optional ControlId to use
		 * @return QIntegerTextBox
		 */
		public function txtQuantidadePanos_Create($strControlId = null) {
			$this->txtQuantidadePanos = new QIntegerTextBox($this->objParentObject, $strControlId);
			$this->txtQuantidadePanos->Name = QApplication::Translate('Quantidade Panos');
			$this->txtQuantidadePanos->Text = $this->objComandoPeca->QuantidadePanos;
			$this->txtQuantidadePanos->Required = true;
			return $this->txtQuantidadePanos;
		}

		/**
		 * Create and setup QLabel lblQuantidadePanos
		 * @param string $strControlId optional ControlId to use
		 * @param string $strFormat optional sprintf format to use
		 * @return QLabel
		 */
		public function lblQuantidadePanos_Create($strControlId = null, $strFormat = null) {
			$this->lblQuantidadePanos = new QLabel($this->objParentObject, $strControlId);
			$this->lblQuantidadePanos->Name = QApplication::Translate('Quantidade Panos');
			$this->lblQuantidadePanos->Text = $this->objComandoPeca->QuantidadePanos;
			$this->lblQuantidadePanos->Required = true;
			$this->lblQuantidadePanos->Format = $strFormat;
			return $this->lblQuantidadePanos;
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
				if (($this->objComandoPeca->Comando) && ($this->objComandoPeca->Comando->Id == $objComando->Id))
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
			$this->lblComandoId->Text = ($this->objComandoPeca->Comando) ? $this->objComandoPeca->Comando->__toString() : null;
			$this->lblComandoId->Required = true;
			return $this->lblComandoId;
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
				if (($this->objComandoPeca->Tecido) && ($this->objComandoPeca->Tecido->Id == $objTecido->Id))
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
			$this->lblTecidoId->Text = ($this->objComandoPeca->Tecido) ? $this->objComandoPeca->Tecido->__toString() : null;
			$this->lblTecidoId->Required = true;
			return $this->lblTecidoId;
		}

		/**
		 * Create and setup QListBox lstCor
		 * @param string $strControlId optional ControlId to use
		 * @param QQCondition $objConditions override the default condition of QQ::All() to the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause object or array of QQClause objects for the query
		 * @return QListBox
		 */
		public function lstCor_Create($strControlId = null, QQCondition $objCondition = null, $objOptionalClauses = null) {
			$this->lstCor = new QListBox($this->objParentObject, $strControlId);
			$this->lstCor->Name = QApplication::Translate('Cor');
			$this->lstCor->Required = true;
			if (!$this->blnEditMode)
				$this->lstCor->AddItem(QApplication::Translate('- Select One -'), null);

			// Setup and perform the Query
			if (is_null($objCondition)) $objCondition = QQ::All();
			$objCorCursor = Cor::QueryCursor($objCondition, $objOptionalClauses);

			// Iterate through the Cursor
			while ($objCor = Cor::InstantiateCursor($objCorCursor)) {
				$objListItem = new QListItem($objCor->__toString(), $objCor->Id);
				if (($this->objComandoPeca->Cor) && ($this->objComandoPeca->Cor->Id == $objCor->Id))
					$objListItem->Selected = true;
				$this->lstCor->AddItem($objListItem);
			}

			// Return the QListBox
			return $this->lstCor;
		}

		/**
		 * Create and setup QLabel lblCorId
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblCorId_Create($strControlId = null) {
			$this->lblCorId = new QLabel($this->objParentObject, $strControlId);
			$this->lblCorId->Name = QApplication::Translate('Cor');
			$this->lblCorId->Text = ($this->objComandoPeca->Cor) ? $this->objComandoPeca->Cor->__toString() : null;
			$this->lblCorId->Required = true;
			return $this->lblCorId;
		}



		/**
		 * Refresh this MetaControl with Data from the local ComandoPeca object.
		 * @param boolean $blnReload reload ComandoPeca from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objComandoPeca->Reload();

			if ($this->lblId) if ($this->blnEditMode) $this->lblId->Text = $this->objComandoPeca->Id;

			if ($this->txtPeso) $this->txtPeso->Text = $this->objComandoPeca->Peso;
			if ($this->lblPeso) $this->lblPeso->Text = $this->objComandoPeca->Peso;

			if ($this->txtQuantidadePanos) $this->txtQuantidadePanos->Text = $this->objComandoPeca->QuantidadePanos;
			if ($this->lblQuantidadePanos) $this->lblQuantidadePanos->Text = $this->objComandoPeca->QuantidadePanos;

			if ($this->lstComando) {
					$this->lstComando->RemoveAllItems();
				if (!$this->blnEditMode)
					$this->lstComando->AddItem(QApplication::Translate('- Select One -'), null);
				$objComandoArray = Comando::LoadAll();
				if ($objComandoArray) foreach ($objComandoArray as $objComando) {
					$objListItem = new QListItem($objComando->__toString(), $objComando->Id);
					if (($this->objComandoPeca->Comando) && ($this->objComandoPeca->Comando->Id == $objComando->Id))
						$objListItem->Selected = true;
					$this->lstComando->AddItem($objListItem);
				}
			}
			if ($this->lblComandoId) $this->lblComandoId->Text = ($this->objComandoPeca->Comando) ? $this->objComandoPeca->Comando->__toString() : null;

			if ($this->lstTecido) {
					$this->lstTecido->RemoveAllItems();
				if (!$this->blnEditMode)
					$this->lstTecido->AddItem(QApplication::Translate('- Select One -'), null);
				$objTecidoArray = Tecido::LoadAll();
				if ($objTecidoArray) foreach ($objTecidoArray as $objTecido) {
					$objListItem = new QListItem($objTecido->__toString(), $objTecido->Id);
					if (($this->objComandoPeca->Tecido) && ($this->objComandoPeca->Tecido->Id == $objTecido->Id))
						$objListItem->Selected = true;
					$this->lstTecido->AddItem($objListItem);
				}
			}
			if ($this->lblTecidoId) $this->lblTecidoId->Text = ($this->objComandoPeca->Tecido) ? $this->objComandoPeca->Tecido->__toString() : null;

			if ($this->lstCor) {
					$this->lstCor->RemoveAllItems();
				if (!$this->blnEditMode)
					$this->lstCor->AddItem(QApplication::Translate('- Select One -'), null);
				$objCorArray = Cor::LoadAll();
				if ($objCorArray) foreach ($objCorArray as $objCor) {
					$objListItem = new QListItem($objCor->__toString(), $objCor->Id);
					if (($this->objComandoPeca->Cor) && ($this->objComandoPeca->Cor->Id == $objCor->Id))
						$objListItem->Selected = true;
					$this->lstCor->AddItem($objListItem);
				}
			}
			if ($this->lblCorId) $this->lblCorId->Text = ($this->objComandoPeca->Cor) ? $this->objComandoPeca->Cor->__toString() : null;

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC COMANDOPECA OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's ComandoPeca instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveComandoPeca() {
			try {
				// Update any fields for controls that have been created
				if ($this->txtPeso) $this->objComandoPeca->Peso = $this->txtPeso->Text;
				if ($this->txtQuantidadePanos) $this->objComandoPeca->QuantidadePanos = $this->txtQuantidadePanos->Text;
				if ($this->lstComando) $this->objComandoPeca->ComandoId = $this->lstComando->SelectedValue;
				if ($this->lstTecido) $this->objComandoPeca->TecidoId = $this->lstTecido->SelectedValue;
				if ($this->lstCor) $this->objComandoPeca->CorId = $this->lstCor->SelectedValue;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the ComandoPeca object
				$this->objComandoPeca->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's ComandoPeca instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteComandoPeca() {
			$this->objComandoPeca->Delete();
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
				case 'ComandoPeca': return $this->objComandoPeca;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to ComandoPeca fields -- will be created dynamically if not yet created
				case 'IdControl':
					if (!$this->lblId) return $this->lblId_Create();
					return $this->lblId;
				case 'IdLabel':
					if (!$this->lblId) return $this->lblId_Create();
					return $this->lblId;
				case 'PesoControl':
					if (!$this->txtPeso) return $this->txtPeso_Create();
					return $this->txtPeso;
				case 'PesoLabel':
					if (!$this->lblPeso) return $this->lblPeso_Create();
					return $this->lblPeso;
				case 'QuantidadePanosControl':
					if (!$this->txtQuantidadePanos) return $this->txtQuantidadePanos_Create();
					return $this->txtQuantidadePanos;
				case 'QuantidadePanosLabel':
					if (!$this->lblQuantidadePanos) return $this->lblQuantidadePanos_Create();
					return $this->lblQuantidadePanos;
				case 'ComandoIdControl':
					if (!$this->lstComando) return $this->lstComando_Create();
					return $this->lstComando;
				case 'ComandoIdLabel':
					if (!$this->lblComandoId) return $this->lblComandoId_Create();
					return $this->lblComandoId;
				case 'TecidoIdControl':
					if (!$this->lstTecido) return $this->lstTecido_Create();
					return $this->lstTecido;
				case 'TecidoIdLabel':
					if (!$this->lblTecidoId) return $this->lblTecidoId_Create();
					return $this->lblTecidoId;
				case 'CorIdControl':
					if (!$this->lstCor) return $this->lstCor_Create();
					return $this->lstCor;
				case 'CorIdLabel':
					if (!$this->lblCorId) return $this->lblCorId_Create();
					return $this->lblCorId;
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
					// Controls that point to ComandoPeca fields
					case 'IdControl':
						return ($this->lblId = QType::Cast($mixValue, 'QControl'));
					case 'PesoControl':
						return ($this->txtPeso = QType::Cast($mixValue, 'QControl'));
					case 'QuantidadePanosControl':
						return ($this->txtQuantidadePanos = QType::Cast($mixValue, 'QControl'));
					case 'ComandoIdControl':
						return ($this->lstComando = QType::Cast($mixValue, 'QControl'));
					case 'TecidoIdControl':
						return ($this->lstTecido = QType::Cast($mixValue, 'QControl'));
					case 'CorIdControl':
						return ($this->lstCor = QType::Cast($mixValue, 'QControl'));
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