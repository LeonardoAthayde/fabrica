<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the ComandoGrade class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single ComandoGrade object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a ComandoGradeMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 * 
	 * @package My Application
	 * @subpackage MetaControls
	 * property-read ComandoGrade $ComandoGrade the actual ComandoGrade data class being edited
	 * property QLabel $IdControl
	 * property-read QLabel $IdLabel
	 * property QListBox $ReferenciaIdControl
	 * property-read QLabel $ReferenciaIdLabel
	 * property QListBox $TamanhoIdControl
	 * property-read QLabel $TamanhoIdLabel
	 * property QListBox $ComandoTecidoPecaIdControl
	 * property-read QLabel $ComandoTecidoPecaIdLabel
	 * property QIntegerTextBox $QuantidadeRiscoControl
	 * property-read QLabel $QuantidadeRiscoLabel
	 * property QCheckBox $MeiaRiscoControl
	 * property-read QLabel $MeiaRiscoLabel
	 * property QIntegerTextBox $QuantidadeRealControl
	 * property-read QLabel $QuantidadeRealLabel
	 * property QFloatTextBox $PesoControl
	 * property-read QLabel $PesoLabel
	 * property QListBox $BalancoPecasAsOrdemProducaoGradeControl
	 * property-read QLabel $BalancoPecasAsOrdemProducaoGradeLabel
	 * property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class ComandoGradeMetaControlGen extends QBaseClass {
		// General Variables
		/**
		 * @var ComandoGrade objComandoGrade
		 * @access protected
		 */
		protected $objComandoGrade;

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

		// Controls that allow the editing of ComandoGrade's individual data fields
        /**
         * @var QLabel lblId;
         * @access protected
         */
		protected $lblId;

        /**
         * @var QListBox lstReferencia;
         * @access protected
         */
		protected $lstReferencia;

        /**
         * @var QListBox lstTamanho;
         * @access protected
         */
		protected $lstTamanho;

        /**
         * @var QListBox lstComandoTecidoPeca;
         * @access protected
         */
		protected $lstComandoTecidoPeca;

        /**
         * @var QIntegerTextBox txtQuantidadeRisco;
         * @access protected
         */
		protected $txtQuantidadeRisco;

        /**
         * @var QCheckBox chkMeiaRisco;
         * @access protected
         */
		protected $chkMeiaRisco;

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


		// Controls that allow the viewing of ComandoGrade's individual data fields
        /**
         * @var QLabel lblReferenciaId
         * @access protected
         */
		protected $lblReferenciaId;

        /**
         * @var QLabel lblTamanhoId
         * @access protected
         */
		protected $lblTamanhoId;

        /**
         * @var QLabel lblComandoTecidoPecaId
         * @access protected
         */
		protected $lblComandoTecidoPecaId;

        /**
         * @var QLabel lblQuantidadeRisco
         * @access protected
         */
		protected $lblQuantidadeRisco;

        /**
         * @var QLabel lblMeiaRisco
         * @access protected
         */
		protected $lblMeiaRisco;

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


		// QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References
        /**
         * @var QListBox lstBalancoPecasAsOrdemProducaoGrade
         * @access protected
         */
		protected $lstBalancoPecasAsOrdemProducaoGrade;


		// QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References
        /**
         * @var QLabel lblBalancoPecasAsOrdemProducaoGrade
         * @access protected
         */
		protected $lblBalancoPecasAsOrdemProducaoGrade;



		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * ComandoGradeMetaControl to edit a single ComandoGrade object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single ComandoGrade object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this ComandoGradeMetaControl
		 * @param ComandoGrade $objComandoGrade new or existing ComandoGrade object
		 */
		 public function __construct($objParentObject, ComandoGrade $objComandoGrade) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this ComandoGradeMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked ComandoGrade object
			$this->objComandoGrade = $objComandoGrade;

			// Figure out if we're Editing or Creating New
			if ($this->objComandoGrade->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this ComandoGradeMetaControl
		 * @param integer $intId primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing ComandoGrade object creation - defaults to CreateOrEdit
 		 * @return ComandoGradeMetaControl
		 */
		public static function Create($objParentObject, $intId = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intId)) {
				$objComandoGrade = ComandoGrade::Load($intId);

				// ComandoGrade was found -- return it!
				if ($objComandoGrade)
					return new ComandoGradeMetaControl($objParentObject, $objComandoGrade);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a ComandoGrade object with PK arguments: ' . $intId);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new ComandoGradeMetaControl($objParentObject, new ComandoGrade());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this ComandoGradeMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing ComandoGrade object creation - defaults to CreateOrEdit
		 * @return ComandoGradeMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intId = QApplication::PathInfo(0);
			return ComandoGradeMetaControl::Create($objParentObject, $intId, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this ComandoGradeMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing ComandoGrade object creation - defaults to CreateOrEdit
		 * @return ComandoGradeMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intId = QApplication::QueryString('intId');
			return ComandoGradeMetaControl::Create($objParentObject, $intId, $intCreateType);
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
				$this->lblId->Text = $this->objComandoGrade->Id;
			else
				$this->lblId->Text = 'N/A';
			return $this->lblId;
		}

		/**
		 * Create and setup QListBox lstReferencia
		 * @param string $strControlId optional ControlId to use
		 * @param QQCondition $objConditions override the default condition of QQ::All() to the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause object or array of QQClause objects for the query
		 * @return QListBox
		 */
		public function lstReferencia_Create($strControlId = null, QQCondition $objCondition = null, $objOptionalClauses = null) {
			$this->lstReferencia = new QListBox($this->objParentObject, $strControlId);
			$this->lstReferencia->Name = QApplication::Translate('Referencia');
			$this->lstReferencia->Required = true;
			if (!$this->blnEditMode)
				$this->lstReferencia->AddItem(QApplication::Translate('- Select One -'), null);

			// Setup and perform the Query
			if (is_null($objCondition)) $objCondition = QQ::All();
			$objReferenciaCursor = Referencia::QueryCursor($objCondition, $objOptionalClauses);

			// Iterate through the Cursor
			while ($objReferencia = Referencia::InstantiateCursor($objReferenciaCursor)) {
				$objListItem = new QListItem($objReferencia->__toString(), $objReferencia->Id);
				if (($this->objComandoGrade->Referencia) && ($this->objComandoGrade->Referencia->Id == $objReferencia->Id))
					$objListItem->Selected = true;
				$this->lstReferencia->AddItem($objListItem);
			}

			// Return the QListBox
			return $this->lstReferencia;
		}

		/**
		 * Create and setup QLabel lblReferenciaId
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblReferenciaId_Create($strControlId = null) {
			$this->lblReferenciaId = new QLabel($this->objParentObject, $strControlId);
			$this->lblReferenciaId->Name = QApplication::Translate('Referencia');
			$this->lblReferenciaId->Text = ($this->objComandoGrade->Referencia) ? $this->objComandoGrade->Referencia->__toString() : null;
			$this->lblReferenciaId->Required = true;
			return $this->lblReferenciaId;
		}

		/**
		 * Create and setup QListBox lstTamanho
		 * @param string $strControlId optional ControlId to use
		 * @param QQCondition $objConditions override the default condition of QQ::All() to the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause object or array of QQClause objects for the query
		 * @return QListBox
		 */
		public function lstTamanho_Create($strControlId = null, QQCondition $objCondition = null, $objOptionalClauses = null) {
			$this->lstTamanho = new QListBox($this->objParentObject, $strControlId);
			$this->lstTamanho->Name = QApplication::Translate('Tamanho');
			$this->lstTamanho->Required = true;
			if (!$this->blnEditMode)
				$this->lstTamanho->AddItem(QApplication::Translate('- Select One -'), null);

			// Setup and perform the Query
			if (is_null($objCondition)) $objCondition = QQ::All();
			$objTamanhoCursor = Tamanho::QueryCursor($objCondition, $objOptionalClauses);

			// Iterate through the Cursor
			while ($objTamanho = Tamanho::InstantiateCursor($objTamanhoCursor)) {
				$objListItem = new QListItem($objTamanho->__toString(), $objTamanho->Id);
				if (($this->objComandoGrade->Tamanho) && ($this->objComandoGrade->Tamanho->Id == $objTamanho->Id))
					$objListItem->Selected = true;
				$this->lstTamanho->AddItem($objListItem);
			}

			// Return the QListBox
			return $this->lstTamanho;
		}

		/**
		 * Create and setup QLabel lblTamanhoId
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblTamanhoId_Create($strControlId = null) {
			$this->lblTamanhoId = new QLabel($this->objParentObject, $strControlId);
			$this->lblTamanhoId->Name = QApplication::Translate('Tamanho');
			$this->lblTamanhoId->Text = ($this->objComandoGrade->Tamanho) ? $this->objComandoGrade->Tamanho->__toString() : null;
			$this->lblTamanhoId->Required = true;
			return $this->lblTamanhoId;
		}

		/**
		 * Create and setup QListBox lstComandoTecidoPeca
		 * @param string $strControlId optional ControlId to use
		 * @param QQCondition $objConditions override the default condition of QQ::All() to the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause object or array of QQClause objects for the query
		 * @return QListBox
		 */
		public function lstComandoTecidoPeca_Create($strControlId = null, QQCondition $objCondition = null, $objOptionalClauses = null) {
			$this->lstComandoTecidoPeca = new QListBox($this->objParentObject, $strControlId);
			$this->lstComandoTecidoPeca->Name = QApplication::Translate('Comando Tecido Peca');
			$this->lstComandoTecidoPeca->Required = true;
			if (!$this->blnEditMode)
				$this->lstComandoTecidoPeca->AddItem(QApplication::Translate('- Select One -'), null);

			// Setup and perform the Query
			if (is_null($objCondition)) $objCondition = QQ::All();
			$objComandoTecidoPecaCursor = ComandoTecidoPeca::QueryCursor($objCondition, $objOptionalClauses);

			// Iterate through the Cursor
			while ($objComandoTecidoPeca = ComandoTecidoPeca::InstantiateCursor($objComandoTecidoPecaCursor)) {
				$objListItem = new QListItem($objComandoTecidoPeca->__toString(), $objComandoTecidoPeca->Id);
				if (($this->objComandoGrade->ComandoTecidoPeca) && ($this->objComandoGrade->ComandoTecidoPeca->Id == $objComandoTecidoPeca->Id))
					$objListItem->Selected = true;
				$this->lstComandoTecidoPeca->AddItem($objListItem);
			}

			// Return the QListBox
			return $this->lstComandoTecidoPeca;
		}

		/**
		 * Create and setup QLabel lblComandoTecidoPecaId
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblComandoTecidoPecaId_Create($strControlId = null) {
			$this->lblComandoTecidoPecaId = new QLabel($this->objParentObject, $strControlId);
			$this->lblComandoTecidoPecaId->Name = QApplication::Translate('Comando Tecido Peca');
			$this->lblComandoTecidoPecaId->Text = ($this->objComandoGrade->ComandoTecidoPeca) ? $this->objComandoGrade->ComandoTecidoPeca->__toString() : null;
			$this->lblComandoTecidoPecaId->Required = true;
			return $this->lblComandoTecidoPecaId;
		}

		/**
		 * Create and setup QIntegerTextBox txtQuantidadeRisco
		 * @param string $strControlId optional ControlId to use
		 * @return QIntegerTextBox
		 */
		public function txtQuantidadeRisco_Create($strControlId = null) {
			$this->txtQuantidadeRisco = new QIntegerTextBox($this->objParentObject, $strControlId);
			$this->txtQuantidadeRisco->Name = QApplication::Translate('Quantidade Risco');
			$this->txtQuantidadeRisco->Text = $this->objComandoGrade->QuantidadeRisco;
			$this->txtQuantidadeRisco->Required = true;
			return $this->txtQuantidadeRisco;
		}

		/**
		 * Create and setup QLabel lblQuantidadeRisco
		 * @param string $strControlId optional ControlId to use
		 * @param string $strFormat optional sprintf format to use
		 * @return QLabel
		 */
		public function lblQuantidadeRisco_Create($strControlId = null, $strFormat = null) {
			$this->lblQuantidadeRisco = new QLabel($this->objParentObject, $strControlId);
			$this->lblQuantidadeRisco->Name = QApplication::Translate('Quantidade Risco');
			$this->lblQuantidadeRisco->Text = $this->objComandoGrade->QuantidadeRisco;
			$this->lblQuantidadeRisco->Required = true;
			$this->lblQuantidadeRisco->Format = $strFormat;
			return $this->lblQuantidadeRisco;
		}

		/**
		 * Create and setup QCheckBox chkMeiaRisco
		 * @param string $strControlId optional ControlId to use
		 * @return QCheckBox
		 */
		public function chkMeiaRisco_Create($strControlId = null) {
			$this->chkMeiaRisco = new QCheckBox($this->objParentObject, $strControlId);
			$this->chkMeiaRisco->Name = QApplication::Translate('Meia Risco');
			$this->chkMeiaRisco->Checked = $this->objComandoGrade->MeiaRisco;
			return $this->chkMeiaRisco;
		}

		/**
		 * Create and setup QLabel lblMeiaRisco
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblMeiaRisco_Create($strControlId = null) {
			$this->lblMeiaRisco = new QLabel($this->objParentObject, $strControlId);
			$this->lblMeiaRisco->Name = QApplication::Translate('Meia Risco');
			$this->lblMeiaRisco->Text = ($this->objComandoGrade->MeiaRisco) ? QApplication::Translate('Yes') : QApplication::Translate('No');
			return $this->lblMeiaRisco;
		}

		/**
		 * Create and setup QIntegerTextBox txtQuantidadeReal
		 * @param string $strControlId optional ControlId to use
		 * @return QIntegerTextBox
		 */
		public function txtQuantidadeReal_Create($strControlId = null) {
			$this->txtQuantidadeReal = new QIntegerTextBox($this->objParentObject, $strControlId);
			$this->txtQuantidadeReal->Name = QApplication::Translate('Quantidade Real');
			$this->txtQuantidadeReal->Text = $this->objComandoGrade->QuantidadeReal;
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
			$this->lblQuantidadeReal->Text = $this->objComandoGrade->QuantidadeReal;
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
			$this->txtPeso->Text = $this->objComandoGrade->Peso;
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
			$this->lblPeso->Text = $this->objComandoGrade->Peso;
			$this->lblPeso->Required = true;
			$this->lblPeso->Format = $strFormat;
			return $this->lblPeso;
		}

		/**
		 * Create and setup QListBox lstBalancoPecasAsOrdemProducaoGrade
		 * @param string $strControlId optional ControlId to use
		 * @param QQCondition $objConditions override the default condition of QQ::All() to the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause object or array of QQClause objects for the query
		 * @return QListBox
		 */
		public function lstBalancoPecasAsOrdemProducaoGrade_Create($strControlId = null, QQCondition $objCondition = null, $objOptionalClauses = null) {
			$this->lstBalancoPecasAsOrdemProducaoGrade = new QListBox($this->objParentObject, $strControlId);
			$this->lstBalancoPecasAsOrdemProducaoGrade->Name = QApplication::Translate('Balanco Pecas As Ordem Producao Grade');
			$this->lstBalancoPecasAsOrdemProducaoGrade->AddItem(QApplication::Translate('- Select One -'), null);

			// Setup and perform the Query
			if (is_null($objCondition)) $objCondition = QQ::All();
			$objBalancoPecasCursor = BalancoPecas::QueryCursor($objCondition, $objOptionalClauses);

			// Iterate through the Cursor
			while ($objBalancoPecas = BalancoPecas::InstantiateCursor($objBalancoPecasCursor)) {
				$objListItem = new QListItem($objBalancoPecas->__toString(), $objBalancoPecas->Id);
				if ($objBalancoPecas->OrdemProducaoGradeId == $this->objComandoGrade->Id)
					$objListItem->Selected = true;
				$this->lstBalancoPecasAsOrdemProducaoGrade->AddItem($objListItem);
			}

			// Because BalancoPecas's BalancoPecasAsOrdemProducaoGrade is not null, if a value is already selected, it cannot be changed.
			if ($this->lstBalancoPecasAsOrdemProducaoGrade->SelectedValue)
				$this->lstBalancoPecasAsOrdemProducaoGrade->Enabled = false;

			// Return the QListBox
			return $this->lstBalancoPecasAsOrdemProducaoGrade;
		}

		/**
		 * Create and setup QLabel lblBalancoPecasAsOrdemProducaoGrade
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblBalancoPecasAsOrdemProducaoGrade_Create($strControlId = null) {
			$this->lblBalancoPecasAsOrdemProducaoGrade = new QLabel($this->objParentObject, $strControlId);
			$this->lblBalancoPecasAsOrdemProducaoGrade->Name = QApplication::Translate('Balanco Pecas As Ordem Producao Grade');
			$this->lblBalancoPecasAsOrdemProducaoGrade->Text = ($this->objComandoGrade->BalancoPecasAsOrdemProducaoGrade) ? $this->objComandoGrade->BalancoPecasAsOrdemProducaoGrade->__toString() : null;
			return $this->lblBalancoPecasAsOrdemProducaoGrade;
		}



		/**
		 * Refresh this MetaControl with Data from the local ComandoGrade object.
		 * @param boolean $blnReload reload ComandoGrade from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objComandoGrade->Reload();

			if ($this->lblId) if ($this->blnEditMode) $this->lblId->Text = $this->objComandoGrade->Id;

			if ($this->lstReferencia) {
					$this->lstReferencia->RemoveAllItems();
				if (!$this->blnEditMode)
					$this->lstReferencia->AddItem(QApplication::Translate('- Select One -'), null);
				$objReferenciaArray = Referencia::LoadAll();
				if ($objReferenciaArray) foreach ($objReferenciaArray as $objReferencia) {
					$objListItem = new QListItem($objReferencia->__toString(), $objReferencia->Id);
					if (($this->objComandoGrade->Referencia) && ($this->objComandoGrade->Referencia->Id == $objReferencia->Id))
						$objListItem->Selected = true;
					$this->lstReferencia->AddItem($objListItem);
				}
			}
			if ($this->lblReferenciaId) $this->lblReferenciaId->Text = ($this->objComandoGrade->Referencia) ? $this->objComandoGrade->Referencia->__toString() : null;

			if ($this->lstTamanho) {
					$this->lstTamanho->RemoveAllItems();
				if (!$this->blnEditMode)
					$this->lstTamanho->AddItem(QApplication::Translate('- Select One -'), null);
				$objTamanhoArray = Tamanho::LoadAll();
				if ($objTamanhoArray) foreach ($objTamanhoArray as $objTamanho) {
					$objListItem = new QListItem($objTamanho->__toString(), $objTamanho->Id);
					if (($this->objComandoGrade->Tamanho) && ($this->objComandoGrade->Tamanho->Id == $objTamanho->Id))
						$objListItem->Selected = true;
					$this->lstTamanho->AddItem($objListItem);
				}
			}
			if ($this->lblTamanhoId) $this->lblTamanhoId->Text = ($this->objComandoGrade->Tamanho) ? $this->objComandoGrade->Tamanho->__toString() : null;

			if ($this->lstComandoTecidoPeca) {
					$this->lstComandoTecidoPeca->RemoveAllItems();
				if (!$this->blnEditMode)
					$this->lstComandoTecidoPeca->AddItem(QApplication::Translate('- Select One -'), null);
				$objComandoTecidoPecaArray = ComandoTecidoPeca::LoadAll();
				if ($objComandoTecidoPecaArray) foreach ($objComandoTecidoPecaArray as $objComandoTecidoPeca) {
					$objListItem = new QListItem($objComandoTecidoPeca->__toString(), $objComandoTecidoPeca->Id);
					if (($this->objComandoGrade->ComandoTecidoPeca) && ($this->objComandoGrade->ComandoTecidoPeca->Id == $objComandoTecidoPeca->Id))
						$objListItem->Selected = true;
					$this->lstComandoTecidoPeca->AddItem($objListItem);
				}
			}
			if ($this->lblComandoTecidoPecaId) $this->lblComandoTecidoPecaId->Text = ($this->objComandoGrade->ComandoTecidoPeca) ? $this->objComandoGrade->ComandoTecidoPeca->__toString() : null;

			if ($this->txtQuantidadeRisco) $this->txtQuantidadeRisco->Text = $this->objComandoGrade->QuantidadeRisco;
			if ($this->lblQuantidadeRisco) $this->lblQuantidadeRisco->Text = $this->objComandoGrade->QuantidadeRisco;

			if ($this->chkMeiaRisco) $this->chkMeiaRisco->Checked = $this->objComandoGrade->MeiaRisco;
			if ($this->lblMeiaRisco) $this->lblMeiaRisco->Text = ($this->objComandoGrade->MeiaRisco) ? QApplication::Translate('Yes') : QApplication::Translate('No');

			if ($this->txtQuantidadeReal) $this->txtQuantidadeReal->Text = $this->objComandoGrade->QuantidadeReal;
			if ($this->lblQuantidadeReal) $this->lblQuantidadeReal->Text = $this->objComandoGrade->QuantidadeReal;

			if ($this->txtPeso) $this->txtPeso->Text = $this->objComandoGrade->Peso;
			if ($this->lblPeso) $this->lblPeso->Text = $this->objComandoGrade->Peso;

			if ($this->lstBalancoPecasAsOrdemProducaoGrade) {
				$this->lstBalancoPecasAsOrdemProducaoGrade->RemoveAllItems();
				$this->lstBalancoPecasAsOrdemProducaoGrade->AddItem(QApplication::Translate('- Select One -'), null);
				$objBalancoPecasArray = BalancoPecas::LoadAll();
				if ($objBalancoPecasArray) foreach ($objBalancoPecasArray as $objBalancoPecas) {
					$objListItem = new QListItem($objBalancoPecas->__toString(), $objBalancoPecas->Id);
					if ($objBalancoPecas->OrdemProducaoGradeId == $this->objComandoGrade->Id)
						$objListItem->Selected = true;
					$this->lstBalancoPecasAsOrdemProducaoGrade->AddItem($objListItem);
				}
				// Because BalancoPecas's BalancoPecasAsOrdemProducaoGrade is not null, if a value is already selected, it cannot be changed.
				if ($this->lstBalancoPecasAsOrdemProducaoGrade->SelectedValue)
					$this->lstBalancoPecasAsOrdemProducaoGrade->Enabled = false;
				else
					$this->lstBalancoPecasAsOrdemProducaoGrade->Enabled = true;
			}
			if ($this->lblBalancoPecasAsOrdemProducaoGrade) $this->lblBalancoPecasAsOrdemProducaoGrade->Text = ($this->objComandoGrade->BalancoPecasAsOrdemProducaoGrade) ? $this->objComandoGrade->BalancoPecasAsOrdemProducaoGrade->__toString() : null;

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC COMANDOGRADE OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's ComandoGrade instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveComandoGrade() {
			try {
				// Update any fields for controls that have been created
				if ($this->lstReferencia) $this->objComandoGrade->ReferenciaId = $this->lstReferencia->SelectedValue;
				if ($this->lstTamanho) $this->objComandoGrade->TamanhoId = $this->lstTamanho->SelectedValue;
				if ($this->lstComandoTecidoPeca) $this->objComandoGrade->ComandoTecidoPecaId = $this->lstComandoTecidoPeca->SelectedValue;
				if ($this->txtQuantidadeRisco) $this->objComandoGrade->QuantidadeRisco = $this->txtQuantidadeRisco->Text;
				if ($this->chkMeiaRisco) $this->objComandoGrade->MeiaRisco = $this->chkMeiaRisco->Checked;
				if ($this->txtQuantidadeReal) $this->objComandoGrade->QuantidadeReal = $this->txtQuantidadeReal->Text;
				if ($this->txtPeso) $this->objComandoGrade->Peso = $this->txtPeso->Text;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it
				if ($this->lstBalancoPecasAsOrdemProducaoGrade) $this->objComandoGrade->BalancoPecasAsOrdemProducaoGrade = BalancoPecas::Load($this->lstBalancoPecasAsOrdemProducaoGrade->SelectedValue);

				// Save the ComandoGrade object
				$this->objComandoGrade->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's ComandoGrade instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteComandoGrade() {
			$this->objComandoGrade->Delete();
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
				case 'ComandoGrade': return $this->objComandoGrade;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to ComandoGrade fields -- will be created dynamically if not yet created
				case 'IdControl':
					if (!$this->lblId) return $this->lblId_Create();
					return $this->lblId;
				case 'IdLabel':
					if (!$this->lblId) return $this->lblId_Create();
					return $this->lblId;
				case 'ReferenciaIdControl':
					if (!$this->lstReferencia) return $this->lstReferencia_Create();
					return $this->lstReferencia;
				case 'ReferenciaIdLabel':
					if (!$this->lblReferenciaId) return $this->lblReferenciaId_Create();
					return $this->lblReferenciaId;
				case 'TamanhoIdControl':
					if (!$this->lstTamanho) return $this->lstTamanho_Create();
					return $this->lstTamanho;
				case 'TamanhoIdLabel':
					if (!$this->lblTamanhoId) return $this->lblTamanhoId_Create();
					return $this->lblTamanhoId;
				case 'ComandoTecidoPecaIdControl':
					if (!$this->lstComandoTecidoPeca) return $this->lstComandoTecidoPeca_Create();
					return $this->lstComandoTecidoPeca;
				case 'ComandoTecidoPecaIdLabel':
					if (!$this->lblComandoTecidoPecaId) return $this->lblComandoTecidoPecaId_Create();
					return $this->lblComandoTecidoPecaId;
				case 'QuantidadeRiscoControl':
					if (!$this->txtQuantidadeRisco) return $this->txtQuantidadeRisco_Create();
					return $this->txtQuantidadeRisco;
				case 'QuantidadeRiscoLabel':
					if (!$this->lblQuantidadeRisco) return $this->lblQuantidadeRisco_Create();
					return $this->lblQuantidadeRisco;
				case 'MeiaRiscoControl':
					if (!$this->chkMeiaRisco) return $this->chkMeiaRisco_Create();
					return $this->chkMeiaRisco;
				case 'MeiaRiscoLabel':
					if (!$this->lblMeiaRisco) return $this->lblMeiaRisco_Create();
					return $this->lblMeiaRisco;
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
				case 'BalancoPecasAsOrdemProducaoGradeControl':
					if (!$this->lstBalancoPecasAsOrdemProducaoGrade) return $this->lstBalancoPecasAsOrdemProducaoGrade_Create();
					return $this->lstBalancoPecasAsOrdemProducaoGrade;
				case 'BalancoPecasAsOrdemProducaoGradeLabel':
					if (!$this->lblBalancoPecasAsOrdemProducaoGrade) return $this->lblBalancoPecasAsOrdemProducaoGrade_Create();
					return $this->lblBalancoPecasAsOrdemProducaoGrade;
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
					// Controls that point to ComandoGrade fields
					case 'IdControl':
						return ($this->lblId = QType::Cast($mixValue, 'QControl'));
					case 'ReferenciaIdControl':
						return ($this->lstReferencia = QType::Cast($mixValue, 'QControl'));
					case 'TamanhoIdControl':
						return ($this->lstTamanho = QType::Cast($mixValue, 'QControl'));
					case 'ComandoTecidoPecaIdControl':
						return ($this->lstComandoTecidoPeca = QType::Cast($mixValue, 'QControl'));
					case 'QuantidadeRiscoControl':
						return ($this->txtQuantidadeRisco = QType::Cast($mixValue, 'QControl'));
					case 'MeiaRiscoControl':
						return ($this->chkMeiaRisco = QType::Cast($mixValue, 'QControl'));
					case 'QuantidadeRealControl':
						return ($this->txtQuantidadeReal = QType::Cast($mixValue, 'QControl'));
					case 'PesoControl':
						return ($this->txtPeso = QType::Cast($mixValue, 'QControl'));
					case 'BalancoPecasAsOrdemProducaoGradeControl':
						return ($this->lstBalancoPecasAsOrdemProducaoGrade = QType::Cast($mixValue, 'QControl'));
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