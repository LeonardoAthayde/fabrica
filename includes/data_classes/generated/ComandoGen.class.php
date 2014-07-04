<?php
	/**
	 * The abstract ComandoGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the Comando subclass which
	 * extends this ComandoGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the Comando class.
	 * 
	 * @package My Application
	 * @subpackage GeneratedDataObjects
	 * @property integer $Id the value for intId (Read-Only PK)
	 * @property string $Numero the value for strNumero (Unique)
	 * @property QDateTime $Date the value for dttDate (Not Null)
	 * @property ComandoPeca $_ComandoPeca the value for the private _objComandoPeca (Read-Only) if set due to an expansion on the comando_peca.comando_id reverse relationship
	 * @property ComandoPeca[] $_ComandoPecaArray the value for the private _objComandoPecaArray (Read-Only) if set due to an ExpandAsArray on the comando_peca.comando_id reverse relationship
	 * @property ComandoRisco $_ComandoRisco the value for the private _objComandoRisco (Read-Only) if set due to an expansion on the comando_risco.comando_id reverse relationship
	 * @property ComandoRisco[] $_ComandoRiscoArray the value for the private _objComandoRiscoArray (Read-Only) if set due to an ExpandAsArray on the comando_risco.comando_id reverse relationship
	 * @property boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class ComandoGen extends QBaseClass {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////
		
		/**
		 * Protected member variable that maps to the database PK Identity column comando.id
		 * @var integer intId
		 */
		protected $intId;
		const IdDefault = null;


		/**
		 * Protected member variable that maps to the database column comando.numero
		 * @var string strNumero
		 */
		protected $strNumero;
		const NumeroMaxLength = 150;
		const NumeroDefault = null;


		/**
		 * Protected member variable that maps to the database column comando.date
		 * @var QDateTime dttDate
		 */
		protected $dttDate;
		const DateDefault = null;


		/**
		 * Private member variable that stores a reference to a single ComandoPeca object
		 * (of type ComandoPeca), if this Comando object was restored with
		 * an expansion on the comando_peca association table.
		 * @var ComandoPeca _objComandoPeca;
		 */
		private $_objComandoPeca;

		/**
		 * Private member variable that stores a reference to an array of ComandoPeca objects
		 * (of type ComandoPeca[]), if this Comando object was restored with
		 * an ExpandAsArray on the comando_peca association table.
		 * @var ComandoPeca[] _objComandoPecaArray;
		 */
		private $_objComandoPecaArray = array();

		/**
		 * Private member variable that stores a reference to a single ComandoRisco object
		 * (of type ComandoRisco), if this Comando object was restored with
		 * an expansion on the comando_risco association table.
		 * @var ComandoRisco _objComandoRisco;
		 */
		private $_objComandoRisco;

		/**
		 * Private member variable that stores a reference to an array of ComandoRisco objects
		 * (of type ComandoRisco[]), if this Comando object was restored with
		 * an ExpandAsArray on the comando_risco association table.
		 * @var ComandoRisco[] _objComandoRiscoArray;
		 */
		private $_objComandoRiscoArray = array();

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
		 * Load a Comando from PK Info
		 * @param integer $intId
		 * @return Comando
		 */
		public static function Load($intId) {
			// Use QuerySingle to Perform the Query
			return Comando::QuerySingle(
				QQ::Equal(QQN::Comando()->Id, $intId)
			);
		}

		/**
		 * Load all Comandos
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Comando[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			// Call Comando::QueryArray to perform the LoadAll query
			try {
				return Comando::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all Comandos
		 * @return int
		 */
		public static function CountAll() {
			// Call Comando::QueryCount to perform the CountAll query
			return Comando::QueryCount(QQ::All());
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
			$objDatabase = Comando::GetDatabase();

			// Create/Build out the QueryBuilder object with Comando-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'comando');
			Comando::GetSelectFields($objQueryBuilder);
			$objQueryBuilder->AddFromItem('comando');

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
		 * Static Qcodo Query method to query for a single Comando object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Comando the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Comando::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Instantiate a new Comando object and return it

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = Comando::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return Comando::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcodo Query method to query for an array of Comando objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Comando[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Comando::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return Comando::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
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
				$strQuery = Comando::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
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
		 * Static Qcodo Query method to query for a count of Comando objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Comando::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = Comando::GetDatabase();

			// Lookup the QCache for This Query Statement
			$objCache = new QCache('query', 'comando_' . serialize($strConditions));
			if (!($strQuery = $objCache->GetData())) {
				// Not Found -- Go ahead and Create/Build out a new QueryBuilder object with Comando-specific fields
				$objQueryBuilder = new QQueryBuilder($objDatabase);
				Comando::GetSelectFields($objQueryBuilder);
				Comando::GetFromFields($objQueryBuilder);

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
			return Comando::InstantiateDbResult($objDbResult);
		}*/

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this Comando
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'comando';
				$strAliasPrefix = '';
			}

			$objBuilder->AddSelectItem($strTableName, 'id', $strAliasPrefix . 'id');
			$objBuilder->AddSelectItem($strTableName, 'numero', $strAliasPrefix . 'numero');
			$objBuilder->AddSelectItem($strTableName, 'date', $strAliasPrefix . 'date');
		}




		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a Comando from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this Comando::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param QDatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $objPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return Comando
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
					$strAliasPrefix = 'comando__';


				$strAlias = $strAliasPrefix . 'comandopeca__id';
				$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
				if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
					(!is_null($objDbRow->GetColumn($strAliasName)))) {
					if ($intPreviousChildItemCount = count($objPreviousItem->_objComandoPecaArray)) {
						$objPreviousChildItem = $objPreviousItem->_objComandoPecaArray[$intPreviousChildItemCount - 1];
						$objChildItem = ComandoPeca::InstantiateDbRow($objDbRow, $strAliasPrefix . 'comandopeca__', $strExpandAsArrayNodes, $objPreviousChildItem, $strColumnAliasArray);
						if ($objChildItem)
							$objPreviousItem->_objComandoPecaArray[] = $objChildItem;
					} else
						$objPreviousItem->_objComandoPecaArray[] = ComandoPeca::InstantiateDbRow($objDbRow, $strAliasPrefix . 'comandopeca__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
					$blnExpandedViaArray = true;
				}

				$strAlias = $strAliasPrefix . 'comandorisco__id';
				$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
				if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
					(!is_null($objDbRow->GetColumn($strAliasName)))) {
					if ($intPreviousChildItemCount = count($objPreviousItem->_objComandoRiscoArray)) {
						$objPreviousChildItem = $objPreviousItem->_objComandoRiscoArray[$intPreviousChildItemCount - 1];
						$objChildItem = ComandoRisco::InstantiateDbRow($objDbRow, $strAliasPrefix . 'comandorisco__', $strExpandAsArrayNodes, $objPreviousChildItem, $strColumnAliasArray);
						if ($objChildItem)
							$objPreviousItem->_objComandoRiscoArray[] = $objChildItem;
					} else
						$objPreviousItem->_objComandoRiscoArray[] = ComandoRisco::InstantiateDbRow($objDbRow, $strAliasPrefix . 'comandorisco__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
					$blnExpandedViaArray = true;
				}

				// Either return false to signal array expansion, or check-to-reset the Alias prefix and move on
				if ($blnExpandedViaArray)
					return false;
				else if ($strAliasPrefix == 'comando__')
					$strAliasPrefix = null;
			}

			// Create a new instance of the Comando object
			$objToReturn = new Comando();
			$objToReturn->__blnRestored = true;

			$strAliasName = array_key_exists($strAliasPrefix . 'id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'id'] : $strAliasPrefix . 'id';
			$objToReturn->intId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'numero', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'numero'] : $strAliasPrefix . 'numero';
			$objToReturn->strNumero = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'date', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'date'] : $strAliasPrefix . 'date';
			$objToReturn->dttDate = $objDbRow->GetColumn($strAliasName, 'Date');

			// Instantiate Virtual Attributes
			foreach ($objDbRow->GetColumnNameArray() as $strColumnName => $mixValue) {
				$strVirtualPrefix = $strAliasPrefix . '__';
				$strVirtualPrefixLength = strlen($strVirtualPrefix);
				if (substr($strColumnName, 0, $strVirtualPrefixLength) == $strVirtualPrefix)
					$objToReturn->__strVirtualAttributeArray[substr($strColumnName, $strVirtualPrefixLength)] = $mixValue;
			}

			// Prepare to Check for Early/Virtual Binding
			if (!$strAliasPrefix)
				$strAliasPrefix = 'comando__';




			// Check for ComandoPeca Virtual Binding
			$strAlias = $strAliasPrefix . 'comandopeca__id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
					$objToReturn->_objComandoPecaArray[] = ComandoPeca::InstantiateDbRow($objDbRow, $strAliasPrefix . 'comandopeca__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objComandoPeca = ComandoPeca::InstantiateDbRow($objDbRow, $strAliasPrefix . 'comandopeca__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for ComandoRisco Virtual Binding
			$strAlias = $strAliasPrefix . 'comandorisco__id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
					$objToReturn->_objComandoRiscoArray[] = ComandoRisco::InstantiateDbRow($objDbRow, $strAliasPrefix . 'comandorisco__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objComandoRisco = ComandoRisco::InstantiateDbRow($objDbRow, $strAliasPrefix . 'comandorisco__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate an array of Comandos from a Database Result
		 * @param QDatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return Comando[]
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
					$objItem = Comando::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objLastRowItem, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
						$objLastRowItem = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = Comando::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate a single Comando object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return Comando next row resulting from the query
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
			return Comando::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, null, $strColumnAliasArray);
		}




		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////
			
		/**
		 * Load a single Comando object,
		 * by Id Index(es)
		 * @param integer $intId
		 * @return Comando
		*/
		public static function LoadById($intId, $objOptionalClauses = null) {
			return Comando::QuerySingle(
				QQ::Equal(QQN::Comando()->Id, $intId)
			, $objOptionalClauses
			);
		}
			
		/**
		 * Load a single Comando object,
		 * by Numero Index(es)
		 * @param string $strNumero
		 * @return Comando
		*/
		public static function LoadByNumero($strNumero, $objOptionalClauses = null) {
			return Comando::QuerySingle(
				QQ::Equal(QQN::Comando()->Numero, $strNumero)
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
		 * Save this Comando
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = Comando::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `comando` (
							`numero`,
							`date`
						) VALUES (
							' . $objDatabase->SqlVariable($this->strNumero) . ',
							' . $objDatabase->SqlVariable($this->dttDate) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intId = $objDatabase->InsertId('comando', 'id');

					// Journaling
					if ($objDatabase->JournalingDatabase) $this->Journal('INSERT');

				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`comando`
						SET
							`numero` = ' . $objDatabase->SqlVariable($this->strNumero) . ',
							`date` = ' . $objDatabase->SqlVariable($this->dttDate) . '
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
		 * Delete this Comando
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this Comando with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = Comando::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`comando`
				WHERE
					`id` = ' . $objDatabase->SqlVariable($this->intId) . '');

			// Journaling
			if ($objDatabase->JournalingDatabase) $this->Journal('DELETE');
		}

		/**
		 * Delete all Comandos
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = Comando::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`comando`');
		}

		/**
		 * Truncate comando table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = Comando::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `comando`');
		}

		/**
		 * Reload this Comando from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved Comando object.');

			// Reload the Object
			$objReloaded = Comando::Load($this->intId);

			// Update $this's local variables to match
			$this->strNumero = $objReloaded->strNumero;
			$this->dttDate = $objReloaded->dttDate;
		}

		/**
		 * Journals the current object into the Log database.
		 * Used internally as a helper method.
		 * @param string $strJournalCommand
		 */
		public function Journal($strJournalCommand) {
			$objDatabase = Comando::GetDatabase()->JournalingDatabase;

			$objDatabase->NonQuery('
				INSERT INTO `comando` (
					`id`,
					`numero`,
					`date`,
					__sys_login_id,
					__sys_action,
					__sys_date
				) VALUES (
					' . $objDatabase->SqlVariable($this->intId) . ',
					' . $objDatabase->SqlVariable($this->strNumero) . ',
					' . $objDatabase->SqlVariable($this->dttDate) . ',
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
		 * @return Comando[]
		 */
		public static function GetJournalForId($intId) {
			$objDatabase = Comando::GetDatabase()->JournalingDatabase;

			$objResult = $objDatabase->Query('SELECT * FROM comando WHERE id = ' .
				$objDatabase->SqlVariable($intId) . ' ORDER BY __sys_date');

			return Comando::InstantiateDbResult($objResult);
		}

		/**
		 * Gets the historical journal for this object from the log database.
		 * Objects will have VirtualAttributes available to lookup login, date, and action information from the journal object.
		 * @return Comando[]
		 */
		public function GetJournal() {
			return Comando::GetJournalForId($this->intId);
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

				case 'Date':
					// Gets the value for dttDate (Not Null)
					// @return QDateTime
					return $this->dttDate;


				///////////////////
				// Member Objects
				///////////////////

				////////////////////////////
				// Virtual Object References (Many to Many and Reverse References)
				// (If restored via a "Many-to" expansion)
				////////////////////////////

				case '_ComandoPeca':
					// Gets the value for the private _objComandoPeca (Read-Only)
					// if set due to an expansion on the comando_peca.comando_id reverse relationship
					// @return ComandoPeca
					return $this->_objComandoPeca;

				case '_ComandoPecaArray':
					// Gets the value for the private _objComandoPecaArray (Read-Only)
					// if set due to an ExpandAsArray on the comando_peca.comando_id reverse relationship
					// @return ComandoPeca[]
					return (array) $this->_objComandoPecaArray;

				case '_ComandoRisco':
					// Gets the value for the private _objComandoRisco (Read-Only)
					// if set due to an expansion on the comando_risco.comando_id reverse relationship
					// @return ComandoRisco
					return $this->_objComandoRisco;

				case '_ComandoRiscoArray':
					// Gets the value for the private _objComandoRiscoArray (Read-Only)
					// if set due to an ExpandAsArray on the comando_risco.comando_id reverse relationship
					// @return ComandoRisco[]
					return (array) $this->_objComandoRiscoArray;


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

				case 'Date':
					// Sets the value for dttDate (Not Null)
					// @param QDateTime $mixValue
					// @return QDateTime
					try {
						return ($this->dttDate = QType::Cast($mixValue, QType::DateTime));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				///////////////////
				// Member Objects
				///////////////////
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

			
		
		// Related Objects' Methods for ComandoPeca
		//-------------------------------------------------------------------

		/**
		 * Gets all associated ComandoPecas as an array of ComandoPeca objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return ComandoPeca[]
		*/ 
		public function GetComandoPecaArray($objOptionalClauses = null) {
			if ((is_null($this->intId)))
				return array();

			try {
				return ComandoPeca::LoadArrayByComandoId($this->intId, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated ComandoPecas
		 * @return int
		*/ 
		public function CountComandoPecas() {
			if ((is_null($this->intId)))
				return 0;

			return ComandoPeca::CountByComandoId($this->intId);
		}

		/**
		 * Associates a ComandoPeca
		 * @param ComandoPeca $objComandoPeca
		 * @return void
		*/ 
		public function AssociateComandoPeca(ComandoPeca $objComandoPeca) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateComandoPeca on this unsaved Comando.');
			if ((is_null($objComandoPeca->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateComandoPeca on this Comando with an unsaved ComandoPeca.');

			// Get the Database Object for this Class
			$objDatabase = Comando::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`comando_peca`
				SET
					`comando_id` = ' . $objDatabase->SqlVariable($this->intId) . '
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objComandoPeca->Id) . '
			');

			// Journaling (if applicable)
			if ($objDatabase->JournalingDatabase) {
				$objComandoPeca->ComandoId = $this->intId;
				$objComandoPeca->Journal('UPDATE');
			}
		}

		/**
		 * Unassociates a ComandoPeca
		 * @param ComandoPeca $objComandoPeca
		 * @return void
		*/ 
		public function UnassociateComandoPeca(ComandoPeca $objComandoPeca) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateComandoPeca on this unsaved Comando.');
			if ((is_null($objComandoPeca->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateComandoPeca on this Comando with an unsaved ComandoPeca.');

			// Get the Database Object for this Class
			$objDatabase = Comando::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`comando_peca`
				SET
					`comando_id` = null
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objComandoPeca->Id) . ' AND
					`comando_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				$objComandoPeca->ComandoId = null;
				$objComandoPeca->Journal('UPDATE');
			}
		}

		/**
		 * Unassociates all ComandoPecas
		 * @return void
		*/ 
		public function UnassociateAllComandoPecas() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateComandoPeca on this unsaved Comando.');

			// Get the Database Object for this Class
			$objDatabase = Comando::GetDatabase();

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				foreach (ComandoPeca::LoadArrayByComandoId($this->intId) as $objComandoPeca) {
					$objComandoPeca->ComandoId = null;
					$objComandoPeca->Journal('UPDATE');
				}
			}

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`comando_peca`
				SET
					`comando_id` = null
				WHERE
					`comando_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Deletes an associated ComandoPeca
		 * @param ComandoPeca $objComandoPeca
		 * @return void
		*/ 
		public function DeleteAssociatedComandoPeca(ComandoPeca $objComandoPeca) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateComandoPeca on this unsaved Comando.');
			if ((is_null($objComandoPeca->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateComandoPeca on this Comando with an unsaved ComandoPeca.');

			// Get the Database Object for this Class
			$objDatabase = Comando::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`comando_peca`
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objComandoPeca->Id) . ' AND
					`comando_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				$objComandoPeca->Journal('DELETE');
			}
		}

		/**
		 * Deletes all associated ComandoPecas
		 * @return void
		*/ 
		public function DeleteAllComandoPecas() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateComandoPeca on this unsaved Comando.');

			// Get the Database Object for this Class
			$objDatabase = Comando::GetDatabase();

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				foreach (ComandoPeca::LoadArrayByComandoId($this->intId) as $objComandoPeca) {
					$objComandoPeca->Journal('DELETE');
				}
			}

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`comando_peca`
				WHERE
					`comando_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

			
		
		// Related Objects' Methods for ComandoRisco
		//-------------------------------------------------------------------

		/**
		 * Gets all associated ComandoRiscos as an array of ComandoRisco objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return ComandoRisco[]
		*/ 
		public function GetComandoRiscoArray($objOptionalClauses = null) {
			if ((is_null($this->intId)))
				return array();

			try {
				return ComandoRisco::LoadArrayByComandoId($this->intId, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated ComandoRiscos
		 * @return int
		*/ 
		public function CountComandoRiscos() {
			if ((is_null($this->intId)))
				return 0;

			return ComandoRisco::CountByComandoId($this->intId);
		}

		/**
		 * Associates a ComandoRisco
		 * @param ComandoRisco $objComandoRisco
		 * @return void
		*/ 
		public function AssociateComandoRisco(ComandoRisco $objComandoRisco) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateComandoRisco on this unsaved Comando.');
			if ((is_null($objComandoRisco->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateComandoRisco on this Comando with an unsaved ComandoRisco.');

			// Get the Database Object for this Class
			$objDatabase = Comando::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`comando_risco`
				SET
					`comando_id` = ' . $objDatabase->SqlVariable($this->intId) . '
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objComandoRisco->Id) . '
			');

			// Journaling (if applicable)
			if ($objDatabase->JournalingDatabase) {
				$objComandoRisco->ComandoId = $this->intId;
				$objComandoRisco->Journal('UPDATE');
			}
		}

		/**
		 * Unassociates a ComandoRisco
		 * @param ComandoRisco $objComandoRisco
		 * @return void
		*/ 
		public function UnassociateComandoRisco(ComandoRisco $objComandoRisco) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateComandoRisco on this unsaved Comando.');
			if ((is_null($objComandoRisco->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateComandoRisco on this Comando with an unsaved ComandoRisco.');

			// Get the Database Object for this Class
			$objDatabase = Comando::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`comando_risco`
				SET
					`comando_id` = null
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objComandoRisco->Id) . ' AND
					`comando_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				$objComandoRisco->ComandoId = null;
				$objComandoRisco->Journal('UPDATE');
			}
		}

		/**
		 * Unassociates all ComandoRiscos
		 * @return void
		*/ 
		public function UnassociateAllComandoRiscos() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateComandoRisco on this unsaved Comando.');

			// Get the Database Object for this Class
			$objDatabase = Comando::GetDatabase();

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				foreach (ComandoRisco::LoadArrayByComandoId($this->intId) as $objComandoRisco) {
					$objComandoRisco->ComandoId = null;
					$objComandoRisco->Journal('UPDATE');
				}
			}

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`comando_risco`
				SET
					`comando_id` = null
				WHERE
					`comando_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Deletes an associated ComandoRisco
		 * @param ComandoRisco $objComandoRisco
		 * @return void
		*/ 
		public function DeleteAssociatedComandoRisco(ComandoRisco $objComandoRisco) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateComandoRisco on this unsaved Comando.');
			if ((is_null($objComandoRisco->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateComandoRisco on this Comando with an unsaved ComandoRisco.');

			// Get the Database Object for this Class
			$objDatabase = Comando::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`comando_risco`
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objComandoRisco->Id) . ' AND
					`comando_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				$objComandoRisco->Journal('DELETE');
			}
		}

		/**
		 * Deletes all associated ComandoRiscos
		 * @return void
		*/ 
		public function DeleteAllComandoRiscos() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateComandoRisco on this unsaved Comando.');

			// Get the Database Object for this Class
			$objDatabase = Comando::GetDatabase();

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				foreach (ComandoRisco::LoadArrayByComandoId($this->intId) as $objComandoRisco) {
					$objComandoRisco->Journal('DELETE');
				}
			}

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`comando_risco`
				WHERE
					`comando_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}





		////////////////////////////////////////
		// METHODS for SOAP-BASED WEB SERVICES
		////////////////////////////////////////

		public static function GetSoapComplexTypeXml() {
			$strToReturn = '<complexType name="Comando"><sequence>';
			$strToReturn .= '<element name="Id" type="xsd:int"/>';
			$strToReturn .= '<element name="Numero" type="xsd:string"/>';
			$strToReturn .= '<element name="Date" type="xsd:dateTime"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('Comando', $strComplexTypeArray)) {
				$strComplexTypeArray['Comando'] = Comando::GetSoapComplexTypeXml();
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, Comando::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new Comando();
			if (property_exists($objSoapObject, 'Id'))
				$objToReturn->intId = $objSoapObject->Id;
			if (property_exists($objSoapObject, 'Numero'))
				$objToReturn->strNumero = $objSoapObject->Numero;
			if (property_exists($objSoapObject, 'Date'))
				$objToReturn->dttDate = new QDateTime($objSoapObject->Date);
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, Comando::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->dttDate)
				$objObject->dttDate = $objObject->dttDate->__toString(QDateTime::FormatSoap);
			return $objObject;
		}




	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCODO QUERY
	/////////////////////////////////////

	/**
	 * @property-read QQNode $Id
	 * @property-read QQNode $Numero
	 * @property-read QQNode $Date
	 * @property-read QQReverseReferenceNodeComandoPeca $ComandoPeca
	 * @property-read QQReverseReferenceNodeComandoRisco $ComandoRisco
	 */
	class QQNodeComando extends QQNode {
		protected $strTableName = 'comando';
		protected $strPrimaryKey = 'id';
		protected $strClassName = 'Comando';
		public function __get($strName) {
			switch ($strName) {
				case 'Id':
					return new QQNode('id', 'Id', 'integer', $this);
				case 'Numero':
					return new QQNode('numero', 'Numero', 'string', $this);
				case 'Date':
					return new QQNode('date', 'Date', 'QDateTime', $this);
				case 'ComandoPeca':
					return new QQReverseReferenceNodeComandoPeca($this, 'comandopeca', 'reverse_reference', 'comando_id');
				case 'ComandoRisco':
					return new QQReverseReferenceNodeComandoRisco($this, 'comandorisco', 'reverse_reference', 'comando_id');

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
	 * @property-read QQNode $Date
	 * @property-read QQReverseReferenceNodeComandoPeca $ComandoPeca
	 * @property-read QQReverseReferenceNodeComandoRisco $ComandoRisco
	 * @property-read QQNode $_PrimaryKeyNode
	 */
	class QQReverseReferenceNodeComando extends QQReverseReferenceNode {
		protected $strTableName = 'comando';
		protected $strPrimaryKey = 'id';
		protected $strClassName = 'Comando';
		public function __get($strName) {
			switch ($strName) {
				case 'Id':
					return new QQNode('id', 'Id', 'integer', $this);
				case 'Numero':
					return new QQNode('numero', 'Numero', 'string', $this);
				case 'Date':
					return new QQNode('date', 'Date', 'QDateTime', $this);
				case 'ComandoPeca':
					return new QQReverseReferenceNodeComandoPeca($this, 'comandopeca', 'reverse_reference', 'comando_id');
				case 'ComandoRisco':
					return new QQReverseReferenceNodeComandoRisco($this, 'comandorisco', 'reverse_reference', 'comando_id');

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