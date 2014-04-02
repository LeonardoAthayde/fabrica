<?php
	/**
	 * The abstract OrdemProducaoGradeGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the OrdemProducaoGrade subclass which
	 * extends this OrdemProducaoGradeGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the OrdemProducaoGrade class.
	 * 
	 * @package My Application
	 * @subpackage GeneratedDataObjects
	 * @property integer $Id the value for intId (Read-Only PK)
	 * @property integer $CorId the value for intCorId 
	 * @property integer $TamanhoId the value for intTamanhoId 
	 * @property integer $Quantidade the value for intQuantidade (Not Null)
	 * @property string $Date the value for strDate (Read-Only Timestamp)
	 * @property integer $OrdemProducaoId the value for intOrdemProducaoId (Not Null)
	 * @property Cor $Cor the value for the Cor object referenced by intCorId 
	 * @property Tamanho $Tamanho the value for the Tamanho object referenced by intTamanhoId 
	 * @property OrdemProducao $OrdemProducao the value for the OrdemProducao object referenced by intOrdemProducaoId (Not Null)
	 * @property BalancoPecas $BalancoPecas the value for the BalancoPecas object that uniquely references this OrdemProducaoGrade
	 * @property BalancoAcoes $_BalancoAcoes the value for the private _objBalancoAcoes (Read-Only) if set due to an expansion on the balanco_acoes.ordem_producao_grade_id reverse relationship
	 * @property BalancoAcoes[] $_BalancoAcoesArray the value for the private _objBalancoAcoesArray (Read-Only) if set due to an ExpandAsArray on the balanco_acoes.ordem_producao_grade_id reverse relationship
	 * @property boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class OrdemProducaoGradeGen extends QBaseClass {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////
		
		/**
		 * Protected member variable that maps to the database PK Identity column ordem_producao_grade.id
		 * @var integer intId
		 */
		protected $intId;
		const IdDefault = null;


		/**
		 * Protected member variable that maps to the database column ordem_producao_grade.cor_id
		 * @var integer intCorId
		 */
		protected $intCorId;
		const CorIdDefault = null;


		/**
		 * Protected member variable that maps to the database column ordem_producao_grade.tamanho_id
		 * @var integer intTamanhoId
		 */
		protected $intTamanhoId;
		const TamanhoIdDefault = null;


		/**
		 * Protected member variable that maps to the database column ordem_producao_grade.quantidade
		 * @var integer intQuantidade
		 */
		protected $intQuantidade;
		const QuantidadeDefault = null;


		/**
		 * Protected member variable that maps to the database column ordem_producao_grade.date
		 * @var string strDate
		 */
		protected $strDate;
		const DateDefault = null;


		/**
		 * Protected member variable that maps to the database column ordem_producao_grade.ordem_producao_id
		 * @var integer intOrdemProducaoId
		 */
		protected $intOrdemProducaoId;
		const OrdemProducaoIdDefault = null;


		/**
		 * Private member variable that stores a reference to a single BalancoAcoes object
		 * (of type BalancoAcoes), if this OrdemProducaoGrade object was restored with
		 * an expansion on the balanco_acoes association table.
		 * @var BalancoAcoes _objBalancoAcoes;
		 */
		private $_objBalancoAcoes;

		/**
		 * Private member variable that stores a reference to an array of BalancoAcoes objects
		 * (of type BalancoAcoes[]), if this OrdemProducaoGrade object was restored with
		 * an ExpandAsArray on the balanco_acoes association table.
		 * @var BalancoAcoes[] _objBalancoAcoesArray;
		 */
		private $_objBalancoAcoesArray = array();

		/**
		 * Protected array of virtual attributes for this object (e.g. extra/other calculated and/or non-object bound
		 * columns from the run-time database query result for this object).  Used by InstantiateDbRow and
		 * GetVirtualAttribute.
		 * @var string[] $__strVirtualAttributeArray
		 */
		protected $__strVirtualAttributeArray = array();

		/**
		 * Protected internal member variable that specifies whether or not this object is Restored from the database.
		 * Used by Save() to determine if Save() should perform a db UPDATE or INSERT.
		 * @var bool __blnRestored;
		 */
		protected $__blnRestored;




		///////////////////////////////
		// PROTECTED MEMBER OBJECTS
		///////////////////////////////

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column ordem_producao_grade.cor_id.
		 *
		 * NOTE: Always use the Cor property getter to correctly retrieve this Cor object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Cor objCor
		 */
		protected $objCor;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column ordem_producao_grade.tamanho_id.
		 *
		 * NOTE: Always use the Tamanho property getter to correctly retrieve this Tamanho object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Tamanho objTamanho
		 */
		protected $objTamanho;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column ordem_producao_grade.ordem_producao_id.
		 *
		 * NOTE: Always use the OrdemProducao property getter to correctly retrieve this OrdemProducao object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var OrdemProducao objOrdemProducao
		 */
		protected $objOrdemProducao;

		/**
		 * Protected member variable that contains the object which points to
		 * this object by the reference in the unique database column balanco_pecas.ordem_producao_grade_id.
		 *
		 * NOTE: Always use the BalancoPecas property getter to correctly retrieve this BalancoPecas object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var BalancoPecas objBalancoPecas
		 */
		protected $objBalancoPecas;
		
		/**
		 * Used internally to manage whether the adjoined BalancoPecas object
		 * needs to be updated on save.
		 * 
		 * NOTE: Do not manually update this value 
		 */
		protected $blnDirtyBalancoPecas;





		///////////////////////////////
		// CLASS-WIDE LOAD AND COUNT METHODS
		///////////////////////////////

		/**
		 * Static method to retrieve the Database object that owns this class.
		 * @return QDatabaseBase reference to the Database object that can query this class
		 */
		public static function GetDatabase() {
			return QApplication::$Database[1];
		}

		/**
		 * Load a OrdemProducaoGrade from PK Info
		 * @param integer $intId
		 * @return OrdemProducaoGrade
		 */
		public static function Load($intId) {
			// Use QuerySingle to Perform the Query
			return OrdemProducaoGrade::QuerySingle(
				QQ::Equal(QQN::OrdemProducaoGrade()->Id, $intId)
			);
		}

		/**
		 * Load all OrdemProducaoGrades
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return OrdemProducaoGrade[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			// Call OrdemProducaoGrade::QueryArray to perform the LoadAll query
			try {
				return OrdemProducaoGrade::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all OrdemProducaoGrades
		 * @return int
		 */
		public static function CountAll() {
			// Call OrdemProducaoGrade::QueryCount to perform the CountAll query
			return OrdemProducaoGrade::QueryCount(QQ::All());
		}




		///////////////////////////////
		// QCODO QUERY-RELATED METHODS
		///////////////////////////////

		/**
		 * Internally called method to assist with calling Qcodo Query for this class
		 * on load methods.
		 * @param QQueryBuilder &$objQueryBuilder the QueryBuilder object that will be created
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause object or array of QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with (sending in null will skip the PrepareStatement step)
		 * @param boolean $blnCountOnly only select a rowcount
		 * @return string the query statement
		 */
		protected static function BuildQueryStatement(&$objQueryBuilder, QQCondition $objConditions, $objOptionalClauses, $mixParameterArray, $blnCountOnly) {
			// Get the Database Object for this Class
			$objDatabase = OrdemProducaoGrade::GetDatabase();

			// Create/Build out the QueryBuilder object with OrdemProducaoGrade-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'ordem_producao_grade');
			OrdemProducaoGrade::GetSelectFields($objQueryBuilder);
			$objQueryBuilder->AddFromItem('ordem_producao_grade');

			// Set "CountOnly" option (if applicable)
			if ($blnCountOnly)
				$objQueryBuilder->SetCountOnlyFlag();

			// Apply Any Conditions
			if ($objConditions)
				try {
					$objConditions->UpdateQueryBuilder($objQueryBuilder);
				} catch (QCallerException $objExc) {
					$objExc->IncrementOffset();
					throw $objExc;
				}

			// Iterate through all the Optional Clauses (if any) and perform accordingly
			if ($objOptionalClauses) {
				if ($objOptionalClauses instanceof QQClause)
					$objOptionalClauses->UpdateQueryBuilder($objQueryBuilder);
				else if (is_array($objOptionalClauses))
					foreach ($objOptionalClauses as $objClause)
						$objClause->UpdateQueryBuilder($objQueryBuilder);
				else
					throw new QCallerException('Optional Clauses must be a QQClause object or an array of QQClause objects');
			}

			// Get the SQL Statement
			$strQuery = $objQueryBuilder->GetStatement();

			// Prepare the Statement with the Query Parameters (if applicable)
			if ($mixParameterArray) {
				if (is_array($mixParameterArray)) {
					if (count($mixParameterArray))
						$strQuery = $objDatabase->PrepareStatement($strQuery, $mixParameterArray);

					// Ensure that there are no other Unresolved Named Parameters
					if (strpos($strQuery, chr(QQNamedValue::DelimiterCode) . '{') !== false)
						throw new QCallerException('Unresolved named parameters in the query');
				} else
					throw new QCallerException('Parameter Array must be an array of name-value parameter pairs');
			}

			// Return the Objects
			return $strQuery;
		}

		/**
		 * Static Qcodo Query method to query for a single OrdemProducaoGrade object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return OrdemProducaoGrade the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = OrdemProducaoGrade::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Instantiate a new OrdemProducaoGrade object and return it

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = OrdemProducaoGrade::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
					if ($objItem) $objToReturn[] = $objItem;
				}

				if (count($objToReturn)) {
					// Since we only want the object to return, lets return the object and not the array.
					return $objToReturn[0];
				} else {
					return null;
				}
			} else {
				// No expands just return the first row
				$objDbRow = $objDbResult->GetNextRow();
				if (is_null($objDbRow)) return null;
				return OrdemProducaoGrade::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcodo Query method to query for an array of OrdemProducaoGrade objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return OrdemProducaoGrade[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = OrdemProducaoGrade::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return OrdemProducaoGrade::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
		}

		/**
		 * Static Qcodo query method to issue a query and get a cursor to progressively fetch its results.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return QDatabaseResultBase the cursor resource instance
		 */
		public static function QueryCursor(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the query statement
			try {
				$strQuery = OrdemProducaoGrade::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the query
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
		
			// Return the results cursor
			$objDbResult->QueryBuilder = $objQueryBuilder;
			return $objDbResult;
		}

		/**
		 * Static Qcodo Query method to query for a count of OrdemProducaoGrade objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = OrdemProducaoGrade::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and return the row_count
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Figure out if the query is using GroupBy
			$blnGrouped = false;

			if ($objOptionalClauses) foreach ($objOptionalClauses as $objClause) {
				if ($objClause instanceof QQGroupBy) {
					$blnGrouped = true;
					break;
				}
			}

			if ($blnGrouped)
				// Groups in this query - return the count of Groups (which is the count of all rows)
				return $objDbResult->CountRows();
			else {
				// No Groups - return the sql-calculated count(*) value
				$strDbRow = $objDbResult->FetchRow();
				return QType::Cast($strDbRow[0], QType::Integer);
			}
		}

/*		public static function QueryArrayCached($strConditions, $mixParameterArray = null) {
			// Get the Database Object for this Class
			$objDatabase = OrdemProducaoGrade::GetDatabase();

			// Lookup the QCache for This Query Statement
			$objCache = new QCache('query', 'ordem_producao_grade_' . serialize($strConditions));
			if (!($strQuery = $objCache->GetData())) {
				// Not Found -- Go ahead and Create/Build out a new QueryBuilder object with OrdemProducaoGrade-specific fields
				$objQueryBuilder = new QQueryBuilder($objDatabase);
				OrdemProducaoGrade::GetSelectFields($objQueryBuilder);
				OrdemProducaoGrade::GetFromFields($objQueryBuilder);

				// Ensure the Passed-in Conditions is a string
				try {
					$strConditions = QType::Cast($strConditions, QType::String);
				} catch (QCallerException $objExc) {
					$objExc->IncrementOffset();
					throw $objExc;
				}

				// Create the Conditions object, and apply it
				$objConditions = eval('return ' . $strConditions . ';');

				// Apply Any Conditions
				if ($objConditions)
					$objConditions->UpdateQueryBuilder($objQueryBuilder);

				// Get the SQL Statement
				$strQuery = $objQueryBuilder->GetStatement();

				// Save the SQL Statement in the Cache
				$objCache->SaveData($strQuery);
			}

			// Prepare the Statement with the Parameters
			if ($mixParameterArray)
				$strQuery = $objDatabase->PrepareStatement($strQuery, $mixParameterArray);

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objDatabase->Query($strQuery);
			return OrdemProducaoGrade::InstantiateDbResult($objDbResult);
		}*/

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this OrdemProducaoGrade
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'ordem_producao_grade';
				$strAliasPrefix = '';
			}

			$objBuilder->AddSelectItem($strTableName, 'id', $strAliasPrefix . 'id');
			$objBuilder->AddSelectItem($strTableName, 'cor_id', $strAliasPrefix . 'cor_id');
			$objBuilder->AddSelectItem($strTableName, 'tamanho_id', $strAliasPrefix . 'tamanho_id');
			$objBuilder->AddSelectItem($strTableName, 'quantidade', $strAliasPrefix . 'quantidade');
			$objBuilder->AddSelectItem($strTableName, 'date', $strAliasPrefix . 'date');
			$objBuilder->AddSelectItem($strTableName, 'ordem_producao_id', $strAliasPrefix . 'ordem_producao_id');
		}




		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a OrdemProducaoGrade from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this OrdemProducaoGrade::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param QDatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $objPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return OrdemProducaoGrade
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $objPreviousItem = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow)
				return null;

			// See if we're doing an array expansion on the previous item
			$strAlias = $strAliasPrefix . 'id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (($strExpandAsArrayNodes) && ($objPreviousItem) &&
				($objPreviousItem->intId == $objDbRow->GetColumn($strAliasName, 'Integer'))) {

				// We are.  Now, prepare to check for ExpandAsArray clauses
				$blnExpandedViaArray = false;
				if (!$strAliasPrefix)
					$strAliasPrefix = 'ordem_producao_grade__';


				$strAlias = $strAliasPrefix . 'balancoacoes__id';
				$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
				if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
					(!is_null($objDbRow->GetColumn($strAliasName)))) {
					if ($intPreviousChildItemCount = count($objPreviousItem->_objBalancoAcoesArray)) {
						$objPreviousChildItem = $objPreviousItem->_objBalancoAcoesArray[$intPreviousChildItemCount - 1];
						$objChildItem = BalancoAcoes::InstantiateDbRow($objDbRow, $strAliasPrefix . 'balancoacoes__', $strExpandAsArrayNodes, $objPreviousChildItem, $strColumnAliasArray);
						if ($objChildItem)
							$objPreviousItem->_objBalancoAcoesArray[] = $objChildItem;
					} else
						$objPreviousItem->_objBalancoAcoesArray[] = BalancoAcoes::InstantiateDbRow($objDbRow, $strAliasPrefix . 'balancoacoes__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
					$blnExpandedViaArray = true;
				}

				// Either return false to signal array expansion, or check-to-reset the Alias prefix and move on
				if ($blnExpandedViaArray)
					return false;
				else if ($strAliasPrefix == 'ordem_producao_grade__')
					$strAliasPrefix = null;
			}

			// Create a new instance of the OrdemProducaoGrade object
			$objToReturn = new OrdemProducaoGrade();
			$objToReturn->__blnRestored = true;

			$strAliasName = array_key_exists($strAliasPrefix . 'id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'id'] : $strAliasPrefix . 'id';
			$objToReturn->intId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'cor_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'cor_id'] : $strAliasPrefix . 'cor_id';
			$objToReturn->intCorId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'tamanho_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'tamanho_id'] : $strAliasPrefix . 'tamanho_id';
			$objToReturn->intTamanhoId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'quantidade', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'quantidade'] : $strAliasPrefix . 'quantidade';
			$objToReturn->intQuantidade = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'date', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'date'] : $strAliasPrefix . 'date';
			$objToReturn->strDate = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'ordem_producao_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'ordem_producao_id'] : $strAliasPrefix . 'ordem_producao_id';
			$objToReturn->intOrdemProducaoId = $objDbRow->GetColumn($strAliasName, 'Integer');

			// Instantiate Virtual Attributes
			foreach ($objDbRow->GetColumnNameArray() as $strColumnName => $mixValue) {
				$strVirtualPrefix = $strAliasPrefix . '__';
				$strVirtualPrefixLength = strlen($strVirtualPrefix);
				if (substr($strColumnName, 0, $strVirtualPrefixLength) == $strVirtualPrefix)
					$objToReturn->__strVirtualAttributeArray[substr($strColumnName, $strVirtualPrefixLength)] = $mixValue;
			}

			// Prepare to Check for Early/Virtual Binding
			if (!$strAliasPrefix)
				$strAliasPrefix = 'ordem_producao_grade__';

			// Check for Cor Early Binding
			$strAlias = $strAliasPrefix . 'cor_id__id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objCor = Cor::InstantiateDbRow($objDbRow, $strAliasPrefix . 'cor_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for Tamanho Early Binding
			$strAlias = $strAliasPrefix . 'tamanho_id__id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objTamanho = Tamanho::InstantiateDbRow($objDbRow, $strAliasPrefix . 'tamanho_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for OrdemProducao Early Binding
			$strAlias = $strAliasPrefix . 'ordem_producao_id__id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objOrdemProducao = OrdemProducao::InstantiateDbRow($objDbRow, $strAliasPrefix . 'ordem_producao_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);


			// Check for BalancoPecas Unique ReverseReference Binding
			$strAlias = $strAliasPrefix . 'balancopecas__id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if ($objDbRow->ColumnExists($strAliasName)) {
				if (!is_null($objDbRow->GetColumn($strAliasName)))
					$objToReturn->objBalancoPecas = BalancoPecas::InstantiateDbRow($objDbRow, $strAliasPrefix . 'balancopecas__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					// We ATTEMPTED to do an Early Bind but the Object Doesn't Exist
					// Let's set to FALSE so that the object knows not to try and re-query again
					$objToReturn->objBalancoPecas = false;
			}



			// Check for BalancoAcoes Virtual Binding
			$strAlias = $strAliasPrefix . 'balancoacoes__id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
					$objToReturn->_objBalancoAcoesArray[] = BalancoAcoes::InstantiateDbRow($objDbRow, $strAliasPrefix . 'balancoacoes__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objBalancoAcoes = BalancoAcoes::InstantiateDbRow($objDbRow, $strAliasPrefix . 'balancoacoes__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate an array of OrdemProducaoGrades from a Database Result
		 * @param QDatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return OrdemProducaoGrade[]
		 */
		public static function InstantiateDbResult(QDatabaseResultBase $objDbResult, $strExpandAsArrayNodes = null, $strColumnAliasArray = null) {
			$objToReturn = array();
			
			if (!$strColumnAliasArray)
				$strColumnAliasArray = array();

			// If blank resultset, then return empty array
			if (!$objDbResult)
				return $objToReturn;

			// Load up the return array with each row
			if ($strExpandAsArrayNodes) {
				$objLastRowItem = null;
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = OrdemProducaoGrade::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objLastRowItem, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
						$objLastRowItem = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = OrdemProducaoGrade::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate a single OrdemProducaoGrade object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return OrdemProducaoGrade next row resulting from the query
		 */
		public static function InstantiateCursor(QDatabaseResultBase $objDbResult) {
			// If blank resultset, then return empty result
			if (!$objDbResult) return null;

			// If empty resultset, then return empty result
			$objDbRow = $objDbResult->GetNextRow();
			if (!$objDbRow) return null;

			// We need the Column Aliases
			$strColumnAliasArray = $objDbResult->QueryBuilder->ColumnAliasArray;
			if (!$strColumnAliasArray) $strColumnAliasArray = array();

			// Pull Expansions (if applicable)
			$strExpandAsArrayNodes = $objDbResult->QueryBuilder->ExpandAsArrayNodes;

			// Load up the return result with a row and return it
			return OrdemProducaoGrade::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, null, $strColumnAliasArray);
		}




		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////
			
		/**
		 * Load a single OrdemProducaoGrade object,
		 * by Id Index(es)
		 * @param integer $intId
		 * @return OrdemProducaoGrade
		*/
		public static function LoadById($intId, $objOptionalClauses = null) {
			return OrdemProducaoGrade::QuerySingle(
				QQ::Equal(QQN::OrdemProducaoGrade()->Id, $intId)
			, $objOptionalClauses
			);
		}
			
		/**
		 * Load an array of OrdemProducaoGrade objects,
		 * by CorId Index(es)
		 * @param integer $intCorId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return OrdemProducaoGrade[]
		*/
		public static function LoadArrayByCorId($intCorId, $objOptionalClauses = null) {
			// Call OrdemProducaoGrade::QueryArray to perform the LoadArrayByCorId query
			try {
				return OrdemProducaoGrade::QueryArray(
					QQ::Equal(QQN::OrdemProducaoGrade()->CorId, $intCorId),
					$objOptionalClauses
					);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count OrdemProducaoGrades
		 * by CorId Index(es)
		 * @param integer $intCorId
		 * @return int
		*/
		public static function CountByCorId($intCorId, $objOptionalClauses = null) {
			// Call OrdemProducaoGrade::QueryCount to perform the CountByCorId query
			return OrdemProducaoGrade::QueryCount(
				QQ::Equal(QQN::OrdemProducaoGrade()->CorId, $intCorId)
			, $objOptionalClauses
			);
		}
			
		/**
		 * Load an array of OrdemProducaoGrade objects,
		 * by TamanhoId Index(es)
		 * @param integer $intTamanhoId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return OrdemProducaoGrade[]
		*/
		public static function LoadArrayByTamanhoId($intTamanhoId, $objOptionalClauses = null) {
			// Call OrdemProducaoGrade::QueryArray to perform the LoadArrayByTamanhoId query
			try {
				return OrdemProducaoGrade::QueryArray(
					QQ::Equal(QQN::OrdemProducaoGrade()->TamanhoId, $intTamanhoId),
					$objOptionalClauses
					);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count OrdemProducaoGrades
		 * by TamanhoId Index(es)
		 * @param integer $intTamanhoId
		 * @return int
		*/
		public static function CountByTamanhoId($intTamanhoId, $objOptionalClauses = null) {
			// Call OrdemProducaoGrade::QueryCount to perform the CountByTamanhoId query
			return OrdemProducaoGrade::QueryCount(
				QQ::Equal(QQN::OrdemProducaoGrade()->TamanhoId, $intTamanhoId)
			, $objOptionalClauses
			);
		}
			
		/**
		 * Load an array of OrdemProducaoGrade objects,
		 * by OrdemProducaoId Index(es)
		 * @param integer $intOrdemProducaoId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return OrdemProducaoGrade[]
		*/
		public static function LoadArrayByOrdemProducaoId($intOrdemProducaoId, $objOptionalClauses = null) {
			// Call OrdemProducaoGrade::QueryArray to perform the LoadArrayByOrdemProducaoId query
			try {
				return OrdemProducaoGrade::QueryArray(
					QQ::Equal(QQN::OrdemProducaoGrade()->OrdemProducaoId, $intOrdemProducaoId),
					$objOptionalClauses
					);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count OrdemProducaoGrades
		 * by OrdemProducaoId Index(es)
		 * @param integer $intOrdemProducaoId
		 * @return int
		*/
		public static function CountByOrdemProducaoId($intOrdemProducaoId, $objOptionalClauses = null) {
			// Call OrdemProducaoGrade::QueryCount to perform the CountByOrdemProducaoId query
			return OrdemProducaoGrade::QueryCount(
				QQ::Equal(QQN::OrdemProducaoGrade()->OrdemProducaoId, $intOrdemProducaoId)
			, $objOptionalClauses
			);
		}
			
		/**
		 * Load an array of OrdemProducaoGrade objects,
		 * by CorId, OrdemProducaoId Index(es)
		 * @param integer $intCorId
		 * @param integer $intOrdemProducaoId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return OrdemProducaoGrade[]
		*/
		public static function LoadArrayByCorIdOrdemProducaoId($intCorId, $intOrdemProducaoId, $objOptionalClauses = null) {
			// Call OrdemProducaoGrade::QueryArray to perform the LoadArrayByCorIdOrdemProducaoId query
			try {
				return OrdemProducaoGrade::QueryArray(
					QQ::AndCondition(
					QQ::Equal(QQN::OrdemProducaoGrade()->CorId, $intCorId),
					QQ::Equal(QQN::OrdemProducaoGrade()->OrdemProducaoId, $intOrdemProducaoId)
					),
					$objOptionalClauses
					);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count OrdemProducaoGrades
		 * by CorId, OrdemProducaoId Index(es)
		 * @param integer $intCorId
		 * @param integer $intOrdemProducaoId
		 * @return int
		*/
		public static function CountByCorIdOrdemProducaoId($intCorId, $intOrdemProducaoId, $objOptionalClauses = null) {
			// Call OrdemProducaoGrade::QueryCount to perform the CountByCorIdOrdemProducaoId query
			return OrdemProducaoGrade::QueryCount(
				QQ::AndCondition(
				QQ::Equal(QQN::OrdemProducaoGrade()->CorId, $intCorId),
				QQ::Equal(QQN::OrdemProducaoGrade()->OrdemProducaoId, $intOrdemProducaoId)
				)
			, $objOptionalClauses
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////




		//////////////////////////////////////
		// SAVE, DELETE, RELOAD and JOURNALING
		//////////////////////////////////////

		/**
		 * Save this OrdemProducaoGrade
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = OrdemProducaoGrade::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `ordem_producao_grade` (
							`cor_id`,
							`tamanho_id`,
							`quantidade`,
							`ordem_producao_id`
						) VALUES (
							' . $objDatabase->SqlVariable($this->intCorId) . ',
							' . $objDatabase->SqlVariable($this->intTamanhoId) . ',
							' . $objDatabase->SqlVariable($this->intQuantidade) . ',
							' . $objDatabase->SqlVariable($this->intOrdemProducaoId) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intId = $objDatabase->InsertId('ordem_producao_grade', 'id');

					// Journaling
					if ($objDatabase->JournalingDatabase) $this->Journal('INSERT');

				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)
					if (!$blnForceUpdate) {
						// Perform the Optimistic Locking check
						$objResult = $objDatabase->Query('
							SELECT
								`date`
							FROM
								`ordem_producao_grade`
							WHERE
								`id` = ' . $objDatabase->SqlVariable($this->intId) . '
						');
						
						$objRow = $objResult->FetchArray();
						if ($objRow[0] != $this->strDate)
							throw new QOptimisticLockingException('OrdemProducaoGrade');
					}

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`ordem_producao_grade`
						SET
							`cor_id` = ' . $objDatabase->SqlVariable($this->intCorId) . ',
							`tamanho_id` = ' . $objDatabase->SqlVariable($this->intTamanhoId) . ',
							`quantidade` = ' . $objDatabase->SqlVariable($this->intQuantidade) . ',
							`ordem_producao_id` = ' . $objDatabase->SqlVariable($this->intOrdemProducaoId) . '
						WHERE
							`id` = ' . $objDatabase->SqlVariable($this->intId) . '
					');

					// Journaling
					if ($objDatabase->JournalingDatabase) $this->Journal('UPDATE');
				}

		
		
				// Update the adjoined BalancoPecas object (if applicable)
				// TODO: Make this into hard-coded SQL queries
				if ($this->blnDirtyBalancoPecas) {
					// Unassociate the old one (if applicable)
					if ($objAssociated = BalancoPecas::LoadByOrdemProducaoGradeId($this->intId)) {
						$objAssociated->OrdemProducaoGradeId = null;
						$objAssociated->Save();
					}

					// Associate the new one (if applicable)
					if ($this->objBalancoPecas) {
						$this->objBalancoPecas->OrdemProducaoGradeId = $this->intId;
						$this->objBalancoPecas->Save();
					}

					// Reset the "Dirty" flag
					$this->blnDirtyBalancoPecas = false;
				}
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Update __blnRestored and any Non-Identity PK Columns (if applicable)
			$this->__blnRestored = true;

			// Update Local Timestamp
			$objResult = $objDatabase->Query('
				SELECT
					`date`
				FROM
					`ordem_producao_grade`
				WHERE
					`id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
						
			$objRow = $objResult->FetchArray();
			$this->strDate = $objRow[0];

			// Return 
			return $mixToReturn;
		}

		/**
		 * Delete this OrdemProducaoGrade
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this OrdemProducaoGrade with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = OrdemProducaoGrade::GetDatabase();

			
			
			// Update the adjoined BalancoPecas object (if applicable) and perform a delete

			// Optional -- if you **KNOW** that you do not want to EVER run any level of business logic on the disassocation,
			// you *could* override Delete() so that this step can be a single hard coded query to optimize performance.
			if ($objAssociated = BalancoPecas::LoadByOrdemProducaoGradeId($this->intId)) {
				$objAssociated->Delete();
			}

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`ordem_producao_grade`
				WHERE
					`id` = ' . $objDatabase->SqlVariable($this->intId) . '');

			// Journaling
			if ($objDatabase->JournalingDatabase) $this->Journal('DELETE');
		}

		/**
		 * Delete all OrdemProducaoGrades
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = OrdemProducaoGrade::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`ordem_producao_grade`');
		}

		/**
		 * Truncate ordem_producao_grade table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = OrdemProducaoGrade::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `ordem_producao_grade`');
		}

		/**
		 * Reload this OrdemProducaoGrade from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved OrdemProducaoGrade object.');

			// Reload the Object
			$objReloaded = OrdemProducaoGrade::Load($this->intId);

			// Update $this's local variables to match
			$this->CorId = $objReloaded->CorId;
			$this->TamanhoId = $objReloaded->TamanhoId;
			$this->intQuantidade = $objReloaded->intQuantidade;
			$this->strDate = $objReloaded->strDate;
			$this->OrdemProducaoId = $objReloaded->OrdemProducaoId;
		}

		/**
		 * Journals the current object into the Log database.
		 * Used internally as a helper method.
		 * @param string $strJournalCommand
		 */
		public function Journal($strJournalCommand) {
			$objDatabase = OrdemProducaoGrade::GetDatabase()->JournalingDatabase;

			$objDatabase->NonQuery('
				INSERT INTO `ordem_producao_grade` (
					`id`,
					`cor_id`,
					`tamanho_id`,
					`quantidade`,
					`ordem_producao_id`,
					__sys_login_id,
					__sys_action,
					__sys_date
				) VALUES (
					' . $objDatabase->SqlVariable($this->intId) . ',
					' . $objDatabase->SqlVariable($this->intCorId) . ',
					' . $objDatabase->SqlVariable($this->intTamanhoId) . ',
					' . $objDatabase->SqlVariable($this->intQuantidade) . ',
					' . $objDatabase->SqlVariable($this->intOrdemProducaoId) . ',
					' . (($objDatabase->JournaledById) ? $objDatabase->JournaledById : 'NULL') . ',
					' . $objDatabase->SqlVariable($strJournalCommand) . ',
					NOW()
				);
			');
		}

		/**
		 * Gets the historical journal for an object from the log database.
		 * Objects will have VirtualAttributes available to lookup login, date, and action information from the journal object.
		 * @param integer intId
		 * @return OrdemProducaoGrade[]
		 */
		public static function GetJournalForId($intId) {
			$objDatabase = OrdemProducaoGrade::GetDatabase()->JournalingDatabase;

			$objResult = $objDatabase->Query('SELECT * FROM ordem_producao_grade WHERE id = ' .
				$objDatabase->SqlVariable($intId) . ' ORDER BY __sys_date');

			return OrdemProducaoGrade::InstantiateDbResult($objResult);
		}

		/**
		 * Gets the historical journal for this object from the log database.
		 * Objects will have VirtualAttributes available to lookup login, date, and action information from the journal object.
		 * @return OrdemProducaoGrade[]
		 */
		public function GetJournal() {
			return OrdemProducaoGrade::GetJournalForId($this->intId);
		}




		////////////////////
		// PUBLIC OVERRIDERS
		////////////////////

				/**
		 * Override method to perform a property "Get"
		 * This will get the value of $strName
		 *
		 * @param string $strName Name of the property to get
		 * @return mixed
		 */
		public function __get($strName) {
			switch ($strName) {
				///////////////////
				// Member Variables
				///////////////////
				case 'Id':
					// Gets the value for intId (Read-Only PK)
					// @return integer
					return $this->intId;

				case 'CorId':
					// Gets the value for intCorId 
					// @return integer
					return $this->intCorId;

				case 'TamanhoId':
					// Gets the value for intTamanhoId 
					// @return integer
					return $this->intTamanhoId;

				case 'Quantidade':
					// Gets the value for intQuantidade (Not Null)
					// @return integer
					return $this->intQuantidade;

				case 'Date':
					// Gets the value for strDate (Read-Only Timestamp)
					// @return string
					return $this->strDate;

				case 'OrdemProducaoId':
					// Gets the value for intOrdemProducaoId (Not Null)
					// @return integer
					return $this->intOrdemProducaoId;


				///////////////////
				// Member Objects
				///////////////////
				case 'Cor':
					// Gets the value for the Cor object referenced by intCorId 
					// @return Cor
					try {
						if ((!$this->objCor) && (!is_null($this->intCorId)))
							$this->objCor = Cor::Load($this->intCorId);
						return $this->objCor;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Tamanho':
					// Gets the value for the Tamanho object referenced by intTamanhoId 
					// @return Tamanho
					try {
						if ((!$this->objTamanho) && (!is_null($this->intTamanhoId)))
							$this->objTamanho = Tamanho::Load($this->intTamanhoId);
						return $this->objTamanho;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'OrdemProducao':
					// Gets the value for the OrdemProducao object referenced by intOrdemProducaoId (Not Null)
					// @return OrdemProducao
					try {
						if ((!$this->objOrdemProducao) && (!is_null($this->intOrdemProducaoId)))
							$this->objOrdemProducao = OrdemProducao::Load($this->intOrdemProducaoId);
						return $this->objOrdemProducao;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

		
		
				case 'BalancoPecas':
					// Gets the value for the BalancoPecas object that uniquely references this OrdemProducaoGrade
					// by objBalancoPecas (Unique)
					// @return BalancoPecas
					try {
						if ($this->objBalancoPecas === false)
							// We've attempted early binding -- and the reverse reference object does not exist
							return null;
						if (!$this->objBalancoPecas)
							$this->objBalancoPecas = BalancoPecas::LoadByOrdemProducaoGradeId($this->intId);
						return $this->objBalancoPecas;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				////////////////////////////
				// Virtual Object References (Many to Many and Reverse References)
				// (If restored via a "Many-to" expansion)
				////////////////////////////

				case '_BalancoAcoes':
					// Gets the value for the private _objBalancoAcoes (Read-Only)
					// if set due to an expansion on the balanco_acoes.ordem_producao_grade_id reverse relationship
					// @return BalancoAcoes
					return $this->_objBalancoAcoes;

				case '_BalancoAcoesArray':
					// Gets the value for the private _objBalancoAcoesArray (Read-Only)
					// if set due to an ExpandAsArray on the balanco_acoes.ordem_producao_grade_id reverse relationship
					// @return BalancoAcoes[]
					return (array) $this->_objBalancoAcoesArray;


				case '__Restored':
					return $this->__blnRestored;

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
			switch ($strName) {
				///////////////////
				// Member Variables
				///////////////////
				case 'CorId':
					// Sets the value for intCorId 
					// @param integer $mixValue
					// @return integer
					try {
						$this->objCor = null;
						return ($this->intCorId = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'TamanhoId':
					// Sets the value for intTamanhoId 
					// @param integer $mixValue
					// @return integer
					try {
						$this->objTamanho = null;
						return ($this->intTamanhoId = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Quantidade':
					// Sets the value for intQuantidade (Not Null)
					// @param integer $mixValue
					// @return integer
					try {
						return ($this->intQuantidade = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'OrdemProducaoId':
					// Sets the value for intOrdemProducaoId (Not Null)
					// @param integer $mixValue
					// @return integer
					try {
						$this->objOrdemProducao = null;
						return ($this->intOrdemProducaoId = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				///////////////////
				// Member Objects
				///////////////////
				case 'Cor':
					// Sets the value for the Cor object referenced by intCorId 
					// @param Cor $mixValue
					// @return Cor
					if (is_null($mixValue)) {
						$this->intCorId = null;
						$this->objCor = null;
						return null;
					} else {
						// Make sure $mixValue actually is a Cor object
						try {
							$mixValue = QType::Cast($mixValue, 'Cor');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						} 

						// Make sure $mixValue is a SAVED Cor object
						if (is_null($mixValue->Id))
							throw new QCallerException('Unable to set an unsaved Cor for this OrdemProducaoGrade');

						// Update Local Member Variables
						$this->objCor = $mixValue;
						$this->intCorId = $mixValue->Id;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'Tamanho':
					// Sets the value for the Tamanho object referenced by intTamanhoId 
					// @param Tamanho $mixValue
					// @return Tamanho
					if (is_null($mixValue)) {
						$this->intTamanhoId = null;
						$this->objTamanho = null;
						return null;
					} else {
						// Make sure $mixValue actually is a Tamanho object
						try {
							$mixValue = QType::Cast($mixValue, 'Tamanho');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						} 

						// Make sure $mixValue is a SAVED Tamanho object
						if (is_null($mixValue->Id))
							throw new QCallerException('Unable to set an unsaved Tamanho for this OrdemProducaoGrade');

						// Update Local Member Variables
						$this->objTamanho = $mixValue;
						$this->intTamanhoId = $mixValue->Id;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'OrdemProducao':
					// Sets the value for the OrdemProducao object referenced by intOrdemProducaoId (Not Null)
					// @param OrdemProducao $mixValue
					// @return OrdemProducao
					if (is_null($mixValue)) {
						$this->intOrdemProducaoId = null;
						$this->objOrdemProducao = null;
						return null;
					} else {
						// Make sure $mixValue actually is a OrdemProducao object
						try {
							$mixValue = QType::Cast($mixValue, 'OrdemProducao');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						} 

						// Make sure $mixValue is a SAVED OrdemProducao object
						if (is_null($mixValue->Id))
							throw new QCallerException('Unable to set an unsaved OrdemProducao for this OrdemProducaoGrade');

						// Update Local Member Variables
						$this->objOrdemProducao = $mixValue;
						$this->intOrdemProducaoId = $mixValue->Id;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'BalancoPecas':
					// Sets the value for the BalancoPecas object referenced by objBalancoPecas (Unique)
					// @param BalancoPecas $mixValue
					// @return BalancoPecas
					if (is_null($mixValue)) {
						$this->objBalancoPecas = null;

						// Make sure we update the adjoined BalancoPecas object the next time we call Save()
						$this->blnDirtyBalancoPecas = true;

						return null;
					} else {
						// Make sure $mixValue actually is a BalancoPecas object
						try {
							$mixValue = QType::Cast($mixValue, 'BalancoPecas');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Are we setting objBalancoPecas to a DIFFERENT $mixValue?
						if ((!$this->BalancoPecas) || ($this->BalancoPecas->Id != $mixValue->Id)) {
							// Yes -- therefore, set the "Dirty" flag to true
							// to make sure we update the adjoined BalancoPecas object the next time we call Save()
							$this->blnDirtyBalancoPecas = true;

							// Update Local Member Variable
							$this->objBalancoPecas = $mixValue;
						} else {
							// Nope -- therefore, make no changes
						}

						// Return $mixValue
						return $mixValue;
					}
					break;

				default:
					try {
						return parent::__set($strName, $mixValue);
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
			}
		}

		/**
		 * Lookup a VirtualAttribute value (if applicable).  Returns NULL if none found.
		 * @param string $strName
		 * @return string
		 */
		public function GetVirtualAttribute($strName) {
			if (array_key_exists($strName, $this->__strVirtualAttributeArray))
				return $this->__strVirtualAttributeArray[$strName];
			return null;
		}



		///////////////////////////////
		// ASSOCIATED OBJECTS' METHODS
		///////////////////////////////

			
		
		// Related Objects' Methods for BalancoAcoes
		//-------------------------------------------------------------------

		/**
		 * Gets all associated BalancoAcoeses as an array of BalancoAcoes objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return BalancoAcoes[]
		*/ 
		public function GetBalancoAcoesArray($objOptionalClauses = null) {
			if ((is_null($this->intId)))
				return array();

			try {
				return BalancoAcoes::LoadArrayByOrdemProducaoGradeId($this->intId, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated BalancoAcoeses
		 * @return int
		*/ 
		public function CountBalancoAcoeses() {
			if ((is_null($this->intId)))
				return 0;

			return BalancoAcoes::CountByOrdemProducaoGradeId($this->intId);
		}

		/**
		 * Associates a BalancoAcoes
		 * @param BalancoAcoes $objBalancoAcoes
		 * @return void
		*/ 
		public function AssociateBalancoAcoes(BalancoAcoes $objBalancoAcoes) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateBalancoAcoes on this unsaved OrdemProducaoGrade.');
			if ((is_null($objBalancoAcoes->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateBalancoAcoes on this OrdemProducaoGrade with an unsaved BalancoAcoes.');

			// Get the Database Object for this Class
			$objDatabase = OrdemProducaoGrade::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`balanco_acoes`
				SET
					`ordem_producao_grade_id` = ' . $objDatabase->SqlVariable($this->intId) . '
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objBalancoAcoes->Id) . '
			');

			// Journaling (if applicable)
			if ($objDatabase->JournalingDatabase) {
				$objBalancoAcoes->OrdemProducaoGradeId = $this->intId;
				$objBalancoAcoes->Journal('UPDATE');
			}
		}

		/**
		 * Unassociates a BalancoAcoes
		 * @param BalancoAcoes $objBalancoAcoes
		 * @return void
		*/ 
		public function UnassociateBalancoAcoes(BalancoAcoes $objBalancoAcoes) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateBalancoAcoes on this unsaved OrdemProducaoGrade.');
			if ((is_null($objBalancoAcoes->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateBalancoAcoes on this OrdemProducaoGrade with an unsaved BalancoAcoes.');

			// Get the Database Object for this Class
			$objDatabase = OrdemProducaoGrade::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`balanco_acoes`
				SET
					`ordem_producao_grade_id` = null
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objBalancoAcoes->Id) . ' AND
					`ordem_producao_grade_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				$objBalancoAcoes->OrdemProducaoGradeId = null;
				$objBalancoAcoes->Journal('UPDATE');
			}
		}

		/**
		 * Unassociates all BalancoAcoeses
		 * @return void
		*/ 
		public function UnassociateAllBalancoAcoeses() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateBalancoAcoes on this unsaved OrdemProducaoGrade.');

			// Get the Database Object for this Class
			$objDatabase = OrdemProducaoGrade::GetDatabase();

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				foreach (BalancoAcoes::LoadArrayByOrdemProducaoGradeId($this->intId) as $objBalancoAcoes) {
					$objBalancoAcoes->OrdemProducaoGradeId = null;
					$objBalancoAcoes->Journal('UPDATE');
				}
			}

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`balanco_acoes`
				SET
					`ordem_producao_grade_id` = null
				WHERE
					`ordem_producao_grade_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Deletes an associated BalancoAcoes
		 * @param BalancoAcoes $objBalancoAcoes
		 * @return void
		*/ 
		public function DeleteAssociatedBalancoAcoes(BalancoAcoes $objBalancoAcoes) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateBalancoAcoes on this unsaved OrdemProducaoGrade.');
			if ((is_null($objBalancoAcoes->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateBalancoAcoes on this OrdemProducaoGrade with an unsaved BalancoAcoes.');

			// Get the Database Object for this Class
			$objDatabase = OrdemProducaoGrade::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`balanco_acoes`
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objBalancoAcoes->Id) . ' AND
					`ordem_producao_grade_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				$objBalancoAcoes->Journal('DELETE');
			}
		}

		/**
		 * Deletes all associated BalancoAcoeses
		 * @return void
		*/ 
		public function DeleteAllBalancoAcoeses() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateBalancoAcoes on this unsaved OrdemProducaoGrade.');

			// Get the Database Object for this Class
			$objDatabase = OrdemProducaoGrade::GetDatabase();

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				foreach (BalancoAcoes::LoadArrayByOrdemProducaoGradeId($this->intId) as $objBalancoAcoes) {
					$objBalancoAcoes->Journal('DELETE');
				}
			}

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`balanco_acoes`
				WHERE
					`ordem_producao_grade_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}





		////////////////////////////////////////
		// METHODS for SOAP-BASED WEB SERVICES
		////////////////////////////////////////

		public static function GetSoapComplexTypeXml() {
			$strToReturn = '<complexType name="OrdemProducaoGrade"><sequence>';
			$strToReturn .= '<element name="Id" type="xsd:int"/>';
			$strToReturn .= '<element name="Cor" type="xsd1:Cor"/>';
			$strToReturn .= '<element name="Tamanho" type="xsd1:Tamanho"/>';
			$strToReturn .= '<element name="Quantidade" type="xsd:int"/>';
			$strToReturn .= '<element name="Date" type="xsd:string"/>';
			$strToReturn .= '<element name="OrdemProducao" type="xsd1:OrdemProducao"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('OrdemProducaoGrade', $strComplexTypeArray)) {
				$strComplexTypeArray['OrdemProducaoGrade'] = OrdemProducaoGrade::GetSoapComplexTypeXml();
				Cor::AlterSoapComplexTypeArray($strComplexTypeArray);
				Tamanho::AlterSoapComplexTypeArray($strComplexTypeArray);
				OrdemProducao::AlterSoapComplexTypeArray($strComplexTypeArray);
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, OrdemProducaoGrade::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new OrdemProducaoGrade();
			if (property_exists($objSoapObject, 'Id'))
				$objToReturn->intId = $objSoapObject->Id;
			if ((property_exists($objSoapObject, 'Cor')) &&
				($objSoapObject->Cor))
				$objToReturn->Cor = Cor::GetObjectFromSoapObject($objSoapObject->Cor);
			if ((property_exists($objSoapObject, 'Tamanho')) &&
				($objSoapObject->Tamanho))
				$objToReturn->Tamanho = Tamanho::GetObjectFromSoapObject($objSoapObject->Tamanho);
			if (property_exists($objSoapObject, 'Quantidade'))
				$objToReturn->intQuantidade = $objSoapObject->Quantidade;
			if (property_exists($objSoapObject, 'Date'))
				$objToReturn->strDate = $objSoapObject->Date;
			if ((property_exists($objSoapObject, 'OrdemProducao')) &&
				($objSoapObject->OrdemProducao))
				$objToReturn->OrdemProducao = OrdemProducao::GetObjectFromSoapObject($objSoapObject->OrdemProducao);
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, OrdemProducaoGrade::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->objCor)
				$objObject->objCor = Cor::GetSoapObjectFromObject($objObject->objCor, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intCorId = null;
			if ($objObject->objTamanho)
				$objObject->objTamanho = Tamanho::GetSoapObjectFromObject($objObject->objTamanho, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intTamanhoId = null;
			if ($objObject->objOrdemProducao)
				$objObject->objOrdemProducao = OrdemProducao::GetSoapObjectFromObject($objObject->objOrdemProducao, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intOrdemProducaoId = null;
			return $objObject;
		}




	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCODO QUERY
	/////////////////////////////////////

	/**
	 * @property-read QQNode $Id
	 * @property-read QQNode $CorId
	 * @property-read QQNodeCor $Cor
	 * @property-read QQNode $TamanhoId
	 * @property-read QQNodeTamanho $Tamanho
	 * @property-read QQNode $Quantidade
	 * @property-read QQNode $Date
	 * @property-read QQNode $OrdemProducaoId
	 * @property-read QQNodeOrdemProducao $OrdemProducao
	 * @property-read QQReverseReferenceNodeBalancoAcoes $BalancoAcoes
	 * @property-read QQReverseReferenceNodeBalancoPecas $BalancoPecas
	 */
	class QQNodeOrdemProducaoGrade extends QQNode {
		protected $strTableName = 'ordem_producao_grade';
		protected $strPrimaryKey = 'id';
		protected $strClassName = 'OrdemProducaoGrade';
		public function __get($strName) {
			switch ($strName) {
				case 'Id':
					return new QQNode('id', 'Id', 'integer', $this);
				case 'CorId':
					return new QQNode('cor_id', 'CorId', 'integer', $this);
				case 'Cor':
					return new QQNodeCor('cor_id', 'Cor', 'integer', $this);
				case 'TamanhoId':
					return new QQNode('tamanho_id', 'TamanhoId', 'integer', $this);
				case 'Tamanho':
					return new QQNodeTamanho('tamanho_id', 'Tamanho', 'integer', $this);
				case 'Quantidade':
					return new QQNode('quantidade', 'Quantidade', 'integer', $this);
				case 'Date':
					return new QQNode('date', 'Date', 'string', $this);
				case 'OrdemProducaoId':
					return new QQNode('ordem_producao_id', 'OrdemProducaoId', 'integer', $this);
				case 'OrdemProducao':
					return new QQNodeOrdemProducao('ordem_producao_id', 'OrdemProducao', 'integer', $this);
				case 'BalancoAcoes':
					return new QQReverseReferenceNodeBalancoAcoes($this, 'balancoacoes', 'reverse_reference', 'ordem_producao_grade_id');
				case 'BalancoPecas':
					return new QQReverseReferenceNodeBalancoPecas($this, 'balancopecas', 'reverse_reference', 'ordem_producao_grade_id', 'BalancoPecas');

				case '_PrimaryKeyNode':
					return new QQNode('id', 'Id', 'integer', $this);
				default:
					try {
						return parent::__get($strName);
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
			}
		}
	}
	
	/**
	 * @property-read QQNode $Id
	 * @property-read QQNode $CorId
	 * @property-read QQNodeCor $Cor
	 * @property-read QQNode $TamanhoId
	 * @property-read QQNodeTamanho $Tamanho
	 * @property-read QQNode $Quantidade
	 * @property-read QQNode $Date
	 * @property-read QQNode $OrdemProducaoId
	 * @property-read QQNodeOrdemProducao $OrdemProducao
	 * @property-read QQReverseReferenceNodeBalancoAcoes $BalancoAcoes
	 * @property-read QQReverseReferenceNodeBalancoPecas $BalancoPecas
	 * @property-read QQNode $_PrimaryKeyNode
	 */
	class QQReverseReferenceNodeOrdemProducaoGrade extends QQReverseReferenceNode {
		protected $strTableName = 'ordem_producao_grade';
		protected $strPrimaryKey = 'id';
		protected $strClassName = 'OrdemProducaoGrade';
		public function __get($strName) {
			switch ($strName) {
				case 'Id':
					return new QQNode('id', 'Id', 'integer', $this);
				case 'CorId':
					return new QQNode('cor_id', 'CorId', 'integer', $this);
				case 'Cor':
					return new QQNodeCor('cor_id', 'Cor', 'integer', $this);
				case 'TamanhoId':
					return new QQNode('tamanho_id', 'TamanhoId', 'integer', $this);
				case 'Tamanho':
					return new QQNodeTamanho('tamanho_id', 'Tamanho', 'integer', $this);
				case 'Quantidade':
					return new QQNode('quantidade', 'Quantidade', 'integer', $this);
				case 'Date':
					return new QQNode('date', 'Date', 'string', $this);
				case 'OrdemProducaoId':
					return new QQNode('ordem_producao_id', 'OrdemProducaoId', 'integer', $this);
				case 'OrdemProducao':
					return new QQNodeOrdemProducao('ordem_producao_id', 'OrdemProducao', 'integer', $this);
				case 'BalancoAcoes':
					return new QQReverseReferenceNodeBalancoAcoes($this, 'balancoacoes', 'reverse_reference', 'ordem_producao_grade_id');
				case 'BalancoPecas':
					return new QQReverseReferenceNodeBalancoPecas($this, 'balancopecas', 'reverse_reference', 'ordem_producao_grade_id', 'BalancoPecas');

				case '_PrimaryKeyNode':
					return new QQNode('id', 'Id', 'integer', $this);
				default:
					try {
						return parent::__get($strName);
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
			}
		}
	}

?>