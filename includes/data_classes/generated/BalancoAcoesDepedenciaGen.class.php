<?php
	/**
	 * The abstract BalancoAcoesDepedenciaGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the BalancoAcoesDepedencia subclass which
	 * extends this BalancoAcoesDepedenciaGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the BalancoAcoesDepedencia class.
	 * 
	 * @package My Application
	 * @subpackage GeneratedDataObjects
	 * @property integer $Id the value for intId (Read-Only PK)
	 * @property integer $FluxogramaItemRealId the value for intFluxogramaItemRealId (Not Null)
	 * @property integer $BalancoAcoesId the value for intBalancoAcoesId (Not Null)
	 * @property integer $QuantidadeDisponibilizada the value for intQuantidadeDisponibilizada (Not Null)
	 * @property FluxogramaItemReal $FluxogramaItemReal the value for the FluxogramaItemReal object referenced by intFluxogramaItemRealId (Not Null)
	 * @property BalancoAcoes $BalancoAcoes the value for the BalancoAcoes object referenced by intBalancoAcoesId (Not Null)
	 * @property boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class BalancoAcoesDepedenciaGen extends QBaseClass {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////
		
		/**
		 * Protected member variable that maps to the database PK Identity column balanco_acoes_depedencia.id
		 * @var integer intId
		 */
		protected $intId;
		const IdDefault = null;


		/**
		 * Protected member variable that maps to the database column balanco_acoes_depedencia.fluxograma_item_real_id
		 * @var integer intFluxogramaItemRealId
		 */
		protected $intFluxogramaItemRealId;
		const FluxogramaItemRealIdDefault = null;


		/**
		 * Protected member variable that maps to the database column balanco_acoes_depedencia.balanco_acoes_id
		 * @var integer intBalancoAcoesId
		 */
		protected $intBalancoAcoesId;
		const BalancoAcoesIdDefault = null;


		/**
		 * Protected member variable that maps to the database column balanco_acoes_depedencia.quantidade_disponibilizada
		 * @var integer intQuantidadeDisponibilizada
		 */
		protected $intQuantidadeDisponibilizada;
		const QuantidadeDisponibilizadaDefault = null;


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
		 * in the database column balanco_acoes_depedencia.fluxograma_item_real_id.
		 *
		 * NOTE: Always use the FluxogramaItemReal property getter to correctly retrieve this FluxogramaItemReal object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var FluxogramaItemReal objFluxogramaItemReal
		 */
		protected $objFluxogramaItemReal;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column balanco_acoes_depedencia.balanco_acoes_id.
		 *
		 * NOTE: Always use the BalancoAcoes property getter to correctly retrieve this BalancoAcoes object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var BalancoAcoes objBalancoAcoes
		 */
		protected $objBalancoAcoes;





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
		 * Load a BalancoAcoesDepedencia from PK Info
		 * @param integer $intId
		 * @return BalancoAcoesDepedencia
		 */
		public static function Load($intId) {
			// Use QuerySingle to Perform the Query
			return BalancoAcoesDepedencia::QuerySingle(
				QQ::Equal(QQN::BalancoAcoesDepedencia()->Id, $intId)
			);
		}

		/**
		 * Load all BalancoAcoesDepedencias
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return BalancoAcoesDepedencia[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			// Call BalancoAcoesDepedencia::QueryArray to perform the LoadAll query
			try {
				return BalancoAcoesDepedencia::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all BalancoAcoesDepedencias
		 * @return int
		 */
		public static function CountAll() {
			// Call BalancoAcoesDepedencia::QueryCount to perform the CountAll query
			return BalancoAcoesDepedencia::QueryCount(QQ::All());
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
			$objDatabase = BalancoAcoesDepedencia::GetDatabase();

			// Create/Build out the QueryBuilder object with BalancoAcoesDepedencia-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'balanco_acoes_depedencia');
			BalancoAcoesDepedencia::GetSelectFields($objQueryBuilder);
			$objQueryBuilder->AddFromItem('balanco_acoes_depedencia');

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
		 * Static Qcodo Query method to query for a single BalancoAcoesDepedencia object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return BalancoAcoesDepedencia the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = BalancoAcoesDepedencia::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Instantiate a new BalancoAcoesDepedencia object and return it

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = BalancoAcoesDepedencia::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return BalancoAcoesDepedencia::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcodo Query method to query for an array of BalancoAcoesDepedencia objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return BalancoAcoesDepedencia[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = BalancoAcoesDepedencia::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return BalancoAcoesDepedencia::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
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
				$strQuery = BalancoAcoesDepedencia::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
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
		 * Static Qcodo Query method to query for a count of BalancoAcoesDepedencia objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = BalancoAcoesDepedencia::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = BalancoAcoesDepedencia::GetDatabase();

			// Lookup the QCache for This Query Statement
			$objCache = new QCache('query', 'balanco_acoes_depedencia_' . serialize($strConditions));
			if (!($strQuery = $objCache->GetData())) {
				// Not Found -- Go ahead and Create/Build out a new QueryBuilder object with BalancoAcoesDepedencia-specific fields
				$objQueryBuilder = new QQueryBuilder($objDatabase);
				BalancoAcoesDepedencia::GetSelectFields($objQueryBuilder);
				BalancoAcoesDepedencia::GetFromFields($objQueryBuilder);

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
			return BalancoAcoesDepedencia::InstantiateDbResult($objDbResult);
		}*/

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this BalancoAcoesDepedencia
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'balanco_acoes_depedencia';
				$strAliasPrefix = '';
			}

			$objBuilder->AddSelectItem($strTableName, 'id', $strAliasPrefix . 'id');
			$objBuilder->AddSelectItem($strTableName, 'fluxograma_item_real_id', $strAliasPrefix . 'fluxograma_item_real_id');
			$objBuilder->AddSelectItem($strTableName, 'balanco_acoes_id', $strAliasPrefix . 'balanco_acoes_id');
			$objBuilder->AddSelectItem($strTableName, 'quantidade_disponibilizada', $strAliasPrefix . 'quantidade_disponibilizada');
		}




		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a BalancoAcoesDepedencia from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this BalancoAcoesDepedencia::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param QDatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $objPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return BalancoAcoesDepedencia
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $objPreviousItem = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow)
				return null;


			// Create a new instance of the BalancoAcoesDepedencia object
			$objToReturn = new BalancoAcoesDepedencia();
			$objToReturn->__blnRestored = true;

			$strAliasName = array_key_exists($strAliasPrefix . 'id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'id'] : $strAliasPrefix . 'id';
			$objToReturn->intId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'fluxograma_item_real_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'fluxograma_item_real_id'] : $strAliasPrefix . 'fluxograma_item_real_id';
			$objToReturn->intFluxogramaItemRealId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'balanco_acoes_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'balanco_acoes_id'] : $strAliasPrefix . 'balanco_acoes_id';
			$objToReturn->intBalancoAcoesId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'quantidade_disponibilizada', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'quantidade_disponibilizada'] : $strAliasPrefix . 'quantidade_disponibilizada';
			$objToReturn->intQuantidadeDisponibilizada = $objDbRow->GetColumn($strAliasName, 'Integer');

			// Instantiate Virtual Attributes
			foreach ($objDbRow->GetColumnNameArray() as $strColumnName => $mixValue) {
				$strVirtualPrefix = $strAliasPrefix . '__';
				$strVirtualPrefixLength = strlen($strVirtualPrefix);
				if (substr($strColumnName, 0, $strVirtualPrefixLength) == $strVirtualPrefix)
					$objToReturn->__strVirtualAttributeArray[substr($strColumnName, $strVirtualPrefixLength)] = $mixValue;
			}

			// Prepare to Check for Early/Virtual Binding
			if (!$strAliasPrefix)
				$strAliasPrefix = 'balanco_acoes_depedencia__';

			// Check for FluxogramaItemReal Early Binding
			$strAlias = $strAliasPrefix . 'fluxograma_item_real_id__id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objFluxogramaItemReal = FluxogramaItemReal::InstantiateDbRow($objDbRow, $strAliasPrefix . 'fluxograma_item_real_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for BalancoAcoes Early Binding
			$strAlias = $strAliasPrefix . 'balanco_acoes_id__id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objBalancoAcoes = BalancoAcoes::InstantiateDbRow($objDbRow, $strAliasPrefix . 'balanco_acoes_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);




			return $objToReturn;
		}

		/**
		 * Instantiate an array of BalancoAcoesDepedencias from a Database Result
		 * @param QDatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return BalancoAcoesDepedencia[]
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
					$objItem = BalancoAcoesDepedencia::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objLastRowItem, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
						$objLastRowItem = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = BalancoAcoesDepedencia::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate a single BalancoAcoesDepedencia object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return BalancoAcoesDepedencia next row resulting from the query
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
			return BalancoAcoesDepedencia::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, null, $strColumnAliasArray);
		}




		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////
			
		/**
		 * Load a single BalancoAcoesDepedencia object,
		 * by Id Index(es)
		 * @param integer $intId
		 * @return BalancoAcoesDepedencia
		*/
		public static function LoadById($intId, $objOptionalClauses = null) {
			return BalancoAcoesDepedencia::QuerySingle(
				QQ::Equal(QQN::BalancoAcoesDepedencia()->Id, $intId)
			, $objOptionalClauses
			);
		}
			
		/**
		 * Load an array of BalancoAcoesDepedencia objects,
		 * by FluxogramaItemRealId Index(es)
		 * @param integer $intFluxogramaItemRealId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return BalancoAcoesDepedencia[]
		*/
		public static function LoadArrayByFluxogramaItemRealId($intFluxogramaItemRealId, $objOptionalClauses = null) {
			// Call BalancoAcoesDepedencia::QueryArray to perform the LoadArrayByFluxogramaItemRealId query
			try {
				return BalancoAcoesDepedencia::QueryArray(
					QQ::Equal(QQN::BalancoAcoesDepedencia()->FluxogramaItemRealId, $intFluxogramaItemRealId),
					$objOptionalClauses
					);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count BalancoAcoesDepedencias
		 * by FluxogramaItemRealId Index(es)
		 * @param integer $intFluxogramaItemRealId
		 * @return int
		*/
		public static function CountByFluxogramaItemRealId($intFluxogramaItemRealId, $objOptionalClauses = null) {
			// Call BalancoAcoesDepedencia::QueryCount to perform the CountByFluxogramaItemRealId query
			return BalancoAcoesDepedencia::QueryCount(
				QQ::Equal(QQN::BalancoAcoesDepedencia()->FluxogramaItemRealId, $intFluxogramaItemRealId)
			, $objOptionalClauses
			);
		}
			
		/**
		 * Load an array of BalancoAcoesDepedencia objects,
		 * by BalancoAcoesId Index(es)
		 * @param integer $intBalancoAcoesId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return BalancoAcoesDepedencia[]
		*/
		public static function LoadArrayByBalancoAcoesId($intBalancoAcoesId, $objOptionalClauses = null) {
			// Call BalancoAcoesDepedencia::QueryArray to perform the LoadArrayByBalancoAcoesId query
			try {
				return BalancoAcoesDepedencia::QueryArray(
					QQ::Equal(QQN::BalancoAcoesDepedencia()->BalancoAcoesId, $intBalancoAcoesId),
					$objOptionalClauses
					);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count BalancoAcoesDepedencias
		 * by BalancoAcoesId Index(es)
		 * @param integer $intBalancoAcoesId
		 * @return int
		*/
		public static function CountByBalancoAcoesId($intBalancoAcoesId, $objOptionalClauses = null) {
			// Call BalancoAcoesDepedencia::QueryCount to perform the CountByBalancoAcoesId query
			return BalancoAcoesDepedencia::QueryCount(
				QQ::Equal(QQN::BalancoAcoesDepedencia()->BalancoAcoesId, $intBalancoAcoesId)
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
		 * Save this BalancoAcoesDepedencia
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = BalancoAcoesDepedencia::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `balanco_acoes_depedencia` (
							`fluxograma_item_real_id`,
							`balanco_acoes_id`,
							`quantidade_disponibilizada`
						) VALUES (
							' . $objDatabase->SqlVariable($this->intFluxogramaItemRealId) . ',
							' . $objDatabase->SqlVariable($this->intBalancoAcoesId) . ',
							' . $objDatabase->SqlVariable($this->intQuantidadeDisponibilizada) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intId = $objDatabase->InsertId('balanco_acoes_depedencia', 'id');

					// Journaling
					if ($objDatabase->JournalingDatabase) $this->Journal('INSERT');

				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`balanco_acoes_depedencia`
						SET
							`fluxograma_item_real_id` = ' . $objDatabase->SqlVariable($this->intFluxogramaItemRealId) . ',
							`balanco_acoes_id` = ' . $objDatabase->SqlVariable($this->intBalancoAcoesId) . ',
							`quantidade_disponibilizada` = ' . $objDatabase->SqlVariable($this->intQuantidadeDisponibilizada) . '
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
		 * Delete this BalancoAcoesDepedencia
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this BalancoAcoesDepedencia with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = BalancoAcoesDepedencia::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`balanco_acoes_depedencia`
				WHERE
					`id` = ' . $objDatabase->SqlVariable($this->intId) . '');

			// Journaling
			if ($objDatabase->JournalingDatabase) $this->Journal('DELETE');
		}

		/**
		 * Delete all BalancoAcoesDepedencias
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = BalancoAcoesDepedencia::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`balanco_acoes_depedencia`');
		}

		/**
		 * Truncate balanco_acoes_depedencia table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = BalancoAcoesDepedencia::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `balanco_acoes_depedencia`');
		}

		/**
		 * Reload this BalancoAcoesDepedencia from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved BalancoAcoesDepedencia object.');

			// Reload the Object
			$objReloaded = BalancoAcoesDepedencia::Load($this->intId);

			// Update $this's local variables to match
			$this->FluxogramaItemRealId = $objReloaded->FluxogramaItemRealId;
			$this->BalancoAcoesId = $objReloaded->BalancoAcoesId;
			$this->intQuantidadeDisponibilizada = $objReloaded->intQuantidadeDisponibilizada;
		}

		/**
		 * Journals the current object into the Log database.
		 * Used internally as a helper method.
		 * @param string $strJournalCommand
		 */
		public function Journal($strJournalCommand) {
			$objDatabase = BalancoAcoesDepedencia::GetDatabase()->JournalingDatabase;

			$objDatabase->NonQuery('
				INSERT INTO `balanco_acoes_depedencia` (
					`id`,
					`fluxograma_item_real_id`,
					`balanco_acoes_id`,
					`quantidade_disponibilizada`,
					__sys_login_id,
					__sys_action,
					__sys_date
				) VALUES (
					' . $objDatabase->SqlVariable($this->intId) . ',
					' . $objDatabase->SqlVariable($this->intFluxogramaItemRealId) . ',
					' . $objDatabase->SqlVariable($this->intBalancoAcoesId) . ',
					' . $objDatabase->SqlVariable($this->intQuantidadeDisponibilizada) . ',
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
		 * @return BalancoAcoesDepedencia[]
		 */
		public static function GetJournalForId($intId) {
			$objDatabase = BalancoAcoesDepedencia::GetDatabase()->JournalingDatabase;

			$objResult = $objDatabase->Query('SELECT * FROM balanco_acoes_depedencia WHERE id = ' .
				$objDatabase->SqlVariable($intId) . ' ORDER BY __sys_date');

			return BalancoAcoesDepedencia::InstantiateDbResult($objResult);
		}

		/**
		 * Gets the historical journal for this object from the log database.
		 * Objects will have VirtualAttributes available to lookup login, date, and action information from the journal object.
		 * @return BalancoAcoesDepedencia[]
		 */
		public function GetJournal() {
			return BalancoAcoesDepedencia::GetJournalForId($this->intId);
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

				case 'FluxogramaItemRealId':
					// Gets the value for intFluxogramaItemRealId (Not Null)
					// @return integer
					return $this->intFluxogramaItemRealId;

				case 'BalancoAcoesId':
					// Gets the value for intBalancoAcoesId (Not Null)
					// @return integer
					return $this->intBalancoAcoesId;

				case 'QuantidadeDisponibilizada':
					// Gets the value for intQuantidadeDisponibilizada (Not Null)
					// @return integer
					return $this->intQuantidadeDisponibilizada;


				///////////////////
				// Member Objects
				///////////////////
				case 'FluxogramaItemReal':
					// Gets the value for the FluxogramaItemReal object referenced by intFluxogramaItemRealId (Not Null)
					// @return FluxogramaItemReal
					try {
						if ((!$this->objFluxogramaItemReal) && (!is_null($this->intFluxogramaItemRealId)))
							$this->objFluxogramaItemReal = FluxogramaItemReal::Load($this->intFluxogramaItemRealId);
						return $this->objFluxogramaItemReal;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'BalancoAcoes':
					// Gets the value for the BalancoAcoes object referenced by intBalancoAcoesId (Not Null)
					// @return BalancoAcoes
					try {
						if ((!$this->objBalancoAcoes) && (!is_null($this->intBalancoAcoesId)))
							$this->objBalancoAcoes = BalancoAcoes::Load($this->intBalancoAcoesId);
						return $this->objBalancoAcoes;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				////////////////////////////
				// Virtual Object References (Many to Many and Reverse References)
				// (If restored via a "Many-to" expansion)
				////////////////////////////


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
				case 'FluxogramaItemRealId':
					// Sets the value for intFluxogramaItemRealId (Not Null)
					// @param integer $mixValue
					// @return integer
					try {
						$this->objFluxogramaItemReal = null;
						return ($this->intFluxogramaItemRealId = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'BalancoAcoesId':
					// Sets the value for intBalancoAcoesId (Not Null)
					// @param integer $mixValue
					// @return integer
					try {
						$this->objBalancoAcoes = null;
						return ($this->intBalancoAcoesId = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'QuantidadeDisponibilizada':
					// Sets the value for intQuantidadeDisponibilizada (Not Null)
					// @param integer $mixValue
					// @return integer
					try {
						return ($this->intQuantidadeDisponibilizada = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				///////////////////
				// Member Objects
				///////////////////
				case 'FluxogramaItemReal':
					// Sets the value for the FluxogramaItemReal object referenced by intFluxogramaItemRealId (Not Null)
					// @param FluxogramaItemReal $mixValue
					// @return FluxogramaItemReal
					if (is_null($mixValue)) {
						$this->intFluxogramaItemRealId = null;
						$this->objFluxogramaItemReal = null;
						return null;
					} else {
						// Make sure $mixValue actually is a FluxogramaItemReal object
						try {
							$mixValue = QType::Cast($mixValue, 'FluxogramaItemReal');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						} 

						// Make sure $mixValue is a SAVED FluxogramaItemReal object
						if (is_null($mixValue->Id))
							throw new QCallerException('Unable to set an unsaved FluxogramaItemReal for this BalancoAcoesDepedencia');

						// Update Local Member Variables
						$this->objFluxogramaItemReal = $mixValue;
						$this->intFluxogramaItemRealId = $mixValue->Id;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'BalancoAcoes':
					// Sets the value for the BalancoAcoes object referenced by intBalancoAcoesId (Not Null)
					// @param BalancoAcoes $mixValue
					// @return BalancoAcoes
					if (is_null($mixValue)) {
						$this->intBalancoAcoesId = null;
						$this->objBalancoAcoes = null;
						return null;
					} else {
						// Make sure $mixValue actually is a BalancoAcoes object
						try {
							$mixValue = QType::Cast($mixValue, 'BalancoAcoes');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						} 

						// Make sure $mixValue is a SAVED BalancoAcoes object
						if (is_null($mixValue->Id))
							throw new QCallerException('Unable to set an unsaved BalancoAcoes for this BalancoAcoesDepedencia');

						// Update Local Member Variables
						$this->objBalancoAcoes = $mixValue;
						$this->intBalancoAcoesId = $mixValue->Id;

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





		////////////////////////////////////////
		// METHODS for SOAP-BASED WEB SERVICES
		////////////////////////////////////////

		public static function GetSoapComplexTypeXml() {
			$strToReturn = '<complexType name="BalancoAcoesDepedencia"><sequence>';
			$strToReturn .= '<element name="Id" type="xsd:int"/>';
			$strToReturn .= '<element name="FluxogramaItemReal" type="xsd1:FluxogramaItemReal"/>';
			$strToReturn .= '<element name="BalancoAcoes" type="xsd1:BalancoAcoes"/>';
			$strToReturn .= '<element name="QuantidadeDisponibilizada" type="xsd:int"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('BalancoAcoesDepedencia', $strComplexTypeArray)) {
				$strComplexTypeArray['BalancoAcoesDepedencia'] = BalancoAcoesDepedencia::GetSoapComplexTypeXml();
				FluxogramaItemReal::AlterSoapComplexTypeArray($strComplexTypeArray);
				BalancoAcoes::AlterSoapComplexTypeArray($strComplexTypeArray);
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, BalancoAcoesDepedencia::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new BalancoAcoesDepedencia();
			if (property_exists($objSoapObject, 'Id'))
				$objToReturn->intId = $objSoapObject->Id;
			if ((property_exists($objSoapObject, 'FluxogramaItemReal')) &&
				($objSoapObject->FluxogramaItemReal))
				$objToReturn->FluxogramaItemReal = FluxogramaItemReal::GetObjectFromSoapObject($objSoapObject->FluxogramaItemReal);
			if ((property_exists($objSoapObject, 'BalancoAcoes')) &&
				($objSoapObject->BalancoAcoes))
				$objToReturn->BalancoAcoes = BalancoAcoes::GetObjectFromSoapObject($objSoapObject->BalancoAcoes);
			if (property_exists($objSoapObject, 'QuantidadeDisponibilizada'))
				$objToReturn->intQuantidadeDisponibilizada = $objSoapObject->QuantidadeDisponibilizada;
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, BalancoAcoesDepedencia::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->objFluxogramaItemReal)
				$objObject->objFluxogramaItemReal = FluxogramaItemReal::GetSoapObjectFromObject($objObject->objFluxogramaItemReal, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intFluxogramaItemRealId = null;
			if ($objObject->objBalancoAcoes)
				$objObject->objBalancoAcoes = BalancoAcoes::GetSoapObjectFromObject($objObject->objBalancoAcoes, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intBalancoAcoesId = null;
			return $objObject;
		}




	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCODO QUERY
	/////////////////////////////////////

	/**
	 * @property-read QQNode $Id
	 * @property-read QQNode $FluxogramaItemRealId
	 * @property-read QQNodeFluxogramaItemReal $FluxogramaItemReal
	 * @property-read QQNode $BalancoAcoesId
	 * @property-read QQNodeBalancoAcoes $BalancoAcoes
	 * @property-read QQNode $QuantidadeDisponibilizada
	 */
	class QQNodeBalancoAcoesDepedencia extends QQNode {
		protected $strTableName = 'balanco_acoes_depedencia';
		protected $strPrimaryKey = 'id';
		protected $strClassName = 'BalancoAcoesDepedencia';
		public function __get($strName) {
			switch ($strName) {
				case 'Id':
					return new QQNode('id', 'Id', 'integer', $this);
				case 'FluxogramaItemRealId':
					return new QQNode('fluxograma_item_real_id', 'FluxogramaItemRealId', 'integer', $this);
				case 'FluxogramaItemReal':
					return new QQNodeFluxogramaItemReal('fluxograma_item_real_id', 'FluxogramaItemReal', 'integer', $this);
				case 'BalancoAcoesId':
					return new QQNode('balanco_acoes_id', 'BalancoAcoesId', 'integer', $this);
				case 'BalancoAcoes':
					return new QQNodeBalancoAcoes('balanco_acoes_id', 'BalancoAcoes', 'integer', $this);
				case 'QuantidadeDisponibilizada':
					return new QQNode('quantidade_disponibilizada', 'QuantidadeDisponibilizada', 'integer', $this);

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
	 * @property-read QQNode $FluxogramaItemRealId
	 * @property-read QQNodeFluxogramaItemReal $FluxogramaItemReal
	 * @property-read QQNode $BalancoAcoesId
	 * @property-read QQNodeBalancoAcoes $BalancoAcoes
	 * @property-read QQNode $QuantidadeDisponibilizada
	 * @property-read QQNode $_PrimaryKeyNode
	 */
	class QQReverseReferenceNodeBalancoAcoesDepedencia extends QQReverseReferenceNode {
		protected $strTableName = 'balanco_acoes_depedencia';
		protected $strPrimaryKey = 'id';
		protected $strClassName = 'BalancoAcoesDepedencia';
		public function __get($strName) {
			switch ($strName) {
				case 'Id':
					return new QQNode('id', 'Id', 'integer', $this);
				case 'FluxogramaItemRealId':
					return new QQNode('fluxograma_item_real_id', 'FluxogramaItemRealId', 'integer', $this);
				case 'FluxogramaItemReal':
					return new QQNodeFluxogramaItemReal('fluxograma_item_real_id', 'FluxogramaItemReal', 'integer', $this);
				case 'BalancoAcoesId':
					return new QQNode('balanco_acoes_id', 'BalancoAcoesId', 'integer', $this);
				case 'BalancoAcoes':
					return new QQNodeBalancoAcoes('balanco_acoes_id', 'BalancoAcoes', 'integer', $this);
				case 'QuantidadeDisponibilizada':
					return new QQNode('quantidade_disponibilizada', 'QuantidadeDisponibilizada', 'integer', $this);

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