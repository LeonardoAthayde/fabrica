<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the OrdemProducaoGrade class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single OrdemProducaoGrade object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a OrdemProducaoGradeMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 * 
	 * @package My Application
	 * @subpackage MetaControls
	 * property-read OrdemProducaoGrade $OrdemProducaoGrade the actual OrdemProducaoGrade data class being edited
	 * property QLabel $IdControl
	 * property-read QLabel $IdLabel
	 * property QListBox $CorIdControl
	 * property-read QLabel $CorIdLabel
	 * property QListBox $TamanhoIdControl
	 * property-read QLabel $TamanhoIdLabel
	 * property QIntegerTextBox $QuantidadeControl
	 * property-read QLabel $QuantidadeLabel
	 * property QLabel $DateControl
	 * property-read QLabel $DateLabel
	 * property QListBox $OrdemProducaoIdControl
	 * property-read QLabel $OrdemProducaoIdLabel
	 * property QListBox $BalancoPecasControl
	 * property-read QLabel $BalancoPecasLabel
	 * property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class OrdemProducaoGradeMetaControlGen extends QBaseClass {
		// General Variables
		/**
		 * @var OrdemProducaoGrade objOrdemProducaoGrade
		 * @access protected
		 */
		protected $objOrdemProducaoGrade;

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

		// Controls that allow the editing of OrdemProducaoGrade's individual data fields
        /**
         * @var QLabel lblId;
         * @access protected
         */
		protected $lblId;

        /**
         * @var QListBox lstCor;
         * @access protected
         */
		protected $lstCor;

        /**
         * @var QListBox lstTamanho;
         * @access protected
         */
		protected $lstTamanho;

        /**
         * @var QIntegerTextBox txtQuantidade;
         * @access protected
         */
		protected $txtQuantidade;

        /**
         * @var QLabel lblDate;
         * @access protected
         */
		protected $lblDate;

        /**
         * @var QListBox lstOrdemProducao;
         * @access protected
         */
		protected $lstOrdemProducao;


		// Controls that allow the viewing of OrdemProducaoGrade's individual data fields
        /**
         * @var QLabel lblCorId
         * @access protected
         */
		protected $lblCorId;

        /**
         * @var QLabel lblTamanhoId
         * @access protected
         */
		protected $lblTamanhoId;

        /**
         * @var QLabel lblQuantidade
         * @access protected
         */
		protected $lblQuantidade;

        /**
         * @var QLabel lblOrdemProducaoId
         * @access protected
         */
		protected $lblOrdemProducaoId;


		// QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References
        /**
         * @var QListBox lstBalancoPecas
         * @access protected
         */
		protected $lstBalancoPecas;


		// QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References
        /**
         * @var QLabel lblBalancoPecas
         * @access protected
         */
		protected $lblBalancoPecas;



		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * OrdemProducaoGradeMetaControl to edit a single OrdemProducaoGrade object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single OrdemProducaoGrade object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this OrdemProducaoGradeMetaControl
		 * @param OrdemProducaoGrade $objOrdemProducaoGrade new or existing OrdemProducaoGrade object
		 */
		 public function __construct($objParentObject, OrdemProducaoGrade $objOrdemProducaoGrade) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this OrdemProducaoGradeMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked OrdemProducaoGrade object
			$this->objOrdemProducaoGrade = $objOrdemProducaoGrade;

			// Figure out if we're Editing or Creating New
			if ($this->objOrdemProducaoGrade->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this OrdemProducaoGradeMetaControl
		 * @param integer $intId primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing OrdemProducaoGrade object creation - defaults to CreateOrEdit
 		 * @return OrdemProducaoGradeMetaControl
		 */
		public static function Create($objParentObject, $intId = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intId)) {
				$objOrdemProducaoGrade = OrdemProducaoGrade::Load($intId);

				// OrdemProducaoGrade was found -- return it!
				if ($objOrdemProducaoGrade)
					return new OrdemProducaoGradeMetaControl($objParentObject, $objOrdemProducaoGrade);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a OrdemProducaoGrade object with PK arguments: ' . $intId);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new OrdemProducaoGradeMetaControl($objParentObject, new OrdemProducaoGrade());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this OrdemProducaoGradeMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing OrdemProducaoGrade object creation - defaults to CreateOrEdit
		 * @return OrdemProducaoGradeMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intId = QApplication::PathInfo(0);
			return OrdemProducaoGradeMetaControl::Create($objParentObject, $intId, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this OrdemProducaoGradeMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing OrdemProducaoGrade object creation - defaults to CreateOrEdit
		 * @return OrdemProducaoGradeMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intId = QApplication::QueryString('intId');
			return OrdemProducaoGradeMetaControl::Create($objParentObject, $intId, $intCreateType);
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
				$this->lblId->Text = $this->objOrdemProducaoGrade->Id;
			else
				$this->lblId->Text = 'N/A';
			return $this->lblId;
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
			$this->lstCor->AddItem(QApplication::Translate('- Select One -'), null);

			// Setup and perform the Query
			if (is_null($objCondition)) $objCondition = QQ::All();
			$objCorCursor = Cor::QueryCursor($objCondition, $objOptionalClauses);

			// Iterate through the Cursor
			while ($objCor = Cor::InstantiateCursor($objCorCursor)) {
				$objListItem = new QListItem($objCor->__toString(), $objCor->Id);
				if (($this->objOrdemProducaoGrade->Cor) && ($this->objOrdemProducaoGrade->Cor->Id == $objCor->Id))
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
			$this->lblCorId->Text = ($this->objOrdemProducaoGrade->Cor) ? $this->objOrdemProducaoGrade->Cor->__toString() : null;
			return $this->lblCorId;
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
			$this->lstTamanho->AddItem(QApplication::Translate('- Select One -'), null);

			// Setup and perform the Query
			if (is_null($objCondition)) $objCondition = QQ::All();
			$objTamanhoCursor = Tamanho::QueryCursor($objCondition, $objOptionalClauses);

			// Iterate through the Cursor
			while ($objTamanho = Tamanho::InstantiateCursor($objTamanhoCursor)) {
				$objListItem = new QListItem($objTamanho->__toString(), $objTamanho->Id);
				if (($this->objOrdemProducaoGrade->Tamanho) && ($this->objOrdemProducaoGrade->Tamanho->Id == $objTamanho->Id))
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
			$this->lblTamanhoId->Text = ($this->objOrdemProducaoGrade->Tamanho) ? $this->objOrdemProducaoGrade->Tamanho->__toString() : null;
			return $this->lblTamanhoId;
		}

		/**
		 * Create and setup QIntegerTextBox txtQuantidade
		 * @param string $strControlId optional ControlId to use
		 * @return QIntegerTextBox
		 */
		public function txtQuantidade_Create($strControlId = null) {
			$this->txtQuantidade = new QIntegerTextBox($this->objParentObject, $strControlId);
			$this->txtQuantidade->Name = QApplication::Translate('Quantidade');
			$this->txtQuantidade->Text = $this->objOrdemProducaoGrade->Quantidade;
			$this->txtQuantidade->Required = true;
			return $this->txtQuantidade;
		}

		/**
		 * Create and setup QLabel lblQuantidade
		 * @param string $strControlId optional ControlId to use
		 * @param string $strFormat optional sprintf format to use
		 * @return QLabel
		 */
		public function lblQuantidade_Create($strControlId = null, $strFormat = null) {
			$this->lblQuantidade = new QLabel($this->objParentObject, $strControlId);
			$this->lblQuantidade->Name = QApplication::Translate('Quantidade');
			$this->lblQuantidade->Text = $this->objOrdemProducaoGrade->Quantidade;
			$this->lblQuantidade->Required = true;
			$this->lblQuantidade->Format = $strFormat;
			return $this->lblQuantidade;
		}

		/**
		 * Create and setup QLabel lblDate
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblDate_Create($strControlId = null) {
			$this->lblDate = new QLabel($this->objParentObject, $strControlId);
			$this->lblDate->Name = QApplication::Translate('Date');
			if ($this->blnEditMode)
				$this->lblDate->Text = $this->objOrdemProducaoGrade->Date;
			else
				$this->lblDate->Text = 'N/A';
			return $this->lblDate;
		}

		/**
		 * Create and setup QListBox lstOrdemProducao
		 * @param string $strControlId optional ControlId to use
		 * @param QQCondition $objConditions override the default condition of QQ::All() to the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause object or array of QQClause objects for the query
		 * @return QListBox
		 */
		public function lstOrdemProducao_Create($strControlId = null, QQCondition $objCondition = null, $objOptionalClauses = null) {
			$this->lstOrdemProducao = new QListBox($this->objParentObject, $strControlId);
			$this->lstOrdemProducao->Name = QApplication::Translate('Ordem Producao');
			$this->lstOrdemProducao->Required = true;
			if (!$this->blnEditMode)
				$this->lstOrdemProducao->AddItem(QApplication::Translate('- Select One -'), null);

			// Setup and perform the Query
			if (is_null($objCondition)) $objCondition = QQ::All();
			$objOrdemProducaoCursor = OrdemProducao::QueryCursor($objCondition, $objOptionalClauses);

			// Iterate through the Cursor
			while ($objOrdemProducao = OrdemProducao::InstantiateCursor($objOrdemProducaoCursor)) {
				$objListItem = new QListItem($objOrdemProducao->__toString(), $objOrdemProducao->Id);
				if (($this->objOrdemProducaoGrade->OrdemProducao) && ($this->objOrdemProducaoGrade->OrdemProducao->Id == $objOrdemProducao->Id))
					$objListItem->Selected = true;
				$this->lstOrdemProducao->AddItem($objListItem);
			}

			// Return the QListBox
			return $this->lstOrdemProducao;
		}

		/**
		 * Create and setup QLabel lblOrdemProducaoId
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblOrdemProducaoId_Create($strControlId = null) {
			$this->lblOrdemProducaoId = new QLabel($this->objParentObject, $strControlId);
			$this->lblOrdemProducaoId->Name = QApplication::Translate('Ordem Producao');
			$this->lblOrdemProducaoId->Text = ($this->objOrdemProducaoGrade->OrdemProducao) ? $this->objOrdemProducaoGrade->OrdemProducao->__toString() : null;
			$this->lblOrdemProducaoId->Required = true;
			return $this->lblOrdemProducaoId;
		}

		/**
		 * Create and setup QListBox lstBalancoPecas
		 * @param string $strControlId optional ControlId to use
		 * @param QQCondition $objConditions override the default condition of QQ::All() to the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause object or array of QQClause objects for the query
		 * @return QListBox
		 */
		public function lstBalancoPecas_Create($strControlId = null, QQCondition $objCondition = null, $objOptionalClauses = null) {
			$this->lstBalancoPecas = new QListBox($this->objParentObject, $strControlId);
			$this->lstBalancoPecas->Name = QApplication::Translate('Balanco Pecas');
			$this->lstBalancoPecas->AddItem(QApplication::Translate('- Select One -'), null);

			// Setup and perform the Query
			if (is_null($objCondition)) $objCondition = QQ::All();
			$objBalancoPecasCursor = BalancoPecas::QueryCursor($objCondition, $objOptionalClauses);

			// Iterate through the Cursor
			while ($objBalancoPecas = BalancoPecas::InstantiateCursor($objBalancoPecasCursor)) {
				$objListItem = new QListItem($objBalancoPecas->__toString(), $objBalancoPecas->Id);
				if ($objBalancoPecas->OrdemProducaoGradeId == $this->objOrdemProducaoGrade->Id)
					$objListItem->Selected = true;
				$this->lstBalancoPecas->AddItem($objListItem);
			}

			// Because BalancoPecas's BalancoPecas is not null, if a value is already selected, it cannot be changed.
			if ($this->lstBalancoPecas->SelectedValue)
				$this->lstBalancoPecas->Enabled = false;

			// Return the QListBox
			return $this->lstBalancoPecas;
		}

		/**
		 * Create and setup QLabel lblBalancoPecas
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblBalancoPecas_Create($strControlId = null) {
			$this->lblBalancoPecas = new QLabel($this->objParentObject, $strControlId);
			$this->lblBalancoPecas->Name = QApplication::Translate('Balanco Pecas');
			$this->lblBalancoPecas->Text = ($this->objOrdemProducaoGrade->BalancoPecas) ? $this->objOrdemProducaoGrade->BalancoPecas->__toString() : null;
			return $this->lblBalancoPecas;
		}



		/**
		 * Refresh this MetaControl with Data from the local OrdemProducaoGrade object.
		 * @param boolean $blnReload reload OrdemProducaoGrade from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objOrdemProducaoGrade->Reload();

			if ($this->lblId) if ($this->blnEditMode) $this->lblId->Text = $this->objOrdemProducaoGrade->Id;

			if ($this->lstCor) {
					$this->lstCor->RemoveAllItems();
				$this->lstCor->AddItem(QApplication::Translate('- Select One -'), null);
				$objCorArray = Cor::LoadAll();
				if ($objCorArray) foreach ($objCorArray as $objCor) {
					$objListItem = new QListItem($objCor->__toString(), $objCor->Id);
					if (($this->objOrdemProducaoGrade->Cor) && ($this->objOrdemProducaoGrade->Cor->Id == $objCor->Id))
						$objListItem->Selected = true;
					$this->lstCor->AddItem($objListItem);
				}
			}
			if ($this->lblCorId) $this->lblCorId->Text = ($this->objOrdemProducaoGrade->Cor) ? $this->objOrdemProducaoGrade->Cor->__toString() : null;

			if ($this->lstTamanho) {
					$this->lstTamanho->RemoveAllItems();
				$this->lstTamanho->AddItem(QApplication::Translate('- Select One -'), null);
				$objTamanhoArray = Tamanho::LoadAll();
				if ($objTamanhoArray) foreach ($objTamanhoArray as $objTamanho) {
					$objListItem = new QListItem($objTamanho->__toString(), $objTamanho->Id);
					if (($this->objOrdemProducaoGrade->Tamanho) && ($this->objOrdemProducaoGrade->Tamanho->Id == $objTamanho->Id))
						$objListItem->Selected = true;
					$this->lstTamanho->AddItem($objListItem);
				}
			}
			if ($this->lblTamanhoId) $this->lblTamanhoId->Text = ($this->objOrdemProducaoGrade->Tamanho) ? $this->objOrdemProducaoGrade->Tamanho->__toString() : null;

			if ($this->txtQuantidade) $this->txtQuantidade->Text = $this->objOrdemProducaoGrade->Quantidade;
			if ($this->lblQuantidade) $this->lblQuantidade->Text = $this->objOrdemProducaoGrade->Quantidade;

			if ($this->lblDate) if ($this->blnEditMode) $this->lblDate->Text = $this->objOrdemProducaoGrade->Date;

			if ($this->lstOrdemProducao) {
					$this->lstOrdemProducao->RemoveAllItems();
				if (!$this->blnEditMode)
					$this->lstOrdemProducao->AddItem(QApplication::Translate('- Select One -'), null);
				$objOrdemProducaoArray = OrdemProducao::LoadAll();
				if ($objOrdemProducaoArray) foreach ($objOrdemProducaoArray as $objOrdemProducao) {
					$objListItem = new QListItem($objOrdemProducao->__toString(), $objOrdemProducao->Id);
					if (($this->objOrdemProducaoGrade->OrdemProducao) && ($this->objOrdemProducaoGrade->OrdemProducao->Id == $objOrdemProducao->Id))
						$objListItem->Selected = true;
					$this->lstOrdemProducao->AddItem($objListItem);
				}
			}
			if ($this->lblOrdemProducaoId) $this->lblOrdemProducaoId->Text = ($this->objOrdemProducaoGrade->OrdemProducao) ? $this->objOrdemProducaoGrade->OrdemProducao->__toString() : null;

			if ($this->lstBalancoPecas) {
				$this->lstBalancoPecas->RemoveAllItems();
				$this->lstBalancoPecas->AddItem(QApplication::Translate('- Select One -'), null);
				$objBalancoPecasArray = BalancoPecas::LoadAll();
				if ($objBalancoPecasArray) foreach ($objBalancoPecasArray as $objBalancoPecas) {
					$objListItem = new QListItem($objBalancoPecas->__toString(), $objBalancoPecas->Id);
					if ($objBalancoPecas->OrdemProducaoGradeId == $this->objOrdemProducaoGrade->Id)
						$objListItem->Selected = true;
					$this->lstBalancoPecas->AddItem($objListItem);
				}
				// Because BalancoPecas's BalancoPecas is not null, if a value is already selected, it cannot be changed.
				if ($this->lstBalancoPecas->SelectedValue)
					$this->lstBalancoPecas->Enabled = false;
				else
					$this->lstBalancoPecas->Enabled = true;
			}
			if ($this->lblBalancoPecas) $this->lblBalancoPecas->Text = ($this->objOrdemProducaoGrade->BalancoPecas) ? $this->objOrdemProducaoGrade->BalancoPecas->__toString() : null;

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC ORDEMPRODUCAOGRADE OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's OrdemProducaoGrade instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveOrdemProducaoGrade() {
			try {
				// Update any fields for controls that have been created
				if ($this->lstCor) $this->objOrdemProducaoGrade->CorId = $this->lstCor->SelectedValue;
				if ($this->lstTamanho) $this->objOrdemProducaoGrade->TamanhoId = $this->lstTamanho->SelectedValue;
				if ($this->txtQuantidade) $this->objOrdemProducaoGrade->Quantidade = $this->txtQuantidade->Text;
				if ($this->lstOrdemProducao) $this->objOrdemProducaoGrade->OrdemProducaoId = $this->lstOrdemProducao->SelectedValue;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it
				if ($this->lstBalancoPecas) $this->objOrdemProducaoGrade->BalancoPecas = BalancoPecas::Load($this->lstBalancoPecas->SelectedValue);

				// Save the OrdemProducaoGrade object
				$this->objOrdemProducaoGrade->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's OrdemProducaoGrade instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteOrdemProducaoGrade() {
			$this->objOrdemProducaoGrade->Delete();
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
				case 'OrdemProducaoGrade': return $this->objOrdemProducaoGrade;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to OrdemProducaoGrade fields -- will be created dynamically if not yet created
				case 'IdControl':
					if (!$this->lblId) return $this->lblId_Create();
					return $this->lblId;
				case 'IdLabel':
					if (!$this->lblId) return $this->lblId_Create();
					return $this->lblId;
				case 'CorIdControl':
					if (!$this->lstCor) return $this->lstCor_Create();
					return $this->lstCor;
				case 'CorIdLabel':
					if (!$this->lblCorId) return $this->lblCorId_Create();
					return $this->lblCorId;
				case 'TamanhoIdControl':
					if (!$this->lstTamanho) return $this->lstTamanho_Create();
					return $this->lstTamanho;
				case 'TamanhoIdLabel':
					if (!$this->lblTamanhoId) return $this->lblTamanhoId_Create();
					return $this->lblTamanhoId;
				case 'QuantidadeControl':
					if (!$this->txtQuantidade) return $this->txtQuantidade_Create();
					return $this->txtQuantidade;
				case 'QuantidadeLabel':
					if (!$this->lblQuantidade) return $this->lblQuantidade_Create();
					return $this->lblQuantidade;
				case 'DateControl':
					if (!$this->lblDate) return $this->lblDate_Create();
					return $this->lblDate;
				case 'DateLabel':
					if (!$this->lblDate) return $this->lblDate_Create();
					return $this->lblDate;
				case 'OrdemProducaoIdControl':
					if (!$this->lstOrdemProducao) return $this->lstOrdemProducao_Create();
					return $this->lstOrdemProducao;
				case 'OrdemProducaoIdLabel':
					if (!$this->lblOrdemProducaoId) return $this->lblOrdemProducaoId_Create();
					return $this->lblOrdemProducaoId;
				case 'BalancoPecasControl':
					if (!$this->lstBalancoPecas) return $this->lstBalancoPecas_Create();
					return $this->lstBalancoPecas;
				case 'BalancoPecasLabel':
					if (!$this->lblBalancoPecas) return $this->lblBalancoPecas_Create();
					return $this->lblBalancoPecas;
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
					// Controls that point to OrdemProducaoGrade fields
					case 'IdControl':
						return ($this->lblId = QType::Cast($mixValue, 'QControl'));
					case 'CorIdControl':
						return ($this->lstCor = QType::Cast($mixValue, 'QControl'));
					case 'TamanhoIdControl':
						return ($this->lstTamanho = QType::Cast($mixValue, 'QControl'));
					case 'QuantidadeControl':
						return ($this->txtQuantidade = QType::Cast($mixValue, 'QControl'));
					case 'DateControl':
						return ($this->lblDate = QType::Cast($mixValue, 'QControl'));
					case 'OrdemProducaoIdControl':
						return ($this->lstOrdemProducao = QType::Cast($mixValue, 'QControl'));
					case 'BalancoPecasControl':
						return ($this->lstBalancoPecas = QType::Cast($mixValue, 'QControl'));
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