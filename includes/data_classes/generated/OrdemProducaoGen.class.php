<?php
	/**
	 * The abstract OrdemProducaoGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the OrdemProducao subclass which
	 * extends this OrdemProducaoGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the OrdemProducao class.
	 * 
	 * @package My Application
	 * @subpackage GeneratedDataObjects
	 * @property integer $Id the value for intId (Read-Only PK)
	 * @property string $Numero the value for strNumero (Unique)
	 * @property integer $ReferenciaId the value for intReferenciaId 
	 * @property Referencia $Referencia the value for the Referencia object referenced by intReferenciaId 
	 * @property OrdemProducaoGrade $_OrdemProducaoGrade the value for the private _objOrdemProducaoGrade (Read-Only) if set due to an expansion on the ordem_producao_grade.ordem_producao_id reverse relationship
	 * @property OrdemProducaoGrade[] $_OrdemProducaoGradeArray the value for the private _objOrdemProducaoGradeArray (Read-Only) if set due to an ExpandAsArray on the ordem_producao_grade.ordem_producao_id reverse relationship
	 * @property boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class OrdemProducaoGen extends QBaseClass {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////
		
		/**
		 * Protected member variable that maps to the database PK Identity column ordem_producao.id
		 * @var integer intId
		 */
		protected $intId;
		const IdDefault = null;


		/**
		 * Protected member variable that maps to the database column ordem_producao.numero
		 * @var string strNumero
		 */
		protected $strNumero;
		const NumeroMaxLength = 150;
		const NumeroDefault = null;


		/**
		 * Protected member variable that maps to the database column ordem_producao.referencia_id
		 * @var integer intReferenciaId
		 */
		protected $intReferenciaId;
		const ReferenciaIdDefault = null;


		/**
		 * Private member variable that stores a reference to a single OrdemProducaoGrade object
		 * (of type OrdemProducaoGrade), if this OrdemProducao object was restored with
		 * an expansion on the ordem_producao_grade association table.
		 * @var OrdemProducaoGrade _objOrdemProducaoGrade;
		 */
		private $_objOrdemProducaoGrade;

		/**
		 * Private member variable that stores a reference to an array of OrdemProducaoGrade objects
		 * (of type OrdemProducaoGrade[]), if this OrdemProducao object was restored with
		 * an ExpandAsArray on the ordem_producao_grade association table.
		 * @var OrdemProducaoGrade[] _objOrdemProducaoGradeArray;
		 */
		private $_objOrdemProducaoGradeArray = array();

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
		 * in the database column ordem_producao.referencia_id.
		 *
		 * NOTE: Always use the Referencia property getter to correctly retrieve this Referencia object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Referencia objReferencia
		 */
		protected $objReferencia;





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
		 * Load a OrdemProducao from PK Info
		 * @param integer $intId
		 * @return OrdemProducao
		 */
		public static function Load($intId) {
			// Use QuerySingle to Perform the Query
			return OrdemProducao::QuerySingle(
				QQ::Equal(QQN::OrdemProducao()->Id, $intId)
			);
		}

		/**
		 * Load all OrdemProducaos
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return OrdemProducao[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			// Call OrdemProducao::QueryArray to perform the LoadAll query
			try {
				return OrdemProducao::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all OrdemProducaos
		 * @return int
		 */
		public static function CountAll() {
			// Call OrdemProducao::QueryCount to perform the CountAll query
			return OrdemProducao::QueryCount(QQ::All());
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
			$objDatabase = OrdemProducao::GetDatabase();

			// Create/Build out the QueryBuilder object with OrdemProducao-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'ordem_producao');
			OrdemProducao::GetSelectFields($objQueryBuilder);
			$objQueryBuilder->AddFromItem('ordem_producao');

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
		 * Static Qcodo Query method to query for a single OrdemProducao object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return OrdemProducao the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = OrdemProducao::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Instantiate a new OrdemProducao object and return it

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = OrdemProducao::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return OrdemProducao::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcodo Query method to query for an array of OrdemProducao objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return OrdemProducao[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = OrdemProducao::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return OrdemProducao::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
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
				$strQuery = OrdemProducao::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
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
		 * Static Qcodo Query method to query for a count of OrdemProducao objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = OrdemProducao::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = OrdemProducao::GetDatabase();

			// Lookup the QCache for This Query Statement
			$objCache = new QCache('query', 'ordem_producao_' . serialize($strConditions));
			if (!($strQuery = $objCache->GetData())) {
				// Not Found -- Go ahead and Create/Build out a new QueryBuilder object with OrdemProducao-specific fields
				$objQueryBuilder = new QQueryBuilder($objDatabase);
				OrdemProducao::GetSelectFields($objQueryBuilder);
				OrdemProducao::GetFromFields($objQueryBuilder);

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
			return OrdemProducao::InstantiateDbResult($objDbResult);
		}*/

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this OrdemProducao
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'ordem_producao';
				$strAliasPrefix = '';
			}

			$objBuilder->AddSelectItem($strTableName, 'id', $strAliasPrefix . 'id');
			$objBuilder->AddSelectItem($strTableName, 'numero', $strAliasPrefix . 'numero');
			$objBuilder->AddSelectItem($strTableName, 'referencia_id', $strAliasPrefix . 'referencia_id');
		}




		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a OrdemProducao from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this OrdemProducao::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param QDatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $objPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return OrdemProducao
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
					$strAliasPrefix = 'ordem_producao__';


				$strAlias = $strAliasPrefix . 'ordemproducaograde__id';
				$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
				if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
					(!is_null($objDbRow->GetColumn($strAliasName)))) {
					if ($intPreviousChildItemCount = count($objPreviousItem->_objOrdemProducaoGradeArray)) {
						$objPreviousChildItem = $objPreviousItem->_objOrdemProducaoGradeArray[$intPreviousChildItemCount - 1];
						$objChildItem = OrdemProducaoGrade::InstantiateDbRow($objDbRow, $strAliasPrefix . 'ordemproducaograde__', $strExpandAsArrayNodes, $objPreviousChildItem, $strColumnAliasArray);
						if ($objChildItem)
							$objPreviousItem->_objOrdemProducaoGradeArray[] = $objChildItem;
					} else
						$objPreviousItem->_objOrdemProducaoGradeArray[] = OrdemProducaoGrade::InstantiateDbRow($objDbRow, $strAliasPrefix . 'ordemproducaograde__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
					$blnExpandedViaArray = true;
				}

				// Either return false to signal array expansion, or check-to-reset the Alias prefix and move on
				if ($blnExpandedViaArray)
					return false;
				else if ($strAliasPrefix == 'ordem_producao__')
					$strAliasPrefix = null;
			}

			// Create a new instance of the OrdemProducao object
			$objToReturn = new OrdemProducao();
			$objToReturn->__blnRestored = true;

			$strAliasName = array_key_exists($strAliasPrefix . 'id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'id'] : $strAliasPrefix . 'id';
			$objToReturn->intId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'numero', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'numero'] : $strAliasPrefix . 'numero';
			$objToReturn->strNumero = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'referencia_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'referencia_id'] : $strAliasPrefix . 'referencia_id';
			$objToReturn->intReferenciaId = $objDbRow->GetColumn($strAliasName, 'Integer');

			// Instantiate Virtual Attributes
			foreach ($objDbRow->GetColumnNameArray() as $strColumnName => $mixValue) {
				$strVirtualPrefix = $strAliasPrefix . '__';
				$strVirtualPrefixLength = strlen($strVirtualPrefix);
				if (substr($strColumnName, 0, $strVirtualPrefixLength) == $strVirtualPrefix)
					$objToReturn->__strVirtualAttributeArray[substr($strColumnName, $strVirtualPrefixLength)] = $mixValue;
			}

			// Prepare to Check for Early/Virtual Binding
			if (!$strAliasPrefix)
				$strAliasPrefix = 'ordem_producao__';

			// Check for Referencia Early Binding
			$strAlias = $strAliasPrefix . 'referencia_id__id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objReferencia = Referencia::InstantiateDbRow($objDbRow, $strAliasPrefix . 'referencia_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);




			// Check for OrdemProducaoGrade Virtual Binding
			$strAlias = $strAliasPrefix . 'ordemproducaograde__id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
					$objToReturn->_objOrdemProducaoGradeArray[] = OrdemProducaoGrade::InstantiateDbRow($objDbRow, $strAliasPrefix . 'ordemproducaograde__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objOrdemProducaoGrade = OrdemProducaoGrade::InstantiateDbRow($objDbRow, $strAliasPrefix . 'ordemproducaograde__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate an array of OrdemProducaos from a Database Result
		 * @param QDatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return OrdemProducao[]
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
					$objItem = OrdemProducao::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objLastRowItem, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
						$objLastRowItem = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = OrdemProducao::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate a single OrdemProducao object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return OrdemProducao next row resulting from the query
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
			return OrdemProducao::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, null, $strColumnAliasArray);
		}




		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////
			
		/**
		 * Load a single OrdemProducao object,
		 * by Id Index(es)
		 * @param integer $intId
		 * @return OrdemProducao
		*/
		public static function LoadById($intId, $objOptionalClauses = null) {
			return OrdemProducao::QuerySingle(
				QQ::Equal(QQN::OrdemProducao()->Id, $intId)
			, $objOptionalClauses
			);
		}
			
		/**
		 * Load a single OrdemProducao object,
		 * by Numero Index(es)
		 * @param string $strNumero
		 * @return OrdemProducao
		*/
		public static function LoadByNumero($strNumero, $objOptionalClauses = null) {
			return OrdemProducao::QuerySingle(
				QQ::Equal(QQN::OrdemProducao()->Numero, $strNumero)
			, $objOptionalClauses
			);
		}
			
		/**
		 * Load an array of OrdemProducao objects,
		 * by ReferenciaId Index(es)
		 * @param integer $intReferenciaId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return OrdemProducao[]
		*/
		public static function LoadArrayByReferenciaId($intReferenciaId, $objOptionalClauses = null) {
			// Call OrdemProducao::QueryArray to perform the LoadArrayByReferenciaId query
			try {
				return OrdemProducao::QueryArray(
					QQ::Equal(QQN::OrdemProducao()->ReferenciaId, $intReferenciaId),
					$objOptionalClauses
					);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count OrdemProducaos
		 * by ReferenciaId Index(es)
		 * @param integer $intReferenciaId
		 * @return int
		*/
		public static function CountByReferenciaId($intReferenciaId, $objOptionalClauses = null) {
			// Call OrdemProducao::QueryCount to perform the CountByReferenciaId query
			return OrdemProducao::QueryCount(
				QQ::Equal(QQN::OrdemProducao()->ReferenciaId, $intReferenciaId)
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
		 * Save this OrdemProducao
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = OrdemProducao::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `ordem_producao` (
							`numero`,
							`referencia_id`
						) VALUES (
							' . $objDatabase->SqlVariable($this->strNumero) . ',
							' . $objDatabase->SqlVariable($this->intReferenciaId) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intId = $objDatabase->InsertId('ordem_producao', 'id');

					// Journaling
					if ($objDatabase->JournalingDatabase) $this->Journal('INSERT');

				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`ordem_producao`
						SET
							`numero` = ' . $objDatabase->SqlVariable($this->strNumero) . ',
							`referencia_id` = ' . $objDatabase->SqlVariable($this->intReferenciaId) . '
						WHERE
							`id` = ' . $objDatabase->SqlVariable($this->intId) . '
					');

					// Journaling
					if ($objDatabase->JournalingDatabase) $this->Journal('UPDATE');
				}

			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Update __blnRestored and any Non-Identity PK Columns (if applicable)
			$this->__blnRestored = true;


			// Return 
			return $mixToReturn;
		}

		/**
		 * Delete this OrdemProducao
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this OrdemProducao with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = OrdemProducao::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`ordem_producao`
				WHERE
					`id` = ' . $objDatabase->SqlVariable($this->intId) . '');

			// Journaling
			if ($objDatabase->JournalingDatabase) $this->Journal('DELETE');
		}

		/**
		 * Delete all OrdemProducaos
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = OrdemProducao::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`ordem_producao`');
		}

		/**
		 * Truncate ordem_producao table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = OrdemProducao::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `ordem_producao`');
		}

		/**
		 * Reload this OrdemProducao from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved OrdemProducao object.');

			// Reload the Object
			$objReloaded = OrdemProducao::Load($this->intId);

			// Update $this's local variables to match
			$this->strNumero = $objReloaded->strNumero;
			$this->ReferenciaId = $objReloaded->ReferenciaId;
		}

		/**
		 * Journals the current object into the Log database.
		 * Used internally as a helper method.
		 * @param string $strJournalCommand
		 */
		public function Journal($strJournalCommand) {
			$objDatabase = OrdemProducao::GetDatabase()->JournalingDatabase;

			$objDatabase->NonQuery('
				INSERT INTO `ordem_producao` (
					`id`,
					`numero`,
					`referencia_id`,
					__sys_login_id,
					__sys_action,
					__sys_date
				) VALUES (
					' . $objDatabase->SqlVariable($this->intId) . ',
					' . $objDatabase->SqlVariable($this->strNumero) . ',
					' . $objDatabase->SqlVariable($this->intReferenciaId) . ',
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
		 * @return OrdemProducao[]
		 */
		public static function GetJournalForId($intId) {
			$objDatabase = OrdemProducao::GetDatabase()->JournalingDatabase;

			$objResult = $objDatabase->Query('SELECT * FROM ordem_producao WHERE id = ' .
				$objDatabase->SqlVariable($intId) . ' ORDER BY __sys_date');

			return OrdemProducao::InstantiateDbResult($objResult);
		}

		/**
		 * Gets the historical journal for this object from the log database.
		 * Objects will have VirtualAttributes available to lookup login, date, and action information from the journal object.
		 * @return OrdemProducao[]
		 */
		public function GetJournal() {
			return OrdemProducao::GetJournalForId($this->intId);
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

				case 'Numero':
					// Gets the value for strNumero (Unique)
					// @return string
					return $this->strNumero;

				case 'ReferenciaId':
					// Gets the value for intReferenciaId 
					// @return integer
					return $this->intReferenciaId;


				///////////////////
				// Member Objects
				///////////////////
				case 'Referencia':
					// Gets the value for the Referencia object referenced by intReferenciaId 
					// @return Referencia
					try {
						if ((!$this->objReferencia) && (!is_null($this->intReferenciaId)))
							$this->objReferencia = Referencia::Load($this->intReferenciaId);
						return $this->objReferencia;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				////////////////////////////
				// Virtual Object References (Many to Many and Reverse References)
				// (If restored via a "Many-to" expansion)
				////////////////////////////

				case '_OrdemProducaoGrade':
					// Gets the value for the private _objOrdemProducaoGrade (Read-Only)
					// if set due to an expansion on the ordem_producao_grade.ordem_producao_id reverse relationship
					// @return OrdemProducaoGrade
					return $this->_objOrdemProducaoGrade;

				case '_OrdemProducaoGradeArray':
					// Gets the value for the private _objOrdemProducaoGradeArray (Read-Only)
					// if set due to an ExpandAsArray on the ordem_producao_grade.ordem_producao_id reverse relationship
					// @return OrdemProducaoGrade[]
					return (array) $this->_objOrdemProducaoGradeArray;


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
				case 'Numero':
					// Sets the value for strNumero (Unique)
					// @param string $mixValue
					// @return string
					try {
						return ($this->strNumero = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'ReferenciaId':
					// Sets the value for intReferenciaId 
					// @param integer $mixValue
					// @return integer
					try {
						$this->objReferencia = null;
						return ($this->intReferenciaId = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				///////////////////
				// Member Objects
				///////////////////
				case 'Referencia':
					// Sets the value for the Referencia object referenced by intReferenciaId 
					// @param Referencia $mixValue
					// @return Referencia
					if (is_null($mixValue)) {
						$this->intReferenciaId = null;
						$this->objReferencia = null;
						return null;
					} else {
						// Make sure $mixValue actually is a Referencia object
						try {
							$mixValue = QType::Cast($mixValue, 'Referencia');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						} 

						// Make sure $mixValue is a SAVED Referencia object
						if (is_null($mixValue->Id))
							throw new QCallerException('Unable to set an unsaved Referencia for this OrdemProducao');

						// Update Local Member Variables
						$this->objReferencia = $mixValue;
						$this->intReferenciaId = $mixValue->Id;

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

			
		
		// Related Objects' Methods for OrdemProducaoGrade
		//-------------------------------------------------------------------

		/**
		 * Gets all associated OrdemProducaoGrades as an array of OrdemProducaoGrade objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return OrdemProducaoGrade[]
		*/ 
		public function GetOrdemProducaoGradeArray($objOptionalClauses = null) {
			if ((is_null($this->intId)))
				return array();

			try {
				return OrdemProducaoGrade::LoadArrayByOrdemProducaoId($this->intId, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated OrdemProducaoGrades
		 * @return int
		*/ 
		public function CountOrdemProducaoGrades() {
			if ((is_null($this->intId)))
				return 0;

			return OrdemProducaoGrade::CountByOrdemProducaoId($this->intId);
		}

		/**
		 * Associates a OrdemProducaoGrade
		 * @param OrdemProducaoGrade $objOrdemProducaoGrade
		 * @return void
		*/ 
		public function AssociateOrdemProducaoGrade(OrdemProducaoGrade $objOrdemProducaoGrade) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateOrdemProducaoGrade on this unsaved OrdemProducao.');
			if ((is_null($objOrdemProducaoGrade->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateOrdemProducaoGrade on this OrdemProducao with an unsaved OrdemProducaoGrade.');

			// Get the Database Object for this Class
			$objDatabase = OrdemProducao::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`ordem_producao_grade`
				SET
					`ordem_producao_id` = ' . $objDatabase->SqlVariable($this->intId) . '
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objOrdemProducaoGrade->Id) . '
			');

			// Journaling (if applicable)
			if ($objDatabase->JournalingDatabase) {
				$objOrdemProducaoGrade->OrdemProducaoId = $this->intId;
				$objOrdemProducaoGrade->Journal('UPDATE');
			}
		}

		/**
		 * Unassociates a OrdemProducaoGrade
		 * @param OrdemProducaoGrade $objOrdemProducaoGrade
		 * @return void
		*/ 
		public function UnassociateOrdemProducaoGrade(OrdemProducaoGrade $objOrdemProducaoGrade) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateOrdemProducaoGrade on this unsaved OrdemProducao.');
			if ((is_null($objOrdemProducaoGrade->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateOrdemProducaoGrade on this OrdemProducao with an unsaved OrdemProducaoGrade.');

			// Get the Database Object for this Class
			$objDatabase = OrdemProducao::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`ordem_producao_grade`
				SET
					`ordem_producao_id` = null
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objOrdemProducaoGrade->Id) . ' AND
					`ordem_producao_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				$objOrdemProducaoGrade->OrdemProducaoId = null;
				$objOrdemProducaoGrade->Journal('UPDATE');
			}
		}

		/**
		 * Unassociates all OrdemProducaoGrades
		 * @return void
		*/ 
		public function UnassociateAllOrdemProducaoGrades() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateOrdemProducaoGrade on this unsaved OrdemProducao.');

			// Get the Database Object for this Class
			$objDatabase = OrdemProducao::GetDatabase();

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				foreach (OrdemProducaoGrade::LoadArrayByOrdemProducaoId($this->intId) as $objOrdemProducaoGrade) {
					$objOrdemProducaoGrade->OrdemProducaoId = null;
					$objOrdemProducaoGrade->Journal('UPDATE');
				}
			}

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`ordem_producao_grade`
				SET
					`ordem_producao_id` = null
				WHERE
					`ordem_producao_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Deletes an associated OrdemProducaoGrade
		 * @param OrdemProducaoGrade $objOrdemProducaoGrade
		 * @return void
		*/ 
		public function DeleteAssociatedOrdemProducaoGrade(OrdemProducaoGrade $objOrdemProducaoGrade) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateOrdemProducaoGrade on this unsaved OrdemProducao.');
			if ((is_null($objOrdemProducaoGrade->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateOrdemProducaoGrade on this OrdemProducao with an unsaved OrdemProducaoGrade.');

			// Get the Database Object for this Class
			$objDatabase = OrdemProducao::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`ordem_producao_grade`
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objOrdemProducaoGrade->Id) . ' AND
					`ordem_producao_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				$objOrdemProducaoGrade->Journal('DELETE');
			}
		}

		/**
		 * Deletes all associated OrdemProducaoGrades
		 * @return void
		*/ 
		public function DeleteAllOrdemProducaoGrades() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateOrdemProducaoGrade on this unsaved OrdemProducao.');

			// Get the Database Object for this Class
			$objDatabase = OrdemProducao::GetDatabase();

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				foreach (OrdemProducaoGrade::LoadArrayByOrdemProducaoId($this->intId) as $objOrdemProducaoGrade) {
					$objOrdemProducaoGrade->Journal('DELETE');
				}
			}

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`ordem_producao_grade`
				WHERE
					`ordem_producao_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}





		////////////////////////////////////////
		// METHODS for SOAP-BASED WEB SERVICES
		////////////////////////////////////////

		public static function GetSoapComplexTypeXml() {
			$strToReturn = '<complexType name="OrdemProducao"><sequence>';
			$strToReturn .= '<element name="Id" type="xsd:int"/>';
			$strToReturn .= '<element name="Numero" type="xsd:string"/>';
			$strToReturn .= '<element name="Referencia" type="xsd1:Referencia"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('OrdemProducao', $strComplexTypeArray)) {
				$strComplexTypeArray['OrdemProducao'] = OrdemProducao::GetSoapComplexTypeXml();
				Referencia::AlterSoapComplexTypeArray($strComplexTypeArray);
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, OrdemProducao::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new OrdemProducao();
			if (property_exists($objSoapObject, 'Id'))
				$objToReturn->intId = $objSoapObject->Id;
			if (property_exists($objSoapObject, 'Numero'))
				$objToReturn->strNumero = $objSoapObject->Numero;
			if ((property_exists($objSoapObject, 'Referencia')) &&
				($objSoapObject->Referencia))
				$objToReturn->Referencia = Referencia::GetObjectFromSoapObject($objSoapObject->Referencia);
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, OrdemProducao::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->objReferencia)
				$objObject->objReferencia = Referencia::GetSoapObjectFromObject($objObject->objReferencia, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intReferenciaId = null;
			return $objObject;
		}




	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCODO QUERY
	/////////////////////////////////////

	/**
	 * @property-read QQNode $Id
	 * @property-read QQNode $Numero
	 * @property-read QQNode $ReferenciaId
	 * @property-read QQNodeReferencia $Referencia
	 * @property-read QQReverseReferenceNodeOrdemProducaoGrade $OrdemProducaoGrade
	 */
	class QQNodeOrdemProducao extends QQNode {
		protected $strTableName = 'ordem_producao';
		protected $strPrimaryKey = 'id';
		protected $strClassName = 'OrdemProducao';
		public function __get($strName) {
			switch ($strName) {
				case 'Id':
					return new QQNode('id', 'Id', 'integer', $this);
				case 'Numero':
					return new QQNode('numero', 'Numero', 'string', $this);
				case 'ReferenciaId':
					return new QQNode('referencia_id', 'ReferenciaId', 'integer', $this);
				case 'Referencia':
					return new QQNodeReferencia('referencia_id', 'Referencia', 'integer', $this);
				case 'OrdemProducaoGrade':
					return new QQReverseReferenceNodeOrdemProducaoGrade($this, 'ordemproducaograde', 'reverse_reference', 'ordem_producao_id');

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
	 * @property-read QQNode $Numero
	 * @property-read QQNode $ReferenciaId
	 * @property-read QQNodeReferencia $Referencia
	 * @property-read QQReverseReferenceNodeOrdemProducaoGrade $OrdemProducaoGrade
	 * @property-read QQNode $_PrimaryKeyNode
	 */
	class QQReverseReferenceNodeOrdemProducao extends QQReverseReferenceNode {
		protected $strTableName = 'ordem_producao';
		protected $strPrimaryKey = 'id';
		protected $strClassName = 'OrdemProducao';
		public function __get($strName) {
			switch ($strName) {
				case 'Id':
					return new QQNode('id', 'Id', 'integer', $this);
				case 'Numero':
					return new QQNode('numero', 'Numero', 'string', $this);
				case 'ReferenciaId':
					return new QQNode('referencia_id', 'ReferenciaId', 'integer', $this);
				case 'Referencia':
					return new QQNodeReferencia('referencia_id', 'Referencia', 'integer', $this);
				case 'OrdemProducaoGrade':
					return new QQReverseReferenceNodeOrdemProducaoGrade($this, 'ordemproducaograde', 'reverse_reference', 'ordem_producao_id');

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