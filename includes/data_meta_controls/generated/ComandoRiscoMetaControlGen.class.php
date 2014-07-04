<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the ComandoRisco class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single ComandoRisco object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a ComandoRiscoMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 * 
	 * @package My Application
	 * @subpackage MetaControls
	 * property-read ComandoRisco $ComandoRisco the actual ComandoRisco data class being edited
	 * property QLabel $IdControl
	 * property-read QLabel $IdLabel
	 * property QListBox $ComandoIdControl
	 * property-read QLabel $ComandoIdLabel
	 * property QTextBox $ReferenciaControl
	 * property-read QLabel $ReferenciaLabel
	 * property QListBox $TamanhoIdControl
	 * property-read QLabel $TamanhoIdLabel
	 * property QIntegerTextBox $QuantidadeRiscoControl
	 * property-read QLabel $QuantidadeRiscoLabel
	 * property QCheckBox $MeiaRiscoControl
	 * property-read QLabel $MeiaRiscoLabel
	 * property QListBox $BalancoPecasAsOrdemProducaoGradeControl
	 * property-read QLabel $BalancoPecasAsOrdemProducaoGradeLabel
	 * property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class ComandoRiscoMetaControlGen extends QBaseClass {
		// General Variables
		/**
		 * @var ComandoRisco objComandoRisco
		 * @access protected
		 */
		protected $objComandoRisco;

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

		// Controls that allow the editing of ComandoRisco's individual data fields
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

        /**
         * @var QListBox lstTamanho;
         * @access protected
         */
		protected $lstTamanho;

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


		// Controls that allow the viewing of ComandoRisco's individual data fields
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

        /**
         * @var QLabel lblTamanhoId
         * @access protected
         */
		protected $lblTamanhoId;

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
		 * ComandoRiscoMetaControl to edit a single ComandoRisco object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single ComandoRisco object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this ComandoRiscoMetaControl
		 * @param ComandoRisco $objComandoRisco new or existing ComandoRisco object
		 */
		 public function __construct($objParentObject, ComandoRisco $objComandoRisco) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this ComandoRiscoMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked ComandoRisco object
			$this->objComandoRisco = $objComandoRisco;

			// Figure out if we're Editing or Creating New
			if ($this->objComandoRisco->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this ComandoRiscoMetaControl
		 * @param integer $intId primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing ComandoRisco object creation - defaults to CreateOrEdit
 		 * @return ComandoRiscoMetaControl
		 */
		public static function Create($objParentObject, $intId = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intId)) {
				$objComandoRisco = ComandoRisco::Load($intId);

				// ComandoRisco was found -- return it!
				if ($objComandoRisco)
					return new ComandoRiscoMetaControl($objParentObject, $objComandoRisco);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a ComandoRisco object with PK arguments: ' . $intId);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new ComandoRiscoMetaControl($objParentObject, new ComandoRisco());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this ComandoRiscoMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing ComandoRisco object creation - defaults to CreateOrEdit
		 * @return ComandoRiscoMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intId = QApplication::PathInfo(0);
			return ComandoRiscoMetaControl::Create($objParentObject, $intId, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this ComandoRiscoMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing ComandoRisco object creation - defaults to CreateOrEdit
		 * @return ComandoRiscoMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intId = QApplication::QueryString('intId');
			return ComandoRiscoMetaControl::Create($objParentObject, $intId, $intCreateType);
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
				$this->lblId->Text = $this->objComandoRisco->Id;
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
				if (($this->objComandoRisco->Comando) && ($this->objComandoRisco->Comando->Id == $objComando->Id))
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
			$this->lblComandoId->Text = ($this->objComandoRisco->Comando) ? $this->objComandoRisco->Comando->__toString() : null;
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
			$this->txtReferencia->Text = $this->objComandoRisco->Referencia;
			$this->txtReferencia->Required = true;
			$this->txtReferencia->MaxLength = ComandoRisco::ReferenciaMaxLength;
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
			$this->lblReferencia->Text = $this->objComandoRisco->Referencia;
			$this->lblReferencia->Required = true;
			return $this->lblReferencia;
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
				if (($this->objComandoRisco->Tamanho) && ($this->objComandoRisco->Tamanho->Id == $objTamanho->Id))
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
			$this->lblTamanhoId->Text = ($this->objComandoRisco->Tamanho) ? $this->objComandoRisco->Tamanho->__toString() : null;
			$this->lblTamanhoId->Required = true;
			return $this->lblTamanhoId;
		}

		/**
		 * Create and setup QIntegerTextBox txtQuantidadeRisco
		 * @param string $strControlId optional ControlId to use
		 * @return QIntegerTextBox
		 */
		public function txtQuantidadeRisco_Create($strControlId = null) {
			$this->txtQuantidadeRisco = new QIntegerTextBox($this->objParentObject, $strControlId);
			$this->txtQuantidadeRisco->Name = QApplication::Translate('Quantidade Risco');
			$this->txtQuantidadeRisco->Text = $this->objComandoRisco->QuantidadeRisco;
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
			$this->lblQuantidadeRisco->Text = $this->objComandoRisco->QuantidadeRisco;
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
			$this->chkMeiaRisco->Checked = $this->objComandoRisco->MeiaRisco;
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
			$this->lblMeiaRisco->Text = ($this->objComandoRisco->MeiaRisco) ? QApplication::Translate('Yes') : QApplication::Translate('No');
			return $this->lblMeiaRisco;
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
				if ($objBalancoPecas->OrdemProducaoGradeId == $this->objComandoRisco->Id)
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
			$this->lblBalancoPecasAsOrdemProducaoGrade->Text = ($this->objComandoRisco->BalancoPecasAsOrdemProducaoGrade) ? $this->objComandoRisco->BalancoPecasAsOrdemProducaoGrade->__toString() : null;
			return $this->lblBalancoPecasAsOrdemProducaoGrade;
		}



		/**
		 * Refresh this MetaControl with Data from the local ComandoRisco object.
		 * @param boolean $blnReload reload ComandoRisco from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objComandoRisco->Reload();

			if ($this->lblId) if ($this->blnEditMode) $this->lblId->Text = $this->objComandoRisco->Id;

			if ($this->lstComando) {
					$this->lstComando->RemoveAllItems();
				if (!$this->blnEditMode)
					$this->lstComando->AddItem(QApplication::Translate('- Select One -'), null);
				$objComandoArray = Comando::LoadAll();
				if ($objComandoArray) foreach ($objComandoArray as $objComando) {
					$objListItem = new QListItem($objComando->__toString(), $objComando->Id);
					if (($this->objComandoRisco->Comando) && ($this->objComandoRisco->Comando->Id == $objComando->Id))
						$objListItem->Selected = true;
					$this->lstComando->AddItem($objListItem);
				}
			}
			if ($this->lblComandoId) $this->lblComandoId->Text = ($this->objComandoRisco->Comando) ? $this->objComandoRisco->Comando->__toString() : null;

			if ($this->txtReferencia) $this->txtReferencia->Text = $this->objComandoRisco->Referencia;
			if ($this->lblReferencia) $this->lblReferencia->Text = $this->objComandoRisco->Referencia;

			if ($this->lstTamanho) {
					$this->lstTamanho->RemoveAllItems();
				if (!$this->blnEditMode)
					$this->lstTamanho->AddItem(QApplication::Translate('- Select One -'), null);
				$objTamanhoArray = Tamanho::LoadAll();
				if ($objTamanhoArray) foreach ($objTamanhoArray as $objTamanho) {
					$objListItem = new QListItem($objTamanho->__toString(), $objTamanho->Id);
					if (($this->objComandoRisco->Tamanho) && ($this->objComandoRisco->Tamanho->Id == $objTamanho->Id))
						$objListItem->Selected = true;
					$this->lstTamanho->AddItem($objListItem);
				}
			}
			if ($this->lblTamanhoId) $this->lblTamanhoId->Text = ($this->objComandoRisco->Tamanho) ? $this->objComandoRisco->Tamanho->__toString() : null;

			if ($this->txtQuantidadeRisco) $this->txtQuantidadeRisco->Text = $this->objComandoRisco->QuantidadeRisco;
			if ($this->lblQuantidadeRisco) $this->lblQuantidadeRisco->Text = $this->objComandoRisco->QuantidadeRisco;

			if ($this->chkMeiaRisco) $this->chkMeiaRisco->Checked = $this->objComandoRisco->MeiaRisco;
			if ($this->lblMeiaRisco) $this->lblMeiaRisco->Text = ($this->objComandoRisco->MeiaRisco) ? QApplication::Translate('Yes') : QApplication::Translate('No');

			if ($this->lstBalancoPecasAsOrdemProducaoGrade) {
				$this->lstBalancoPecasAsOrdemProducaoGrade->RemoveAllItems();
				$this->lstBalancoPecasAsOrdemProducaoGrade->AddItem(QApplication::Translate('- Select One -'), null);
				$objBalancoPecasArray = BalancoPecas::LoadAll();
				if ($objBalancoPecasArray) foreach ($objBalancoPecasArray as $objBalancoPecas) {
					$objListItem = new QListItem($objBalancoPecas->__toString(), $objBalancoPecas->Id);
					if ($objBalancoPecas->OrdemProducaoGradeId == $this->objComandoRisco->Id)
						$objListItem->Selected = true;
					$this->lstBalancoPecasAsOrdemProducaoGrade->AddItem($objListItem);
				}
				// Because BalancoPecas's BalancoPecasAsOrdemProducaoGrade is not null, if a value is already selected, it cannot be changed.
				if ($this->lstBalancoPecasAsOrdemProducaoGrade->SelectedValue)
					$this->lstBalancoPecasAsOrdemProducaoGrade->Enabled = false;
				else
					$this->lstBalancoPecasAsOrdemProducaoGrade->Enabled = true;
			}
			if ($this->lblBalancoPecasAsOrdemProducaoGrade) $this->lblBalancoPecasAsOrdemProducaoGrade->Text = ($this->objComandoRisco->BalancoPecasAsOrdemProducaoGrade) ? $this->objComandoRisco->BalancoPecasAsOrdemProducaoGrade->__toString() : null;

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC COMANDORISCO OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's ComandoRisco instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveComandoRisco() {
			try {
				// Update any fields for controls that have been created
				if ($this->lstComando) $this->objComandoRisco->ComandoId = $this->lstComando->SelectedValue;
				if ($this->txtReferencia) $this->objComandoRisco->Referencia = $this->txtReferencia->Text;
				if ($this->lstTamanho) $this->objComandoRisco->TamanhoId = $this->lstTamanho->SelectedValue;
				if ($this->txtQuantidadeRisco) $this->objComandoRisco->QuantidadeRisco = $this->txtQuantidadeRisco->Text;
				if ($this->chkMeiaRisco) $this->objComandoRisco->MeiaRisco = $this->chkMeiaRisco->Checked;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it
				if ($this->lstBalancoPecasAsOrdemProducaoGrade) $this->objComandoRisco->BalancoPecasAsOrdemProducaoGrade = BalancoPecas::Load($this->lstBalancoPecasAsOrdemProducaoGrade->SelectedValue);

				// Save the ComandoRisco object
				$this->objComandoRisco->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's ComandoRisco instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteComandoRisco() {
			$this->objComandoRisco->Delete();
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
				case 'ComandoRisco': return $this->objComandoRisco;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to ComandoRisco fields -- will be created dynamically if not yet created
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
				case 'TamanhoIdControl':
					if (!$this->lstTamanho) return $this->lstTamanho_Create();
					return $this->lstTamanho;
				case 'TamanhoIdLabel':
					if (!$this->lblTamanhoId) return $this->lblTamanhoId_Create();
					return $this->lblTamanhoId;
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
					// Controls that point to ComandoRisco fields
					case 'IdControl':
						return ($this->lblId = QType::Cast($mixValue, 'QControl'));
					case 'ComandoIdControl':
						return ($this->lstComando = QType::Cast($mixValue, 'QControl'));
					case 'ReferenciaControl':
						return ($this->txtReferencia = QType::Cast($mixValue, 'QControl'));
					case 'TamanhoIdControl':
						return ($this->lstTamanho = QType::Cast($mixValue, 'QControl'));
					case 'QuantidadeRiscoControl':
						return ($this->txtQuantidadeRisco = QType::Cast($mixValue, 'QControl'));
					case 'MeiaRiscoControl':
						return ($this->chkMeiaRisco = QType::Cast($mixValue, 'QControl'));
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