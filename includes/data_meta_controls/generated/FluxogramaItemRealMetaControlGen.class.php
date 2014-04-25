<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the FluxogramaItemReal class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single FluxogramaItemReal object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a FluxogramaItemRealMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 * 
	 * @package My Application
	 * @subpackage MetaControls
	 * property-read FluxogramaItemReal $FluxogramaItemReal the actual FluxogramaItemReal data class being edited
	 * property QLabel $IdControl
	 * property-read QLabel $IdLabel
	 * property QTextBox $ReferenciaControl
	 * property-read QLabel $ReferenciaLabel
	 * property QTextBox $AcaoControl
	 * property-read QLabel $AcaoLabel
	 * property QTextBox $MaquinaControl
	 * property-read QLabel $MaquinaLabel
	 * property QIntegerTextBox $TempoControl
	 * property-read QLabel $TempoLabel
	 * property QIntegerTextBox $ProfundidadeControl
	 * property-read QLabel $ProfundidadeLabel
	 * property QIntegerTextBox $FluxogramaItemModeloIdControl
	 * property-read QLabel $FluxogramaItemModeloIdLabel
	 * property QListBox $BalancoAcoesControl
	 * property-read QLabel $BalancoAcoesLabel
	 * property QListBox $ParentFluxogramaItemRealAsFluxogramaDepedenciaRealControl
	 * property-read QLabel $ParentFluxogramaItemRealAsFluxogramaDepedenciaRealLabel
	 * property QListBox $FluxogramaItemRealAsFluxogramaDepedenciaRealControl
	 * property-read QLabel $FluxogramaItemRealAsFluxogramaDepedenciaRealLabel
	 * property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class FluxogramaItemRealMetaControlGen extends QBaseClass {
		// General Variables
		/**
		 * @var FluxogramaItemReal objFluxogramaItemReal
		 * @access protected
		 */
		protected $objFluxogramaItemReal;

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

		// Controls that allow the editing of FluxogramaItemReal's individual data fields
        /**
         * @var QLabel lblId;
         * @access protected
         */
		protected $lblId;

        /**
         * @var QTextBox txtReferencia;
         * @access protected
         */
		protected $txtReferencia;

        /**
         * @var QTextBox txtAcao;
         * @access protected
         */
		protected $txtAcao;

        /**
         * @var QTextBox txtMaquina;
         * @access protected
         */
		protected $txtMaquina;

        /**
         * @var QIntegerTextBox txtTempo;
         * @access protected
         */
		protected $txtTempo;

        /**
         * @var QIntegerTextBox txtProfundidade;
         * @access protected
         */
		protected $txtProfundidade;

        /**
         * @var QIntegerTextBox txtFluxogramaItemModeloId;
         * @access protected
         */
		protected $txtFluxogramaItemModeloId;


		// Controls that allow the viewing of FluxogramaItemReal's individual data fields
        /**
         * @var QLabel lblReferencia
         * @access protected
         */
		protected $lblReferencia;

        /**
         * @var QLabel lblAcao
         * @access protected
         */
		protected $lblAcao;

        /**
         * @var QLabel lblMaquina
         * @access protected
         */
		protected $lblMaquina;

        /**
         * @var QLabel lblTempo
         * @access protected
         */
		protected $lblTempo;

        /**
         * @var QLabel lblProfundidade
         * @access protected
         */
		protected $lblProfundidade;

        /**
         * @var QLabel lblFluxogramaItemModeloId
         * @access protected
         */
		protected $lblFluxogramaItemModeloId;


		// QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References
        /**
         * @var QListBox lstBalancoAcoes
         * @access protected
         */
		protected $lstBalancoAcoes;

		protected $lstParentFluxogramaItemRealsAsFluxogramaDepedenciaReal;

		protected $lstFluxogramaItemRealsAsFluxogramaDepedenciaReal;


		// QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References
        /**
         * @var QLabel lblBalancoAcoes
         * @access protected
         */
		protected $lblBalancoAcoes;

		protected $lblParentFluxogramaItemRealsAsFluxogramaDepedenciaReal;

		protected $lblFluxogramaItemRealsAsFluxogramaDepedenciaReal;



		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * FluxogramaItemRealMetaControl to edit a single FluxogramaItemReal object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single FluxogramaItemReal object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this FluxogramaItemRealMetaControl
		 * @param FluxogramaItemReal $objFluxogramaItemReal new or existing FluxogramaItemReal object
		 */
		 public function __construct($objParentObject, FluxogramaItemReal $objFluxogramaItemReal) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this FluxogramaItemRealMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked FluxogramaItemReal object
			$this->objFluxogramaItemReal = $objFluxogramaItemReal;

			// Figure out if we're Editing or Creating New
			if ($this->objFluxogramaItemReal->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this FluxogramaItemRealMetaControl
		 * @param integer $intId primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing FluxogramaItemReal object creation - defaults to CreateOrEdit
 		 * @return FluxogramaItemRealMetaControl
		 */
		public static function Create($objParentObject, $intId = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intId)) {
				$objFluxogramaItemReal = FluxogramaItemReal::Load($intId);

				// FluxogramaItemReal was found -- return it!
				if ($objFluxogramaItemReal)
					return new FluxogramaItemRealMetaControl($objParentObject, $objFluxogramaItemReal);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a FluxogramaItemReal object with PK arguments: ' . $intId);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new FluxogramaItemRealMetaControl($objParentObject, new FluxogramaItemReal());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this FluxogramaItemRealMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing FluxogramaItemReal object creation - defaults to CreateOrEdit
		 * @return FluxogramaItemRealMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intId = QApplication::PathInfo(0);
			return FluxogramaItemRealMetaControl::Create($objParentObject, $intId, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this FluxogramaItemRealMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing FluxogramaItemReal object creation - defaults to CreateOrEdit
		 * @return FluxogramaItemRealMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intId = QApplication::QueryString('intId');
			return FluxogramaItemRealMetaControl::Create($objParentObject, $intId, $intCreateType);
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
				$this->lblId->Text = $this->objFluxogramaItemReal->Id;
			else
				$this->lblId->Text = 'N/A';
			return $this->lblId;
		}

		/**
		 * Create and setup QTextBox txtReferencia
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtReferencia_Create($strControlId = null) {
			$this->txtReferencia = new QTextBox($this->objParentObject, $strControlId);
			$this->txtReferencia->Name = QApplication::Translate('Referencia');
			$this->txtReferencia->Text = $this->objFluxogramaItemReal->Referencia;
			$this->txtReferencia->Required = true;
			$this->txtReferencia->MaxLength = FluxogramaItemReal::ReferenciaMaxLength;
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
			$this->lblReferencia->Text = $this->objFluxogramaItemReal->Referencia;
			$this->lblReferencia->Required = true;
			return $this->lblReferencia;
		}

		/**
		 * Create and setup QTextBox txtAcao
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtAcao_Create($strControlId = null) {
			$this->txtAcao = new QTextBox($this->objParentObject, $strControlId);
			$this->txtAcao->Name = QApplication::Translate('Acao');
			$this->txtAcao->Text = $this->objFluxogramaItemReal->Acao;
			$this->txtAcao->MaxLength = FluxogramaItemReal::AcaoMaxLength;
			return $this->txtAcao;
		}

		/**
		 * Create and setup QLabel lblAcao
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblAcao_Create($strControlId = null) {
			$this->lblAcao = new QLabel($this->objParentObject, $strControlId);
			$this->lblAcao->Name = QApplication::Translate('Acao');
			$this->lblAcao->Text = $this->objFluxogramaItemReal->Acao;
			return $this->lblAcao;
		}

		/**
		 * Create and setup QTextBox txtMaquina
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtMaquina_Create($strControlId = null) {
			$this->txtMaquina = new QTextBox($this->objParentObject, $strControlId);
			$this->txtMaquina->Name = QApplication::Translate('Maquina');
			$this->txtMaquina->Text = $this->objFluxogramaItemReal->Maquina;
			$this->txtMaquina->MaxLength = FluxogramaItemReal::MaquinaMaxLength;
			return $this->txtMaquina;
		}

		/**
		 * Create and setup QLabel lblMaquina
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblMaquina_Create($strControlId = null) {
			$this->lblMaquina = new QLabel($this->objParentObject, $strControlId);
			$this->lblMaquina->Name = QApplication::Translate('Maquina');
			$this->lblMaquina->Text = $this->objFluxogramaItemReal->Maquina;
			return $this->lblMaquina;
		}

		/**
		 * Create and setup QIntegerTextBox txtTempo
		 * @param string $strControlId optional ControlId to use
		 * @return QIntegerTextBox
		 */
		public function txtTempo_Create($strControlId = null) {
			$this->txtTempo = new QIntegerTextBox($this->objParentObject, $strControlId);
			$this->txtTempo->Name = QApplication::Translate('Tempo');
			$this->txtTempo->Text = $this->objFluxogramaItemReal->Tempo;
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
			$this->lblTempo->Text = $this->objFluxogramaItemReal->Tempo;
			$this->lblTempo->Format = $strFormat;
			return $this->lblTempo;
		}

		/**
		 * Create and setup QIntegerTextBox txtProfundidade
		 * @param string $strControlId optional ControlId to use
		 * @return QIntegerTextBox
		 */
		public function txtProfundidade_Create($strControlId = null) {
			$this->txtProfundidade = new QIntegerTextBox($this->objParentObject, $strControlId);
			$this->txtProfundidade->Name = QApplication::Translate('Profundidade');
			$this->txtProfundidade->Text = $this->objFluxogramaItemReal->Profundidade;
			$this->txtProfundidade->Required = true;
			return $this->txtProfundidade;
		}

		/**
		 * Create and setup QLabel lblProfundidade
		 * @param string $strControlId optional ControlId to use
		 * @param string $strFormat optional sprintf format to use
		 * @return QLabel
		 */
		public function lblProfundidade_Create($strControlId = null, $strFormat = null) {
			$this->lblProfundidade = new QLabel($this->objParentObject, $strControlId);
			$this->lblProfundidade->Name = QApplication::Translate('Profundidade');
			$this->lblProfundidade->Text = $this->objFluxogramaItemReal->Profundidade;
			$this->lblProfundidade->Required = true;
			$this->lblProfundidade->Format = $strFormat;
			return $this->lblProfundidade;
		}

		/**
		 * Create and setup QIntegerTextBox txtFluxogramaItemModeloId
		 * @param string $strControlId optional ControlId to use
		 * @return QIntegerTextBox
		 */
		public function txtFluxogramaItemModeloId_Create($strControlId = null) {
			$this->txtFluxogramaItemModeloId = new QIntegerTextBox($this->objParentObject, $strControlId);
			$this->txtFluxogramaItemModeloId->Name = QApplication::Translate('Fluxograma Item Modelo Id');
			$this->txtFluxogramaItemModeloId->Text = $this->objFluxogramaItemReal->FluxogramaItemModeloId;
			$this->txtFluxogramaItemModeloId->Required = true;
			return $this->txtFluxogramaItemModeloId;
		}

		/**
		 * Create and setup QLabel lblFluxogramaItemModeloId
		 * @param string $strControlId optional ControlId to use
		 * @param string $strFormat optional sprintf format to use
		 * @return QLabel
		 */
		public function lblFluxogramaItemModeloId_Create($strControlId = null, $strFormat = null) {
			$this->lblFluxogramaItemModeloId = new QLabel($this->objParentObject, $strControlId);
			$this->lblFluxogramaItemModeloId->Name = QApplication::Translate('Fluxograma Item Modelo Id');
			$this->lblFluxogramaItemModeloId->Text = $this->objFluxogramaItemReal->FluxogramaItemModeloId;
			$this->lblFluxogramaItemModeloId->Required = true;
			$this->lblFluxogramaItemModeloId->Format = $strFormat;
			return $this->lblFluxogramaItemModeloId;
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
			$this->lstBalancoAcoes->AddItem(QApplication::Translate('- Select One -'), null);

			// Setup and perform the Query
			if (is_null($objCondition)) $objCondition = QQ::All();
			$objBalancoAcoesCursor = BalancoAcoes::QueryCursor($objCondition, $objOptionalClauses);

			// Iterate through the Cursor
			while ($objBalancoAcoes = BalancoAcoes::InstantiateCursor($objBalancoAcoesCursor)) {
				$objListItem = new QListItem($objBalancoAcoes->__toString(), $objBalancoAcoes->Id);
				if ($objBalancoAcoes->FluxogramaItemRealId == $this->objFluxogramaItemReal->Id)
					$objListItem->Selected = true;
				$this->lstBalancoAcoes->AddItem($objListItem);
			}

			// Because BalancoAcoes's BalancoAcoes is not null, if a value is already selected, it cannot be changed.
			if ($this->lstBalancoAcoes->SelectedValue)
				$this->lstBalancoAcoes->Enabled = false;

			// Return the QListBox
			return $this->lstBalancoAcoes;
		}

		/**
		 * Create and setup QLabel lblBalancoAcoes
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblBalancoAcoes_Create($strControlId = null) {
			$this->lblBalancoAcoes = new QLabel($this->objParentObject, $strControlId);
			$this->lblBalancoAcoes->Name = QApplication::Translate('Balanco Acoes');
			$this->lblBalancoAcoes->Text = ($this->objFluxogramaItemReal->BalancoAcoes) ? $this->objFluxogramaItemReal->BalancoAcoes->__toString() : null;
			return $this->lblBalancoAcoes;
		}

		/**
		 * Create and setup QListBox lstParentFluxogramaItemRealsAsFluxogramaDepedenciaReal
		 * @param string $strControlId optional ControlId to use
		 * @param QQCondition $objConditions override the default condition of QQ::All() to the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause object or array of QQClause objects for the query
		 * @return QListBox
		 */
		public function lstParentFluxogramaItemRealsAsFluxogramaDepedenciaReal_Create($strControlId = null, QQCondition $objCondition = null, $objOptionalClauses = null) {
			$this->lstParentFluxogramaItemRealsAsFluxogramaDepedenciaReal = new QListBox($this->objParentObject, $strControlId);
			$this->lstParentFluxogramaItemRealsAsFluxogramaDepedenciaReal->Name = QApplication::Translate('Parent Fluxograma Item Reals As Fluxograma Depedencia Real');
			$this->lstParentFluxogramaItemRealsAsFluxogramaDepedenciaReal->SelectionMode = QSelectionMode::Multiple;

			// We need to know which items to "Pre-Select"
			$objAssociatedArray = $this->objFluxogramaItemReal->GetParentFluxogramaItemRealAsFluxogramaDepedenciaRealArray();

			// Setup and perform the Query
			if (is_null($objCondition)) $objCondition = QQ::All();
			$objFluxogramaItemRealCursor = FluxogramaItemReal::QueryCursor($objCondition, $objOptionalClauses);

			// Iterate through the Cursor
			while ($objFluxogramaItemReal = FluxogramaItemReal::InstantiateCursor($objFluxogramaItemRealCursor)) {
				$objListItem = new QListItem($objFluxogramaItemReal->__toString(), $objFluxogramaItemReal->Id);
				foreach ($objAssociatedArray as $objAssociated) {
					if ($objAssociated->Id == $objFluxogramaItemReal->Id)
						$objListItem->Selected = true;
				}
				$this->lstParentFluxogramaItemRealsAsFluxogramaDepedenciaReal->AddItem($objListItem);
			}

			// Return the QListControl
			return $this->lstParentFluxogramaItemRealsAsFluxogramaDepedenciaReal;
		}

		/**
		 * Create and setup QLabel lblParentFluxogramaItemRealsAsFluxogramaDepedenciaReal
		 * @param string $strControlId optional ControlId to use
		 * @param string $strGlue glue to display in between each associated object
		 * @return QLabel
		 */
		public function lblParentFluxogramaItemRealsAsFluxogramaDepedenciaReal_Create($strControlId = null, $strGlue = ', ') {
			$this->lblParentFluxogramaItemRealsAsFluxogramaDepedenciaReal = new QLabel($this->objParentObject, $strControlId);
			$this->lstParentFluxogramaItemRealsAsFluxogramaDepedenciaReal->Name = QApplication::Translate('Parent Fluxograma Item Reals As Fluxograma Depedencia Real');
			
			$objAssociatedArray = $this->objFluxogramaItemReal->GetParentFluxogramaItemRealAsFluxogramaDepedenciaRealArray();
			$strItems = array();
			foreach ($objAssociatedArray as $objAssociated)
				$strItems[] = $objAssociated->__toString();
			$this->lblParentFluxogramaItemRealsAsFluxogramaDepedenciaReal->Text = implode($strGlue, $strItems);
			return $this->lblParentFluxogramaItemRealsAsFluxogramaDepedenciaReal;
		}

		/**
		 * Create and setup QListBox lstFluxogramaItemRealsAsFluxogramaDepedenciaReal
		 * @param string $strControlId optional ControlId to use
		 * @param QQCondition $objConditions override the default condition of QQ::All() to the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause object or array of QQClause objects for the query
		 * @return QListBox
		 */
		public function lstFluxogramaItemRealsAsFluxogramaDepedenciaReal_Create($strControlId = null, QQCondition $objCondition = null, $objOptionalClauses = null) {
			$this->lstFluxogramaItemRealsAsFluxogramaDepedenciaReal = new QListBox($this->objParentObject, $strControlId);
			$this->lstFluxogramaItemRealsAsFluxogramaDepedenciaReal->Name = QApplication::Translate('Fluxograma Item Reals As Fluxograma Depedencia Real');
			$this->lstFluxogramaItemRealsAsFluxogramaDepedenciaReal->SelectionMode = QSelectionMode::Multiple;

			// We need to know which items to "Pre-Select"
			$objAssociatedArray = $this->objFluxogramaItemReal->GetFluxogramaItemRealAsFluxogramaDepedenciaRealArray();

			// Setup and perform the Query
			if (is_null($objCondition)) $objCondition = QQ::All();
			$objFluxogramaItemRealCursor = FluxogramaItemReal::QueryCursor($objCondition, $objOptionalClauses);

			// Iterate through the Cursor
			while ($objFluxogramaItemReal = FluxogramaItemReal::InstantiateCursor($objFluxogramaItemRealCursor)) {
				$objListItem = new QListItem($objFluxogramaItemReal->__toString(), $objFluxogramaItemReal->Id);
				foreach ($objAssociatedArray as $objAssociated) {
					if ($objAssociated->Id == $objFluxogramaItemReal->Id)
						$objListItem->Selected = true;
				}
				$this->lstFluxogramaItemRealsAsFluxogramaDepedenciaReal->AddItem($objListItem);
			}

			// Return the QListControl
			return $this->lstFluxogramaItemRealsAsFluxogramaDepedenciaReal;
		}

		/**
		 * Create and setup QLabel lblFluxogramaItemRealsAsFluxogramaDepedenciaReal
		 * @param string $strControlId optional ControlId to use
		 * @param string $strGlue glue to display in between each associated object
		 * @return QLabel
		 */
		public function lblFluxogramaItemRealsAsFluxogramaDepedenciaReal_Create($strControlId = null, $strGlue = ', ') {
			$this->lblFluxogramaItemRealsAsFluxogramaDepedenciaReal = new QLabel($this->objParentObject, $strControlId);
			$this->lstFluxogramaItemRealsAsFluxogramaDepedenciaReal->Name = QApplication::Translate('Fluxograma Item Reals As Fluxograma Depedencia Real');
			
			$objAssociatedArray = $this->objFluxogramaItemReal->GetFluxogramaItemRealAsFluxogramaDepedenciaRealArray();
			$strItems = array();
			foreach ($objAssociatedArray as $objAssociated)
				$strItems[] = $objAssociated->__toString();
			$this->lblFluxogramaItemRealsAsFluxogramaDepedenciaReal->Text = implode($strGlue, $strItems);
			return $this->lblFluxogramaItemRealsAsFluxogramaDepedenciaReal;
		}



		/**
		 * Refresh this MetaControl with Data from the local FluxogramaItemReal object.
		 * @param boolean $blnReload reload FluxogramaItemReal from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objFluxogramaItemReal->Reload();

			if ($this->lblId) if ($this->blnEditMode) $this->lblId->Text = $this->objFluxogramaItemReal->Id;

			if ($this->txtReferencia) $this->txtReferencia->Text = $this->objFluxogramaItemReal->Referencia;
			if ($this->lblReferencia) $this->lblReferencia->Text = $this->objFluxogramaItemReal->Referencia;

			if ($this->txtAcao) $this->txtAcao->Text = $this->objFluxogramaItemReal->Acao;
			if ($this->lblAcao) $this->lblAcao->Text = $this->objFluxogramaItemReal->Acao;

			if ($this->txtMaquina) $this->txtMaquina->Text = $this->objFluxogramaItemReal->Maquina;
			if ($this->lblMaquina) $this->lblMaquina->Text = $this->objFluxogramaItemReal->Maquina;

			if ($this->txtTempo) $this->txtTempo->Text = $this->objFluxogramaItemReal->Tempo;
			if ($this->lblTempo) $this->lblTempo->Text = $this->objFluxogramaItemReal->Tempo;

			if ($this->txtProfundidade) $this->txtProfundidade->Text = $this->objFluxogramaItemReal->Profundidade;
			if ($this->lblProfundidade) $this->lblProfundidade->Text = $this->objFluxogramaItemReal->Profundidade;

			if ($this->txtFluxogramaItemModeloId) $this->txtFluxogramaItemModeloId->Text = $this->objFluxogramaItemReal->FluxogramaItemModeloId;
			if ($this->lblFluxogramaItemModeloId) $this->lblFluxogramaItemModeloId->Text = $this->objFluxogramaItemReal->FluxogramaItemModeloId;

			if ($this->lstBalancoAcoes) {
				$this->lstBalancoAcoes->RemoveAllItems();
				$this->lstBalancoAcoes->AddItem(QApplication::Translate('- Select One -'), null);
				$objBalancoAcoesArray = BalancoAcoes::LoadAll();
				if ($objBalancoAcoesArray) foreach ($objBalancoAcoesArray as $objBalancoAcoes) {
					$objListItem = new QListItem($objBalancoAcoes->__toString(), $objBalancoAcoes->Id);
					if ($objBalancoAcoes->FluxogramaItemRealId == $this->objFluxogramaItemReal->Id)
						$objListItem->Selected = true;
					$this->lstBalancoAcoes->AddItem($objListItem);
				}
				// Because BalancoAcoes's BalancoAcoes is not null, if a value is already selected, it cannot be changed.
				if ($this->lstBalancoAcoes->SelectedValue)
					$this->lstBalancoAcoes->Enabled = false;
				else
					$this->lstBalancoAcoes->Enabled = true;
			}
			if ($this->lblBalancoAcoes) $this->lblBalancoAcoes->Text = ($this->objFluxogramaItemReal->BalancoAcoes) ? $this->objFluxogramaItemReal->BalancoAcoes->__toString() : null;

			if ($this->lstParentFluxogramaItemRealsAsFluxogramaDepedenciaReal) {
				$this->lstParentFluxogramaItemRealsAsFluxogramaDepedenciaReal->RemoveAllItems();
				$objAssociatedArray = $this->objFluxogramaItemReal->GetParentFluxogramaItemRealAsFluxogramaDepedenciaRealArray();
				$objFluxogramaItemRealArray = FluxogramaItemReal::LoadAll();
				if ($objFluxogramaItemRealArray) foreach ($objFluxogramaItemRealArray as $objFluxogramaItemReal) {
					$objListItem = new QListItem($objFluxogramaItemReal->__toString(), $objFluxogramaItemReal->Id);
					foreach ($objAssociatedArray as $objAssociated) {
						if ($objAssociated->Id == $objFluxogramaItemReal->Id)
							$objListItem->Selected = true;
					}
					$this->lstParentFluxogramaItemRealsAsFluxogramaDepedenciaReal->AddItem($objListItem);
				}
			}
			if ($this->lblParentFluxogramaItemRealsAsFluxogramaDepedenciaReal) {
				$objAssociatedArray = $this->objFluxogramaItemReal->GetParentFluxogramaItemRealAsFluxogramaDepedenciaRealArray();
				$strItems = array();
				foreach ($objAssociatedArray as $objAssociated)
					$strItems[] = $objAssociated->__toString();
				$this->lblParentFluxogramaItemRealsAsFluxogramaDepedenciaReal->Text = implode($strGlue, $strItems);
			}

			if ($this->lstFluxogramaItemRealsAsFluxogramaDepedenciaReal) {
				$this->lstFluxogramaItemRealsAsFluxogramaDepedenciaReal->RemoveAllItems();
				$objAssociatedArray = $this->objFluxogramaItemReal->GetFluxogramaItemRealAsFluxogramaDepedenciaRealArray();
				$objFluxogramaItemRealArray = FluxogramaItemReal::LoadAll();
				if ($objFluxogramaItemRealArray) foreach ($objFluxogramaItemRealArray as $objFluxogramaItemReal) {
					$objListItem = new QListItem($objFluxogramaItemReal->__toString(), $objFluxogramaItemReal->Id);
					foreach ($objAssociatedArray as $objAssociated) {
						if ($objAssociated->Id == $objFluxogramaItemReal->Id)
							$objListItem->Selected = true;
					}
					$this->lstFluxogramaItemRealsAsFluxogramaDepedenciaReal->AddItem($objListItem);
				}
			}
			if ($this->lblFluxogramaItemRealsAsFluxogramaDepedenciaReal) {
				$objAssociatedArray = $this->objFluxogramaItemReal->GetFluxogramaItemRealAsFluxogramaDepedenciaRealArray();
				$strItems = array();
				foreach ($objAssociatedArray as $objAssociated)
					$strItems[] = $objAssociated->__toString();
				$this->lblFluxogramaItemRealsAsFluxogramaDepedenciaReal->Text = implode($strGlue, $strItems);
			}

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////

		protected function lstParentFluxogramaItemRealsAsFluxogramaDepedenciaReal_Update() {
			if ($this->lstParentFluxogramaItemRealsAsFluxogramaDepedenciaReal) {
				$this->objFluxogramaItemReal->UnassociateAllParentFluxogramaItemRealsAsFluxogramaDepedenciaReal();
				$objSelectedListItems = $this->lstParentFluxogramaItemRealsAsFluxogramaDepedenciaReal->SelectedItems;
				if ($objSelectedListItems) foreach ($objSelectedListItems as $objListItem) {
					$this->objFluxogramaItemReal->AssociateParentFluxogramaItemRealAsFluxogramaDepedenciaReal(FluxogramaItemReal::Load($objListItem->Value));
				}
			}
		}

		protected function lstFluxogramaItemRealsAsFluxogramaDepedenciaReal_Update() {
			if ($this->lstFluxogramaItemRealsAsFluxogramaDepedenciaReal) {
				$this->objFluxogramaItemReal->UnassociateAllFluxogramaItemRealsAsFluxogramaDepedenciaReal();
				$objSelectedListItems = $this->lstFluxogramaItemRealsAsFluxogramaDepedenciaReal->SelectedItems;
				if ($objSelectedListItems) foreach ($objSelectedListItems as $objListItem) {
					$this->objFluxogramaItemReal->AssociateFluxogramaItemRealAsFluxogramaDepedenciaReal(FluxogramaItemReal::Load($objListItem->Value));
				}
			}
		}





		///////////////////////////////////////////////
		// PUBLIC FLUXOGRAMAITEMREAL OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's FluxogramaItemReal instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveFluxogramaItemReal() {
			try {
				// Update any fields for controls that have been created
				if ($this->txtReferencia) $this->objFluxogramaItemReal->Referencia = $this->txtReferencia->Text;
				if ($this->txtAcao) $this->objFluxogramaItemReal->Acao = $this->txtAcao->Text;
				if ($this->txtMaquina) $this->objFluxogramaItemReal->Maquina = $this->txtMaquina->Text;
				if ($this->txtTempo) $this->objFluxogramaItemReal->Tempo = $this->txtTempo->Text;
				if ($this->txtProfundidade) $this->objFluxogramaItemReal->Profundidade = $this->txtProfundidade->Text;
				if ($this->txtFluxogramaItemModeloId) $this->objFluxogramaItemReal->FluxogramaItemModeloId = $this->txtFluxogramaItemModeloId->Text;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it
				if ($this->lstBalancoAcoes) $this->objFluxogramaItemReal->BalancoAcoes = BalancoAcoes::Load($this->lstBalancoAcoes->SelectedValue);

				// Save the FluxogramaItemReal object
				$this->objFluxogramaItemReal->Save();

				// Finally, update any ManyToManyReferences (if any)
				$this->lstParentFluxogramaItemRealsAsFluxogramaDepedenciaReal_Update();
				$this->lstFluxogramaItemRealsAsFluxogramaDepedenciaReal_Update();
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's FluxogramaItemReal instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteFluxogramaItemReal() {
			$this->objFluxogramaItemReal->UnassociateAllParentFluxogramaItemRealsAsFluxogramaDepedenciaReal();
			$this->objFluxogramaItemReal->UnassociateAllFluxogramaItemRealsAsFluxogramaDepedenciaReal();
			$this->objFluxogramaItemReal->Delete();
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
				case 'FluxogramaItemReal': return $this->objFluxogramaItemReal;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to FluxogramaItemReal fields -- will be created dynamically if not yet created
				case 'IdControl':
					if (!$this->lblId) return $this->lblId_Create();
					return $this->lblId;
				case 'IdLabel':
					if (!$this->lblId) return $this->lblId_Create();
					return $this->lblId;
				case 'ReferenciaControl':
					if (!$this->txtReferencia) return $this->txtReferencia_Create();
					return $this->txtReferencia;
				case 'ReferenciaLabel':
					if (!$this->lblReferencia) return $this->lblReferencia_Create();
					return $this->lblReferencia;
				case 'AcaoControl':
					if (!$this->txtAcao) return $this->txtAcao_Create();
					return $this->txtAcao;
				case 'AcaoLabel':
					if (!$this->lblAcao) return $this->lblAcao_Create();
					return $this->lblAcao;
				case 'MaquinaControl':
					if (!$this->txtMaquina) return $this->txtMaquina_Create();
					return $this->txtMaquina;
				case 'MaquinaLabel':
					if (!$this->lblMaquina) return $this->lblMaquina_Create();
					return $this->lblMaquina;
				case 'TempoControl':
					if (!$this->txtTempo) return $this->txtTempo_Create();
					return $this->txtTempo;
				case 'TempoLabel':
					if (!$this->lblTempo) return $this->lblTempo_Create();
					return $this->lblTempo;
				case 'ProfundidadeControl':
					if (!$this->txtProfundidade) return $this->txtProfundidade_Create();
					return $this->txtProfundidade;
				case 'ProfundidadeLabel':
					if (!$this->lblProfundidade) return $this->lblProfundidade_Create();
					return $this->lblProfundidade;
				case 'FluxogramaItemModeloIdControl':
					if (!$this->txtFluxogramaItemModeloId) return $this->txtFluxogramaItemModeloId_Create();
					return $this->txtFluxogramaItemModeloId;
				case 'FluxogramaItemModeloIdLabel':
					if (!$this->lblFluxogramaItemModeloId) return $this->lblFluxogramaItemModeloId_Create();
					return $this->lblFluxogramaItemModeloId;
				case 'BalancoAcoesControl':
					if (!$this->lstBalancoAcoes) return $this->lstBalancoAcoes_Create();
					return $this->lstBalancoAcoes;
				case 'BalancoAcoesLabel':
					if (!$this->lblBalancoAcoes) return $this->lblBalancoAcoes_Create();
					return $this->lblBalancoAcoes;
				case 'ParentFluxogramaItemRealAsFluxogramaDepedenciaRealControl':
					if (!$this->lstParentFluxogramaItemRealsAsFluxogramaDepedenciaReal) return $this->lstParentFluxogramaItemRealsAsFluxogramaDepedenciaReal_Create();
					return $this->lstParentFluxogramaItemRealsAsFluxogramaDepedenciaReal;
				case 'ParentFluxogramaItemRealAsFluxogramaDepedenciaRealLabel':
					if (!$this->lblParentFluxogramaItemRealsAsFluxogramaDepedenciaReal) return $this->lblParentFluxogramaItemRealsAsFluxogramaDepedenciaReal_Create();
					return $this->lblParentFluxogramaItemRealsAsFluxogramaDepedenciaReal;
				case 'FluxogramaItemRealAsFluxogramaDepedenciaRealControl':
					if (!$this->lstFluxogramaItemRealsAsFluxogramaDepedenciaReal) return $this->lstFluxogramaItemRealsAsFluxogramaDepedenciaReal_Create();
					return $this->lstFluxogramaItemRealsAsFluxogramaDepedenciaReal;
				case 'FluxogramaItemRealAsFluxogramaDepedenciaRealLabel':
					if (!$this->lblFluxogramaItemRealsAsFluxogramaDepedenciaReal) return $this->lblFluxogramaItemRealsAsFluxogramaDepedenciaReal_Create();
					return $this->lblFluxogramaItemRealsAsFluxogramaDepedenciaReal;
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
					// Controls that point to FluxogramaItemReal fields
					case 'IdControl':
						return ($this->lblId = QType::Cast($mixValue, 'QControl'));
					case 'ReferenciaControl':
						return ($this->txtReferencia = QType::Cast($mixValue, 'QControl'));
					case 'AcaoControl':
						return ($this->txtAcao = QType::Cast($mixValue, 'QControl'));
					case 'MaquinaControl':
						return ($this->txtMaquina = QType::Cast($mixValue, 'QControl'));
					case 'TempoControl':
						return ($this->txtTempo = QType::Cast($mixValue, 'QControl'));
					case 'ProfundidadeControl':
						return ($this->txtProfundidade = QType::Cast($mixValue, 'QControl'));
					case 'FluxogramaItemModeloIdControl':
						return ($this->txtFluxogramaItemModeloId = QType::Cast($mixValue, 'QControl'));
					case 'BalancoAcoesControl':
						return ($this->lstBalancoAcoes = QType::Cast($mixValue, 'QControl'));
					case 'ParentFluxogramaItemRealAsFluxogramaDepedenciaRealControl':
						return ($this->lstParentFluxogramaItemRealsAsFluxogramaDepedenciaReal = QType::Cast($mixValue, 'QControl'));
					case 'FluxogramaItemRealAsFluxogramaDepedenciaRealControl':
						return ($this->lstFluxogramaItemRealsAsFluxogramaDepedenciaReal = QType::Cast($mixValue, 'QControl'));
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