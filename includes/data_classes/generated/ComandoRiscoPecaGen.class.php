<?php
	/**
	 * The abstract ComandoRiscoPecaGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the ComandoRiscoPeca subclass which
	 * extends this ComandoRiscoPecaGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the ComandoRiscoPeca class.
	 * 
	 * @package My Application
	 * @subpackage GeneratedDataObjects
	 * @property integer $Id the value for intId (Read-Only PK)
	 * @property integer $QuantidadeReal the value for intQuantidadeReal (Not Null)
	 * @property double $Peso the value for fltPeso (Not Null)
	 * @property integer $ComandoRiscoId the value for intComandoRiscoId (Not Null)
	 * @property integer $ComandoPecaId the value for intComandoPecaId (Not Null)
	 * @property ComandoRisco $ComandoRisco the value for the ComandoRisco object referenced by intComandoRiscoId (Not Null)
	 * @property ComandoPeca $ComandoPeca the value for the ComandoPeca object referenced by intComandoPecaId (Not Null)
	 * @property boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class ComandoRiscoPecaGen extends QBaseClass {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////
		
		/**
		 * Protected member variable that maps to the database PK Identity column comando_risco_peca.id
		 * @var integer intId
		 */
		protected $intId;
		const IdDefault = null;


		/**
		 * Protected member variable that maps to the database column comando_risco_peca.quantidade_real
		 * @var integer intQuantidadeReal
		 */
		protected $intQuantidadeReal;
		const QuantidadeRealDefault = null;


		/**
		 * Protected member variable that maps to the database column comando_risco_peca.peso
		 * @var double fltPeso
		 */
		protected $fltPeso;
		const PesoDefault = null;


		/**
		 * Protected member variable that maps to the database column comando_risco_peca.comando_risco_id
		 * @var integer intComandoRiscoId
		 */
		protected $intComandoRiscoId;
		const ComandoRiscoIdDefault = null;


		/**
		 * Protected member variable that maps to the database column comando_risco_peca.comando_peca_id
		 * @var integer intComandoPecaId
		 */
		protected $intComandoPecaId;
		const ComandoPecaIdDefault = null;


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
		 * in the database column comando_risco_peca.comando_risco_id.
		 *
		 * NOTE: Always use the ComandoRisco property getter to correctly retrieve this ComandoRisco object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var ComandoRisco objComandoRisco
		 */
		protected $objComandoRisco;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column comando_risco_peca.comando_peca_id.
		 *
		 * NOTE: Always use the ComandoPeca property getter to correctly retrieve this ComandoPeca object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var ComandoPeca objComandoPeca
		 */
		protected $objComandoPeca;





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
		 * Load a ComandoRiscoPeca from PK Info
		 * @param integer $intId
		 * @return ComandoRiscoPeca
		 */
		public static function Load($intId) {
			// Use QuerySingle to Perform the Query
			return ComandoRiscoPeca::QuerySingle(
				QQ::Equal(QQN::ComandoRiscoPeca()->Id, $intId)
			);
		}

		/**
		 * Load all ComandoRiscoPecas
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return ComandoRiscoPeca[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			// Call ComandoRiscoPeca::QueryArray to perform the LoadAll query
			try {
				return ComandoRiscoPeca::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all ComandoRiscoPecas
		 * @return int
		 */
		public static function CountAll() {
			// Call ComandoRiscoPeca::QueryCount to perform the CountAll query
			return ComandoRiscoPeca::QueryCount(QQ::All());
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
			$objDatabase = ComandoRiscoPeca::GetDatabase();

			// Create/Build out the QueryBuilder object with ComandoRiscoPeca-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'comando_risco_peca');
			ComandoRiscoPeca::GetSelectFields($objQueryBuilder);
			$objQueryBuilder->AddFromItem('comando_risco_peca');

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
		 * Static Qcodo Query method to query for a single ComandoRiscoPeca object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return ComandoRiscoPeca the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = ComandoRiscoPeca::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Instantiate a new ComandoRiscoPeca object and return it

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = ComandoRiscoPeca::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return ComandoRiscoPeca::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcodo Query method to query for an array of ComandoRiscoPeca objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return ComandoRiscoPeca[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = ComandoRiscoPeca::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return ComandoRiscoPeca::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
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
				$strQuery = ComandoRiscoPeca::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
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
		 * Static Qcodo Query method to query for a count of ComandoRiscoPeca objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = ComandoRiscoPeca::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = ComandoRiscoPeca::GetDatabase();

			// Lookup the QCache for This Query Statement
			$objCache = new QCache('query', 'comando_risco_peca_' . serialize($strConditions));
			if (!($strQuery = $objCache->GetData())) {
				// Not Found -- Go ahead and Create/Build out a new QueryBuilder object with ComandoRiscoPeca-specific fields
				$objQueryBuilder = new QQueryBuilder($objDatabase);
				ComandoRiscoPeca::GetSelectFields($objQueryBuilder);
				ComandoRiscoPeca::GetFromFields($objQueryBuilder);

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
			return ComandoRiscoPeca::InstantiateDbResult($objDbResult);
		}*/

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this ComandoRiscoPeca
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'comando_risco_peca';
				$strAliasPrefix = '';
			}

			$objBuilder->AddSelectItem($strTableName, 'id', $strAliasPrefix . 'id');
			$objBuilder->AddSelectItem($strTableName, 'quantidade_real', $strAliasPrefix . 'quantidade_real');
			$objBuilder->AddSelectItem($strTableName, 'peso', $strAliasPrefix . 'peso');
			$objBuilder->AddSelectItem($strTableName, 'comando_risco_id', $strAliasPrefix . 'comando_risco_id');
			$objBuilder->AddSelectItem($strTableName, 'comando_peca_id', $strAliasPrefix . 'comando_peca_id');
		}




		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a ComandoRiscoPeca from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this ComandoRiscoPeca::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param QDatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $objPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return ComandoRiscoPeca
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $objPreviousItem = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow)
				return null;


			// Create a new instance of the ComandoRiscoPeca object
			$objToReturn = new ComandoRiscoPeca();
			$objToReturn->__blnRestored = true;

			$strAliasName = array_key_exists($strAliasPrefix . 'id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'id'] : $strAliasPrefix . 'id';
			$objToReturn->intId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'quantidade_real', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'quantidade_real'] : $strAliasPrefix . 'quantidade_real';
			$objToReturn->intQuantidadeReal = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'peso', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'peso'] : $strAliasPrefix . 'peso';
			$objToReturn->fltPeso = $objDbRow->GetColumn($strAliasName, 'Float');
			$strAliasName = array_key_exists($strAliasPrefix . 'comando_risco_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'comando_risco_id'] : $strAliasPrefix . 'comando_risco_id';
			$objToReturn->intComandoRiscoId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'comando_peca_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'comando_peca_id'] : $strAliasPrefix . 'comando_peca_id';
			$objToReturn->intComandoPecaId = $objDbRow->GetColumn($strAliasName, 'Integer');

			// Instantiate Virtual Attributes
			foreach ($objDbRow->GetColumnNameArray() as $strColumnName => $mixValue) {
				$strVirtualPrefix = $strAliasPrefix . '__';
				$strVirtualPrefixLength = strlen($strVirtualPrefix);
				if (substr($strColumnName, 0, $strVirtualPrefixLength) == $strVirtualPrefix)
					$objToReturn->__strVirtualAttributeArray[substr($strColumnName, $strVirtualPrefixLength)] = $mixValue;
			}

			// Prepare to Check for Early/Virtual Binding
			if (!$strAliasPrefix)
				$strAliasPrefix = 'comando_risco_peca__';

			// Check for ComandoRisco Early Binding
			$strAlias = $strAliasPrefix . 'comando_risco_id__id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objComandoRisco = ComandoRisco::InstantiateDbRow($objDbRow, $strAliasPrefix . 'comando_risco_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for ComandoPeca Early Binding
			$strAlias = $strAliasPrefix . 'comando_peca_id__id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objComandoPeca = ComandoPeca::InstantiateDbRow($objDbRow, $strAliasPrefix . 'comando_peca_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);




			return $objToReturn;
		}

		/**
		 * Instantiate an array of ComandoRiscoPecas from a Database Result
		 * @param QDatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return ComandoRiscoPeca[]
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
					$objItem = ComandoRiscoPeca::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objLastRowItem, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
						$objLastRowItem = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = ComandoRiscoPeca::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate a single ComandoRiscoPeca object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return ComandoRiscoPeca next row resulting from the query
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
			return ComandoRiscoPeca::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, null, $strColumnAliasArray);
		}




		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////
			
		/**
		 * Load a single ComandoRiscoPeca object,
		 * by Id Index(es)
		 * @param integer $intId
		 * @return ComandoRiscoPeca
		*/
		public static function LoadById($intId, $objOptionalClauses = null) {
			return ComandoRiscoPeca::QuerySingle(
				QQ::Equal(QQN::ComandoRiscoPeca()->Id, $intId)
			, $objOptionalClauses
			);
		}
			
		/**
		 * Load an array of ComandoRiscoPeca objects,
		 * by ComandoRiscoId Index(es)
		 * @param integer $intComandoRiscoId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return ComandoRiscoPeca[]
		*/
		public static function LoadArrayByComandoRiscoId($intComandoRiscoId, $objOptionalClauses = null) {
			// Call ComandoRiscoPeca::QueryArray to perform the LoadArrayByComandoRiscoId query
			try {
				return ComandoRiscoPeca::QueryArray(
					QQ::Equal(QQN::ComandoRiscoPeca()->ComandoRiscoId, $intComandoRiscoId),
					$objOptionalClauses
					);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count ComandoRiscoPecas
		 * by ComandoRiscoId Index(es)
		 * @param integer $intComandoRiscoId
		 * @return int
		*/
		public static function CountByComandoRiscoId($intComandoRiscoId, $objOptionalClauses = null) {
			// Call ComandoRiscoPeca::QueryCount to perform the CountByComandoRiscoId query
			return ComandoRiscoPeca::QueryCount(
				QQ::Equal(QQN::ComandoRiscoPeca()->ComandoRiscoId, $intComandoRiscoId)
			, $objOptionalClauses
			);
		}
			
		/**
		 * Load an array of ComandoRiscoPeca objects,
		 * by ComandoPecaId Index(es)
		 * @param integer $intComandoPecaId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return ComandoRiscoPeca[]
		*/
		public static function LoadArrayByComandoPecaId($intComandoPecaId, $objOptionalClauses = null) {
			// Call ComandoRiscoPeca::QueryArray to perform the LoadArrayByComandoPecaId query
			try {
				return ComandoRiscoPeca::QueryArray(
					QQ::Equal(QQN::ComandoRiscoPeca()->ComandoPecaId, $intComandoPecaId),
					$objOptionalClauses
					);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count ComandoRiscoPecas
		 * by ComandoPecaId Index(es)
		 * @param integer $intComandoPecaId
		 * @return int
		*/
		public static function CountByComandoPecaId($intComandoPecaId, $objOptionalClauses = null) {
			// Call ComandoRiscoPeca::QueryCount to perform the CountByComandoPecaId query
			return ComandoRiscoPeca::QueryCount(
				QQ::Equal(QQN::ComandoRiscoPeca()->ComandoPecaId, $intComandoPecaId)
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
		 * Save this ComandoRiscoPeca
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = ComandoRiscoPeca::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `comando_risco_peca` (
							`quantidade_real`,
							`peso`,
							`comando_risco_id`,
							`comando_peca_id`
						) VALUES (
							' . $objDatabase->SqlVariable($this->intQuantidadeReal) . ',
							' . $objDatabase->SqlVariable($this->fltPeso) . ',
							' . $objDatabase->SqlVariable($this->intComandoRiscoId) . ',
							' . $objDatabase->SqlVariable($this->intComandoPecaId) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intId = $objDatabase->InsertId('comando_risco_peca', 'id');

					// Journaling
					if ($objDatabase->JournalingDatabase) $this->Journal('INSERT');

				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`comando_risco_peca`
						SET
							`quantidade_real` = ' . $objDatabase->SqlVariable($this->intQuantidadeReal) . ',
							`peso` = ' . $objDatabase->SqlVariable($this->fltPeso) . ',
							`comando_risco_id` = ' . $objDatabase->SqlVariable($this->intComandoRiscoId) . ',
							`comando_peca_id` = ' . $objDatabase->SqlVariable($this->intComandoPecaId) . '
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
		 * Delete this ComandoRiscoPeca
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this ComandoRiscoPeca with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = ComandoRiscoPeca::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`comando_risco_peca`
				WHERE
					`id` = ' . $objDatabase->SqlVariable($this->intId) . '');

			// Journaling
			if ($objDatabase->JournalingDatabase) $this->Journal('DELETE');
		}

		/**
		 * Delete all ComandoRiscoPecas
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = ComandoRiscoPeca::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`comando_risco_peca`');
		}

		/**
		 * Truncate comando_risco_peca table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = ComandoRiscoPeca::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `comando_risco_peca`');
		}

		/**
		 * Reload this ComandoRiscoPeca from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved ComandoRiscoPeca object.');

			// Reload the Object
			$objReloaded = ComandoRiscoPeca::Load($this->intId);

			// Update $this's local variables to match
			$this->intQuantidadeReal = $objReloaded->intQuantidadeReal;
			$this->fltPeso = $objReloaded->fltPeso;
			$this->ComandoRiscoId = $objReloaded->ComandoRiscoId;
			$this->ComandoPecaId = $objReloaded->ComandoPecaId;
		}

		/**
		 * Journals the current object into the Log database.
		 * Used internally as a helper method.
		 * @param string $strJournalCommand
		 */
		public function Journal($strJournalCommand) {
			$objDatabase = ComandoRiscoPeca::GetDatabase()->JournalingDatabase;

			$objDatabase->NonQuery('
				INSERT INTO `comando_risco_peca` (
					`id`,
					`quantidade_real`,
					`peso`,
					`comando_risco_id`,
					`comando_peca_id`,
					__sys_login_id,
					__sys_action,
					__sys_date
				) VALUES (
					' . $objDatabase->SqlVariable($this->intId) . ',
					' . $objDatabase->SqlVariable($this->intQuantidadeReal) . ',
					' . $objDatabase->SqlVariable($this->fltPeso) . ',
					' . $objDatabase->SqlVariable($this->intComandoRiscoId) . ',
					' . $objDatabase->SqlVariable($this->intComandoPecaId) . ',
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
		 * @return ComandoRiscoPeca[]
		 */
		public static function GetJournalForId($intId) {
			$objDatabase = ComandoRiscoPeca::GetDatabase()->JournalingDatabase;

			$objResult = $objDatabase->Query('SELECT * FROM comando_risco_peca WHERE id = ' .
				$objDatabase->SqlVariable($intId) . ' ORDER BY __sys_date');

			return ComandoRiscoPeca::InstantiateDbResult($objResult);
		}

		/**
		 * Gets the historical journal for this object from the log database.
		 * Objects will have VirtualAttributes available to lookup login, date, and action information from the journal object.
		 * @return ComandoRiscoPeca[]
		 */
		public function GetJournal() {
			return ComandoRiscoPeca::GetJournalForId($this->intId);
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

				case 'QuantidadeReal':
					// Gets the value for intQuantidadeReal (Not Null)
					// @return integer
					return $this->intQuantidadeReal;

				case 'Peso':
					// Gets the value for fltPeso (Not Null)
					// @return double
					return $this->fltPeso;

				case 'ComandoRiscoId':
					// Gets the value for intComandoRiscoId (Not Null)
					// @return integer
					return $this->intComandoRiscoId;

				case 'ComandoPecaId':
					// Gets the value for intComandoPecaId (Not Null)
					// @return integer
					return $this->intComandoPecaId;


				///////////////////
				// Member Objects
				///////////////////
				case 'ComandoRisco':
					// Gets the value for the ComandoRisco object referenced by intComandoRiscoId (Not Null)
					// @return ComandoRisco
					try {
						if ((!$this->objComandoRisco) && (!is_null($this->intComandoRiscoId)))
							$this->objComandoRisco = ComandoRisco::Load($this->intComandoRiscoId);
						return $this->objComandoRisco;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'ComandoPeca':
					// Gets the value for the ComandoPeca object referenced by intComandoPecaId (Not Null)
					// @return ComandoPeca
					try {
						if ((!$this->objComandoPeca) && (!is_null($this->intComandoPecaId)))
							$this->objComandoPeca = ComandoPeca::Load($this->intComandoPecaId);
						return $this->objComandoPeca;
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
				case 'QuantidadeReal':
					// Sets the value for intQuantidadeReal (Not Null)
					// @param integer $mixValue
					// @return integer
					try {
						return ($this->intQuantidadeReal = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Peso':
					// Sets the value for fltPeso (Not Null)
					// @param double $mixValue
					// @return double
					try {
						return ($this->fltPeso = QType::Cast($mixValue, QType::Float));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'ComandoRiscoId':
					// Sets the value for intComandoRiscoId (Not Null)
					// @param integer $mixValue
					// @return integer
					try {
						$this->objComandoRisco = null;
						return ($this->intComandoRiscoId = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'ComandoPecaId':
					// Sets the value for intComandoPecaId (Not Null)
					// @param integer $mixValue
					// @return integer
					try {
						$this->objComandoPeca = null;
						return ($this->intComandoPecaId = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				///////////////////
				// Member Objects
				///////////////////
				case 'ComandoRisco':
					// Sets the value for the ComandoRisco object referenced by intComandoRiscoId (Not Null)
					// @param ComandoRisco $mixValue
					// @return ComandoRisco
					if (is_null($mixValue)) {
						$this->intComandoRiscoId = null;
						$this->objComandoRisco = null;
						return null;
					} else {
						// Make sure $mixValue actually is a ComandoRisco object
						try {
							$mixValue = QType::Cast($mixValue, 'ComandoRisco');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						} 

						// Make sure $mixValue is a SAVED ComandoRisco object
						if (is_null($mixValue->Id))
							throw new QCallerException('Unable to set an unsaved ComandoRisco for this ComandoRiscoPeca');

						// Update Local Member Variables
						$this->objComandoRisco = $mixValue;
						$this->intComandoRiscoId = $mixValue->Id;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'ComandoPeca':
					// Sets the value for the ComandoPeca object referenced by intComandoPecaId (Not Null)
					// @param ComandoPeca $mixValue
					// @return ComandoPeca
					if (is_null($mixValue)) {
						$this->intComandoPecaId = null;
						$this->objComandoPeca = null;
						return null;
					} else {
						// Make sure $mixValue actually is a ComandoPeca object
						try {
							$mixValue = QType::Cast($mixValue, 'ComandoPeca');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						} 

						// Make sure $mixValue is a SAVED ComandoPeca object
						if (is_null($mixValue->Id))
							throw new QCallerException('Unable to set an unsaved ComandoPeca for this ComandoRiscoPeca');

						// Update Local Member Variables
						$this->objComandoPeca = $mixValue;
						$this->intComandoPecaId = $mixValue->Id;

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
			$strToReturn = '<complexType name="ComandoRiscoPeca"><sequence>';
			$strToReturn .= '<element name="Id" type="xsd:int"/>';
			$strToReturn .= '<element name="QuantidadeReal" type="xsd:int"/>';
			$strToReturn .= '<element name="Peso" type="xsd:float"/>';
			$strToReturn .= '<element name="ComandoRisco" type="xsd1:ComandoRisco"/>';
			$strToReturn .= '<element name="ComandoPeca" type="xsd1:ComandoPeca"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('ComandoRiscoPeca', $strComplexTypeArray)) {
				$strComplexTypeArray['ComandoRiscoPeca'] = ComandoRiscoPeca::GetSoapComplexTypeXml();
				ComandoRisco::AlterSoapComplexTypeArray($strComplexTypeArray);
				ComandoPeca::AlterSoapComplexTypeArray($strComplexTypeArray);
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, ComandoRiscoPeca::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new ComandoRiscoPeca();
			if (property_exists($objSoapObject, 'Id'))
				$objToReturn->intId = $objSoapObject->Id;
			if (property_exists($objSoapObject, 'QuantidadeReal'))
				$objToReturn->intQuantidadeReal = $objSoapObject->QuantidadeReal;
			if (property_exists($objSoapObject, 'Peso'))
				$objToReturn->fltPeso = $objSoapObject->Peso;
			if ((property_exists($objSoapObject, 'ComandoRisco')) &&
				($objSoapObject->ComandoRisco))
				$objToReturn->ComandoRisco = ComandoRisco::GetObjectFromSoapObject($objSoapObject->ComandoRisco);
			if ((property_exists($objSoapObject, 'ComandoPeca')) &&
				($objSoapObject->ComandoPeca))
				$objToReturn->ComandoPeca = ComandoPeca::GetObjectFromSoapObject($objSoapObject->ComandoPeca);
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, ComandoRiscoPeca::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->objComandoRisco)
				$objObject->objComandoRisco = ComandoRisco::GetSoapObjectFromObject($objObject->objComandoRisco, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intComandoRiscoId = null;
			if ($objObject->objComandoPeca)
				$objObject->objComandoPeca = ComandoPeca::GetSoapObjectFromObject($objObject->objComandoPeca, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intComandoPecaId = null;
			return $objObject;
		}




	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCODO QUERY
	/////////////////////////////////////

	/**
	 * @property-read QQNode $Id
	 * @property-read QQNode $QuantidadeReal
	 * @property-read QQNode $Peso
	 * @property-read QQNode $ComandoRiscoId
	 * @property-read QQNodeComandoRisco $ComandoRisco
	 * @property-read QQNode $ComandoPecaId
	 * @property-read QQNodeComandoPeca $ComandoPeca
	 */
	class QQNodeComandoRiscoPeca extends QQNode {
		protected $strTableName = 'comando_risco_peca';
		protected $strPrimaryKey = 'id';
		protected $strClassName = 'ComandoRiscoPeca';
		public function __get($strName) {
			switch ($strName) {
				case 'Id':
					return new QQNode('id', 'Id', 'integer', $this);
				case 'QuantidadeReal':
					return new QQNode('quantidade_real', 'QuantidadeReal', 'integer', $this);
				case 'Peso':
					return new QQNode('peso', 'Peso', 'double', $this);
				case 'ComandoRiscoId':
					return new QQNode('comando_risco_id', 'ComandoRiscoId', 'integer', $this);
				case 'ComandoRisco':
					return new QQNodeComandoRisco('comando_risco_id', 'ComandoRisco', 'integer', $this);
				case 'ComandoPecaId':
					return new QQNode('comando_peca_id', 'ComandoPecaId', 'integer', $this);
				case 'ComandoPeca':
					return new QQNodeComandoPeca('comando_peca_id', 'ComandoPeca', 'integer', $this);

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
	 * @property-read QQNode $QuantidadeReal
	 * @property-read QQNode $Peso
	 * @property-read QQNode $ComandoRiscoId
	 * @property-read QQNodeComandoRisco $ComandoRisco
	 * @property-read QQNode $ComandoPecaId
	 * @property-read QQNodeComandoPeca $ComandoPeca
	 * @property-read QQNode $_PrimaryKeyNode
	 */
	class QQReverseReferenceNodeComandoRiscoPeca extends QQReverseReferenceNode {
		protected $strTableName = 'comando_risco_peca';
		protected $strPrimaryKey = 'id';
		protected $strClassName = 'ComandoRiscoPeca';
		public function __get($strName) {
			switch ($strName) {
				case 'Id':
					return new QQNode('id', 'Id', 'integer', $this);
				case 'QuantidadeReal':
					return new QQNode('quantidade_real', 'QuantidadeReal', 'integer', $this);
				case 'Peso':
					return new QQNode('peso', 'Peso', 'double', $this);
				case 'ComandoRiscoId':
					return new QQNode('comando_risco_id', 'ComandoRiscoId', 'integer', $this);
				case 'ComandoRisco':
					return new QQNodeComandoRisco('comando_risco_id', 'ComandoRisco', 'integer', $this);
				case 'ComandoPecaId':
					return new QQNode('comando_peca_id', 'ComandoPecaId', 'integer', $this);
				case 'ComandoPeca':
					return new QQNodeComandoPeca('comando_peca_id', 'ComandoPeca', 'integer', $this);

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