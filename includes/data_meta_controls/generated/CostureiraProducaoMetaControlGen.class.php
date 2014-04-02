<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the CostureiraProducao class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single CostureiraProducao object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a CostureiraProducaoMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 * 
	 * @package My Application
	 * @subpackage MetaControls
	 * property-read CostureiraProducao $CostureiraProducao the actual CostureiraProducao data class being edited
	 * property QLabel $IdControl
	 * property-read QLabel $IdLabel
	 * property QListBox $CostureiraIdControl
	 * property-read QLabel $CostureiraIdLabel
	 * property QListBox $BalancoAcoesIdControl
	 * property-read QLabel $BalancoAcoesIdLabel
	 * property QIntegerTextBox $QuantidadePlanejadaControl
	 * property-read QLabel $QuantidadePlanejadaLabel
	 * property QIntegerTextBox $QuantidadeRealizadaControl
	 * property-read QLabel $QuantidadeRealizadaLabel
	 * property QIntegerTextBox $QuantidadeEstocadoControl
	 * property-read QLabel $QuantidadeEstocadoLabel
	 * property QIntegerTextBox $TempoPrevistoControl
	 * property-read QLabel $TempoPrevistoLabel
	 * property QCheckBox $ConcluidoControl
	 * property-read QLabel $ConcluidoLabel
	 * property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class CostureiraProducaoMetaControlGen extends QBaseClass {
		// General Variables
		/**
		 * @var CostureiraProducao objCostureiraProducao
		 * @access protected
		 */
		protected $objCostureiraProducao;

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

		// Controls that allow the editing of CostureiraProducao's individual data fields
        /**
         * @var QLabel lblId;
         * @access protected
         */
		protected $lblId;

        /**
         * @var QListBox lstCostureira;
         * @access protected
         */
		protected $lstCostureira;

        /**
         * @var QListBox lstBalancoAcoes;
         * @access protected
         */
		protected $lstBalancoAcoes;

        /**
         * @var QIntegerTextBox txtQuantidadePlanejada;
         * @access protected
         */
		protected $txtQuantidadePlanejada;

        /**
         * @var QIntegerTextBox txtQuantidadeRealizada;
         * @access protected
         */
		protected $txtQuantidadeRealizada;

        /**
         * @var QIntegerTextBox txtQuantidadeEstocado;
         * @access protected
         */
		protected $txtQuantidadeEstocado;

        /**
         * @var QIntegerTextBox txtTempoPrevisto;
         * @access protected
         */
		protected $txtTempoPrevisto;

        /**
         * @var QCheckBox chkConcluido;
         * @access protected
         */
		protected $chkConcluido;


		// Controls that allow the viewing of CostureiraProducao's individual data fields
        /**
         * @var QLabel lblCostureiraId
         * @access protected
         */
		protected $lblCostureiraId;

        /**
         * @var QLabel lblBalancoAcoesId
         * @access protected
         */
		protected $lblBalancoAcoesId;

        /**
         * @var QLabel lblQuantidadePlanejada
         * @access protected
         */
		protected $lblQuantidadePlanejada;

        /**
         * @var QLabel lblQuantidadeRealizada
         * @access protected
         */
		protected $lblQuantidadeRealizada;

        /**
         * @var QLabel lblQuantidadeEstocado
         * @access protected
         */
		protected $lblQuantidadeEstocado;

        /**
         * @var QLabel lblTempoPrevisto
         * @access protected
         */
		protected $lblTempoPrevisto;

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
		 * CostureiraProducaoMetaControl to edit a single CostureiraProducao object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single CostureiraProducao object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this CostureiraProducaoMetaControl
		 * @param CostureiraProducao $objCostureiraProducao new or existing CostureiraProducao object
		 */
		 public function __construct($objParentObject, CostureiraProducao $objCostureiraProducao) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this CostureiraProducaoMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked CostureiraProducao object
			$this->objCostureiraProducao = $objCostureiraProducao;

			// Figure out if we're Editing or Creating New
			if ($this->objCostureiraProducao->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this CostureiraProducaoMetaControl
		 * @param integer $intId primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing CostureiraProducao object creation - defaults to CreateOrEdit
 		 * @return CostureiraProducaoMetaControl
		 */
		public static function Create($objParentObject, $intId = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intId)) {
				$objCostureiraProducao = CostureiraProducao::Load($intId);

				// CostureiraProducao was found -- return it!
				if ($objCostureiraProducao)
					return new CostureiraProducaoMetaControl($objParentObject, $objCostureiraProducao);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a CostureiraProducao object with PK arguments: ' . $intId);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new CostureiraProducaoMetaControl($objParentObject, new CostureiraProducao());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this CostureiraProducaoMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing CostureiraProducao object creation - defaults to CreateOrEdit
		 * @return CostureiraProducaoMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intId = QApplication::PathInfo(0);
			return CostureiraProducaoMetaControl::Create($objParentObject, $intId, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this CostureiraProducaoMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing CostureiraProducao object creation - defaults to CreateOrEdit
		 * @return CostureiraProducaoMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intId = QApplication::QueryString('intId');
			return CostureiraProducaoMetaControl::Create($objParentObject, $intId, $intCreateType);
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
				$this->lblId->Text = $this->objCostureiraProducao->Id;
			else
				$this->lblId->Text = 'N/A';
			return $this->lblId;
		}

		/**
		 * Create and setup QListBox lstCostureira
		 * @param string $strControlId optional ControlId to use
		 * @param QQCondition $objConditions override the default condition of QQ::All() to the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause object or array of QQClause objects for the query
		 * @return QListBox
		 */
		public function lstCostureira_Create($strControlId = null, QQCondition $objCondition = null, $objOptionalClauses = null) {
			$this->lstCostureira = new QListBox($this->objParentObject, $strControlId);
			$this->lstCostureira->Name = QApplication::Translate('Costureira');
			$this->lstCostureira->AddItem(QApplication::Translate('- Select One -'), null);

			// Setup and perform the Query
			if (is_null($objCondition)) $objCondition = QQ::All();
			$objCostureiraCursor = Costureira::QueryCursor($objCondition, $objOptionalClauses);

			// Iterate through the Cursor
			while ($objCostureira = Costureira::InstantiateCursor($objCostureiraCursor)) {
				$objListItem = new QListItem($objCostureira->__toString(), $objCostureira->Id);
				if (($this->objCostureiraProducao->Costureira) && ($this->objCostureiraProducao->Costureira->Id == $objCostureira->Id))
					$objListItem->Selected = true;
				$this->lstCostureira->AddItem($objListItem);
			}

			// Return the QListBox
			return $this->lstCostureira;
		}

		/**
		 * Create and setup QLabel lblCostureiraId
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblCostureiraId_Create($strControlId = null) {
			$this->lblCostureiraId = new QLabel($this->objParentObject, $strControlId);
			$this->lblCostureiraId->Name = QApplication::Translate('Costureira');
			$this->lblCostureiraId->Text = ($this->objCostureiraProducao->Costureira) ? $this->objCostureiraProducao->Costureira->__toString() : null;
			return $this->lblCostureiraId;
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
				if (($this->objCostureiraProducao->BalancoAcoes) && ($this->objCostureiraProducao->BalancoAcoes->Id == $objBalancoAcoes->Id))
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
			$this->lblBalancoAcoesId->Text = ($this->objCostureiraProducao->BalancoAcoes) ? $this->objCostureiraProducao->BalancoAcoes->__toString() : null;
			$this->lblBalancoAcoesId->Required = true;
			return $this->lblBalancoAcoesId;
		}

		/**
		 * Create and setup QIntegerTextBox txtQuantidadePlanejada
		 * @param string $strControlId optional ControlId to use
		 * @return QIntegerTextBox
		 */
		public function txtQuantidadePlanejada_Create($strControlId = null) {
			$this->txtQuantidadePlanejada = new QIntegerTextBox($this->objParentObject, $strControlId);
			$this->txtQuantidadePlanejada->Name = QApplication::Translate('Quantidade Planejada');
			$this->txtQuantidadePlanejada->Text = $this->objCostureiraProducao->QuantidadePlanejada;
			$this->txtQuantidadePlanejada->Required = true;
			return $this->txtQuantidadePlanejada;
		}

		/**
		 * Create and setup QLabel lblQuantidadePlanejada
		 * @param string $strControlId optional ControlId to use
		 * @param string $strFormat optional sprintf format to use
		 * @return QLabel
		 */
		public function lblQuantidadePlanejada_Create($strControlId = null, $strFormat = null) {
			$this->lblQuantidadePlanejada = new QLabel($this->objParentObject, $strControlId);
			$this->lblQuantidadePlanejada->Name = QApplication::Translate('Quantidade Planejada');
			$this->lblQuantidadePlanejada->Text = $this->objCostureiraProducao->QuantidadePlanejada;
			$this->lblQuantidadePlanejada->Required = true;
			$this->lblQuantidadePlanejada->Format = $strFormat;
			return $this->lblQuantidadePlanejada;
		}

		/**
		 * Create and setup QIntegerTextBox txtQuantidadeRealizada
		 * @param string $strControlId optional ControlId to use
		 * @return QIntegerTextBox
		 */
		public function txtQuantidadeRealizada_Create($strControlId = null) {
			$this->txtQuantidadeRealizada = new QIntegerTextBox($this->objParentObject, $strControlId);
			$this->txtQuantidadeRealizada->Name = QApplication::Translate('Quantidade Realizada');
			$this->txtQuantidadeRealizada->Text = $this->objCostureiraProducao->QuantidadeRealizada;
			return $this->txtQuantidadeRealizada;
		}

		/**
		 * Create and setup QLabel lblQuantidadeRealizada
		 * @param string $strControlId optional ControlId to use
		 * @param string $strFormat optional sprintf format to use
		 * @return QLabel
		 */
		public function lblQuantidadeRealizada_Create($strControlId = null, $strFormat = null) {
			$this->lblQuantidadeRealizada = new QLabel($this->objParentObject, $strControlId);
			$this->lblQuantidadeRealizada->Name = QApplication::Translate('Quantidade Realizada');
			$this->lblQuantidadeRealizada->Text = $this->objCostureiraProducao->QuantidadeRealizada;
			$this->lblQuantidadeRealizada->Format = $strFormat;
			return $this->lblQuantidadeRealizada;
		}

		/**
		 * Create and setup QIntegerTextBox txtQuantidadeEstocado
		 * @param string $strControlId optional ControlId to use
		 * @return QIntegerTextBox
		 */
		public function txtQuantidadeEstocado_Create($strControlId = null) {
			$this->txtQuantidadeEstocado = new QIntegerTextBox($this->objParentObject, $strControlId);
			$this->txtQuantidadeEstocado->Name = QApplication::Translate('Quantidade Estocado');
			$this->txtQuantidadeEstocado->Text = $this->objCostureiraProducao->QuantidadeEstocado;
			$this->txtQuantidadeEstocado->Required = true;
			return $this->txtQuantidadeEstocado;
		}

		/**
		 * Create and setup QLabel lblQuantidadeEstocado
		 * @param string $strControlId optional ControlId to use
		 * @param string $strFormat optional sprintf format to use
		 * @return QLabel
		 */
		public function lblQuantidadeEstocado_Create($strControlId = null, $strFormat = null) {
			$this->lblQuantidadeEstocado = new QLabel($this->objParentObject, $strControlId);
			$this->lblQuantidadeEstocado->Name = QApplication::Translate('Quantidade Estocado');
			$this->lblQuantidadeEstocado->Text = $this->objCostureiraProducao->QuantidadeEstocado;
			$this->lblQuantidadeEstocado->Required = true;
			$this->lblQuantidadeEstocado->Format = $strFormat;
			return $this->lblQuantidadeEstocado;
		}

		/**
		 * Create and setup QIntegerTextBox txtTempoPrevisto
		 * @param string $strControlId optional ControlId to use
		 * @return QIntegerTextBox
		 */
		public function txtTempoPrevisto_Create($strControlId = null) {
			$this->txtTempoPrevisto = new QIntegerTextBox($this->objParentObject, $strControlId);
			$this->txtTempoPrevisto->Name = QApplication::Translate('Tempo Previsto');
			$this->txtTempoPrevisto->Text = $this->objCostureiraProducao->TempoPrevisto;
			return $this->txtTempoPrevisto;
		}

		/**
		 * Create and setup QLabel lblTempoPrevisto
		 * @param string $strControlId optional ControlId to use
		 * @param string $strFormat optional sprintf format to use
		 * @return QLabel
		 */
		public function lblTempoPrevisto_Create($strControlId = null, $strFormat = null) {
			$this->lblTempoPrevisto = new QLabel($this->objParentObject, $strControlId);
			$this->lblTempoPrevisto->Name = QApplication::Translate('Tempo Previsto');
			$this->lblTempoPrevisto->Text = $this->objCostureiraProducao->TempoPrevisto;
			$this->lblTempoPrevisto->Format = $strFormat;
			return $this->lblTempoPrevisto;
		}

		/**
		 * Create and setup QCheckBox chkConcluido
		 * @param string $strControlId optional ControlId to use
		 * @return QCheckBox
		 */
		public function chkConcluido_Create($strControlId = null) {
			$this->chkConcluido = new QCheckBox($this->objParentObject, $strControlId);
			$this->chkConcluido->Name = QApplication::Translate('Concluido');
			$this->chkConcluido->Checked = $this->objCostureiraProducao->Concluido;
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
			$this->lblConcluido->Text = ($this->objCostureiraProducao->Concluido) ? QApplication::Translate('Yes') : QApplication::Translate('No');
			return $this->lblConcluido;
		}



		/**
		 * Refresh this MetaControl with Data from the local CostureiraProducao object.
		 * @param boolean $blnReload reload CostureiraProducao from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objCostureiraProducao->Reload();

			if ($this->lblId) if ($this->blnEditMode) $this->lblId->Text = $this->objCostureiraProducao->Id;

			if ($this->lstCostureira) {
					$this->lstCostureira->RemoveAllItems();
				$this->lstCostureira->AddItem(QApplication::Translate('- Select One -'), null);
				$objCostureiraArray = Costureira::LoadAll();
				if ($objCostureiraArray) foreach ($objCostureiraArray as $objCostureira) {
					$objListItem = new QListItem($objCostureira->__toString(), $objCostureira->Id);
					if (($this->objCostureiraProducao->Costureira) && ($this->objCostureiraProducao->Costureira->Id == $objCostureira->Id))
						$objListItem->Selected = true;
					$this->lstCostureira->AddItem($objListItem);
				}
			}
			if ($this->lblCostureiraId) $this->lblCostureiraId->Text = ($this->objCostureiraProducao->Costureira) ? $this->objCostureiraProducao->Costureira->__toString() : null;

			if ($this->lstBalancoAcoes) {
					$this->lstBalancoAcoes->RemoveAllItems();
				if (!$this->blnEditMode)
					$this->lstBalancoAcoes->AddItem(QApplication::Translate('- Select One -'), null);
				$objBalancoAcoesArray = BalancoAcoes::LoadAll();
				if ($objBalancoAcoesArray) foreach ($objBalancoAcoesArray as $objBalancoAcoes) {
					$objListItem = new QListItem($objBalancoAcoes->__toString(), $objBalancoAcoes->Id);
					if (($this->objCostureiraProducao->BalancoAcoes) && ($this->objCostureiraProducao->BalancoAcoes->Id == $objBalancoAcoes->Id))
						$objListItem->Selected = true;
					$this->lstBalancoAcoes->AddItem($objListItem);
				}
			}
			if ($this->lblBalancoAcoesId) $this->lblBalancoAcoesId->Text = ($this->objCostureiraProducao->BalancoAcoes) ? $this->objCostureiraProducao->BalancoAcoes->__toString() : null;

			if ($this->txtQuantidadePlanejada) $this->txtQuantidadePlanejada->Text = $this->objCostureiraProducao->QuantidadePlanejada;
			if ($this->lblQuantidadePlanejada) $this->lblQuantidadePlanejada->Text = $this->objCostureiraProducao->QuantidadePlanejada;

			if ($this->txtQuantidadeRealizada) $this->txtQuantidadeRealizada->Text = $this->objCostureiraProducao->QuantidadeRealizada;
			if ($this->lblQuantidadeRealizada) $this->lblQuantidadeRealizada->Text = $this->objCostureiraProducao->QuantidadeRealizada;

			if ($this->txtQuantidadeEstocado) $this->txtQuantidadeEstocado->Text = $this->objCostureiraProducao->QuantidadeEstocado;
			if ($this->lblQuantidadeEstocado) $this->lblQuantidadeEstocado->Text = $this->objCostureiraProducao->QuantidadeEstocado;

			if ($this->txtTempoPrevisto) $this->txtTempoPrevisto->Text = $this->objCostureiraProducao->TempoPrevisto;
			if ($this->lblTempoPrevisto) $this->lblTempoPrevisto->Text = $this->objCostureiraProducao->TempoPrevisto;

			if ($this->chkConcluido) $this->chkConcluido->Checked = $this->objCostureiraProducao->Concluido;
			if ($this->lblConcluido) $this->lblConcluido->Text = ($this->objCostureiraProducao->Concluido) ? QApplication::Translate('Yes') : QApplication::Translate('No');

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC COSTUREIRAPRODUCAO OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's CostureiraProducao instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveCostureiraProducao() {
			try {
				// Update any fields for controls that have been created
				if ($this->lstCostureira) $this->objCostureiraProducao->CostureiraId = $this->lstCostureira->SelectedValue;
				if ($this->lstBalancoAcoes) $this->objCostureiraProducao->BalancoAcoesId = $this->lstBalancoAcoes->SelectedValue;
				if ($this->txtQuantidadePlanejada) $this->objCostureiraProducao->QuantidadePlanejada = $this->txtQuantidadePlanejada->Text;
				if ($this->txtQuantidadeRealizada) $this->objCostureiraProducao->QuantidadeRealizada = $this->txtQuantidadeRealizada->Text;
				if ($this->txtQuantidadeEstocado) $this->objCostureiraProducao->QuantidadeEstocado = $this->txtQuantidadeEstocado->Text;
				if ($this->txtTempoPrevisto) $this->objCostureiraProducao->TempoPrevisto = $this->txtTempoPrevisto->Text;
				if ($this->chkConcluido) $this->objCostureiraProducao->Concluido = $this->chkConcluido->Checked;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the CostureiraProducao object
				$this->objCostureiraProducao->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's CostureiraProducao instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteCostureiraProducao() {
			$this->objCostureiraProducao->Delete();
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
				case 'CostureiraProducao': return $this->objCostureiraProducao;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to CostureiraProducao fields -- will be created dynamically if not yet created
				case 'IdControl':
					if (!$this->lblId) return $this->lblId_Create();
					return $this->lblId;
				case 'IdLabel':
					if (!$this->lblId) return $this->lblId_Create();
					return $this->lblId;
				case 'CostureiraIdControl':
					if (!$this->lstCostureira) return $this->lstCostureira_Create();
					return $this->lstCostureira;
				case 'CostureiraIdLabel':
					if (!$this->lblCostureiraId) return $this->lblCostureiraId_Create();
					return $this->lblCostureiraId;
				case 'BalancoAcoesIdControl':
					if (!$this->lstBalancoAcoes) return $this->lstBalancoAcoes_Create();
					return $this->lstBalancoAcoes;
				case 'BalancoAcoesIdLabel':
					if (!$this->lblBalancoAcoesId) return $this->lblBalancoAcoesId_Create();
					return $this->lblBalancoAcoesId;
				case 'QuantidadePlanejadaControl':
					if (!$this->txtQuantidadePlanejada) return $this->txtQuantidadePlanejada_Create();
					return $this->txtQuantidadePlanejada;
				case 'QuantidadePlanejadaLabel':
					if (!$this->lblQuantidadePlanejada) return $this->lblQuantidadePlanejada_Create();
					return $this->lblQuantidadePlanejada;
				case 'QuantidadeRealizadaControl':
					if (!$this->txtQuantidadeRealizada) return $this->txtQuantidadeRealizada_Create();
					return $this->txtQuantidadeRealizada;
				case 'QuantidadeRealizadaLabel':
					if (!$this->lblQuantidadeRealizada) return $this->lblQuantidadeRealizada_Create();
					return $this->lblQuantidadeRealizada;
				case 'QuantidadeEstocadoControl':
					if (!$this->txtQuantidadeEstocado) return $this->txtQuantidadeEstocado_Create();
					return $this->txtQuantidadeEstocado;
				case 'QuantidadeEstocadoLabel':
					if (!$this->lblQuantidadeEstocado) return $this->lblQuantidadeEstocado_Create();
					return $this->lblQuantidadeEstocado;
				case 'TempoPrevistoControl':
					if (!$this->txtTempoPrevisto) return $this->txtTempoPrevisto_Create();
					return $this->txtTempoPrevisto;
				case 'TempoPrevistoLabel':
					if (!$this->lblTempoPrevisto) return $this->lblTempoPrevisto_Create();
					return $this->lblTempoPrevisto;
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
					// Controls that point to CostureiraProducao fields
					case 'IdControl':
						return ($this->lblId = QType::Cast($mixValue, 'QControl'));
					case 'CostureiraIdControl':
						return ($this->lstCostureira = QType::Cast($mixValue, 'QControl'));
					case 'BalancoAcoesIdControl':
						return ($this->lstBalancoAcoes = QType::Cast($mixValue, 'QControl'));
					case 'QuantidadePlanejadaControl':
						return ($this->txtQuantidadePlanejada = QType::Cast($mixValue, 'QControl'));
					case 'QuantidadeRealizadaControl':
						return ($this->txtQuantidadeRealizada = QType::Cast($mixValue, 'QControl'));
					case 'QuantidadeEstocadoControl':
						return ($this->txtQuantidadeEstocado = QType::Cast($mixValue, 'QControl'));
					case 'TempoPrevistoControl':
						return ($this->txtTempoPrevisto = QType::Cast($mixValue, 'QControl'));
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