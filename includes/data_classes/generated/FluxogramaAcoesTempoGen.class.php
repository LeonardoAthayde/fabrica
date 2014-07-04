<?php
	/**
	 * The abstract FluxogramaAcoesTempoGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the FluxogramaAcoesTempo subclass which
	 * extends this FluxogramaAcoesTempoGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the FluxogramaAcoesTempo class.
	 * 
	 * @package My Application
	 * @subpackage GeneratedDataObjects
	 * @property integer $Id the value for intId (Read-Only PK)
	 * @property integer $FluxogramaAcoesId the value for intFluxogramaAcoesId (Not Null)
	 * @property integer $Tempo the value for intTempo (Not Null)
	 * @property FluxogramaAcoes $FluxogramaAcoes the value for the FluxogramaAcoes object referenced by intFluxogramaAcoesId (Not Null)
	 * @property FluxogramaItem $_FluxogramaItem the value for the private _objFluxogramaItem (Read-Only) if set due to an expansion on the fluxograma_item.fluxograma_acoes_tempo_id reverse relationship
	 * @property FluxogramaItem[] $_FluxogramaItemArray the value for the private _objFluxogramaItemArray (Read-Only) if set due to an ExpandAsArray on the fluxograma_item.fluxograma_acoes_tempo_id reverse relationship
	 * @property boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class FluxogramaAcoesTempoGen extends QBaseClass {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////
		
		/**
		 * Protected member variable that maps to the database PK Identity column fluxograma_acoes_tempo.id
		 * @var integer intId
		 */
		protected $intId;
		const IdDefault = null;


		/**
		 * Protected member variable that maps to the database column fluxograma_acoes_tempo.fluxograma_acoes_id
		 * @var integer intFluxogramaAcoesId
		 */
		protected $intFluxogramaAcoesId;
		const FluxogramaAcoesIdDefault = null;


		/**
		 * Protected member variable that maps to the database column fluxograma_acoes_tempo.tempo
		 * @var integer intTempo
		 */
		protected $intTempo;
		const TempoDefault = null;


		/**
		 * Private member variable that stores a reference to a single FluxogramaItem object
		 * (of type FluxogramaItem), if this FluxogramaAcoesTempo object was restored with
		 * an expansion on the fluxograma_item association table.
		 * @var FluxogramaItem _objFluxogramaItem;
		 */
		private $_objFluxogramaItem;

		/**
		 * Private member variable that stores a reference to an array of FluxogramaItem objects
		 * (of type FluxogramaItem[]), if this FluxogramaAcoesTempo object was restored with
		 * an ExpandAsArray on the fluxograma_item association table.
		 * @var FluxogramaItem[] _objFluxogramaItemArray;
		 */
		private $_objFluxogramaItemArray = array();

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
		 * in the database column fluxograma_acoes_tempo.fluxograma_acoes_id.
		 *
		 * NOTE: Always use the FluxogramaAcoes property getter to correctly retrieve this FluxogramaAcoes object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var FluxogramaAcoes objFluxogramaAcoes
		 */
		protected $objFluxogramaAcoes;





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
		 * Load a FluxogramaAcoesTempo from PK Info
		 * @param integer $intId
		 * @return FluxogramaAcoesTempo
		 */
		public static function Load($intId) {
			// Use QuerySingle to Perform the Query
			return FluxogramaAcoesTempo::QuerySingle(
				QQ::Equal(QQN::FluxogramaAcoesTempo()->Id, $intId)
			);
		}

		/**
		 * Load all FluxogramaAcoesTempos
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return FluxogramaAcoesTempo[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			// Call FluxogramaAcoesTempo::QueryArray to perform the LoadAll query
			try {
				return FluxogramaAcoesTempo::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all FluxogramaAcoesTempos
		 * @return int
		 */
		public static function CountAll() {
			// Call FluxogramaAcoesTempo::QueryCount to perform the CountAll query
			return FluxogramaAcoesTempo::QueryCount(QQ::All());
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
			$objDatabase = FluxogramaAcoesTempo::GetDatabase();

			// Create/Build out the QueryBuilder object with FluxogramaAcoesTempo-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'fluxograma_acoes_tempo');
			FluxogramaAcoesTempo::GetSelectFields($objQueryBuilder);
			$objQueryBuilder->AddFromItem('fluxograma_acoes_tempo');

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
		 * Static Qcodo Query method to query for a single FluxogramaAcoesTempo object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return FluxogramaAcoesTempo the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = FluxogramaAcoesTempo::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Instantiate a new FluxogramaAcoesTempo object and return it

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = FluxogramaAcoesTempo::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return FluxogramaAcoesTempo::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcodo Query method to query for an array of FluxogramaAcoesTempo objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return FluxogramaAcoesTempo[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = FluxogramaAcoesTempo::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return FluxogramaAcoesTempo::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
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
				$strQuery = FluxogramaAcoesTempo::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
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
		 * Static Qcodo Query method to query for a count of FluxogramaAcoesTempo objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = FluxogramaAcoesTempo::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = FluxogramaAcoesTempo::GetDatabase();

			// Lookup the QCache for This Query Statement
			$objCache = new QCache('query', 'fluxograma_acoes_tempo_' . serialize($strConditions));
			if (!($strQuery = $objCache->GetData())) {
				// Not Found -- Go ahead and Create/Build out a new QueryBuilder object with FluxogramaAcoesTempo-specific fields
				$objQueryBuilder = new QQueryBuilder($objDatabase);
				FluxogramaAcoesTempo::GetSelectFields($objQueryBuilder);
				FluxogramaAcoesTempo::GetFromFields($objQueryBuilder);

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
			return FluxogramaAcoesTempo::InstantiateDbResult($objDbResult);
		}*/

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this FluxogramaAcoesTempo
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'fluxograma_acoes_tempo';
				$strAliasPrefix = '';
			}

			$objBuilder->AddSelectItem($strTableName, 'id', $strAliasPrefix . 'id');
			$objBuilder->AddSelectItem($strTableName, 'fluxograma_acoes_id', $strAliasPrefix . 'fluxograma_acoes_id');
			$objBuilder->AddSelectItem($strTableName, 'tempo', $strAliasPrefix . 'tempo');
		}




		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a FluxogramaAcoesTempo from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this FluxogramaAcoesTempo::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param QDatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $objPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return FluxogramaAcoesTempo
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
					$strAliasPrefix = 'fluxograma_acoes_tempo__';


				$strAlias = $strAliasPrefix . 'fluxogramaitem__id';
				$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
				if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
					(!is_null($objDbRow->GetColumn($strAliasName)))) {
					if ($intPreviousChildItemCount = count($objPreviousItem->_objFluxogramaItemArray)) {
						$objPreviousChildItem = $objPreviousItem->_objFluxogramaItemArray[$intPreviousChildItemCount - 1];
						$objChildItem = FluxogramaItem::InstantiateDbRow($objDbRow, $strAliasPrefix . 'fluxogramaitem__', $strExpandAsArrayNodes, $objPreviousChildItem, $strColumnAliasArray);
						if ($objChildItem)
							$objPreviousItem->_objFluxogramaItemArray[] = $objChildItem;
					} else
						$objPreviousItem->_objFluxogramaItemArray[] = FluxogramaItem::InstantiateDbRow($objDbRow, $strAliasPrefix . 'fluxogramaitem__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
					$blnExpandedViaArray = true;
				}

				// Either return false to signal array expansion, or check-to-reset the Alias prefix and move on
				if ($blnExpandedViaArray)
					return false;
				else if ($strAliasPrefix == 'fluxograma_acoes_tempo__')
					$strAliasPrefix = null;
			}

			// Create a new instance of the FluxogramaAcoesTempo object
			$objToReturn = new FluxogramaAcoesTempo();
			$objToReturn->__blnRestored = true;

			$strAliasName = array_key_exists($strAliasPrefix . 'id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'id'] : $strAliasPrefix . 'id';
			$objToReturn->intId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'fluxograma_acoes_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'fluxograma_acoes_id'] : $strAliasPrefix . 'fluxograma_acoes_id';
			$objToReturn->intFluxogramaAcoesId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'tempo', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'tempo'] : $strAliasPrefix . 'tempo';
			$objToReturn->intTempo = $objDbRow->GetColumn($strAliasName, 'Integer');

			// Instantiate Virtual Attributes
			foreach ($objDbRow->GetColumnNameArray() as $strColumnName => $mixValue) {
				$strVirtualPrefix = $strAliasPrefix . '__';
				$strVirtualPrefixLength = strlen($strVirtualPrefix);
				if (substr($strColumnName, 0, $strVirtualPrefixLength) == $strVirtualPrefix)
					$objToReturn->__strVirtualAttributeArray[substr($strColumnName, $strVirtualPrefixLength)] = $mixValue;
			}

			// Prepare to Check for Early/Virtual Binding
			if (!$strAliasPrefix)
				$strAliasPrefix = 'fluxograma_acoes_tempo__';

			// Check for FluxogramaAcoes Early Binding
			$strAlias = $strAliasPrefix . 'fluxograma_acoes_id__id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objFluxogramaAcoes = FluxogramaAcoes::InstantiateDbRow($objDbRow, $strAliasPrefix . 'fluxograma_acoes_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);




			// Check for FluxogramaItem Virtual Binding
			$strAlias = $strAliasPrefix . 'fluxogramaitem__id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
					$objToReturn->_objFluxogramaItemArray[] = FluxogramaItem::InstantiateDbRow($objDbRow, $strAliasPrefix . 'fluxogramaitem__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objFluxogramaItem = FluxogramaItem::InstantiateDbRow($objDbRow, $strAliasPrefix . 'fluxogramaitem__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate an array of FluxogramaAcoesTempos from a Database Result
		 * @param QDatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return FluxogramaAcoesTempo[]
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
					$objItem = FluxogramaAcoesTempo::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objLastRowItem, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
						$objLastRowItem = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = FluxogramaAcoesTempo::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate a single FluxogramaAcoesTempo object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return FluxogramaAcoesTempo next row resulting from the query
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
			return FluxogramaAcoesTempo::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, null, $strColumnAliasArray);
		}




		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////
			
		/**
		 * Load a single FluxogramaAcoesTempo object,
		 * by Id Index(es)
		 * @param integer $intId
		 * @return FluxogramaAcoesTempo
		*/
		public static function LoadById($intId, $objOptionalClauses = null) {
			return FluxogramaAcoesTempo::QuerySingle(
				QQ::Equal(QQN::FluxogramaAcoesTempo()->Id, $intId)
			, $objOptionalClauses
			);
		}
			
		/**
		 * Load an array of FluxogramaAcoesTempo objects,
		 * by FluxogramaAcoesId Index(es)
		 * @param integer $intFluxogramaAcoesId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return FluxogramaAcoesTempo[]
		*/
		public static function LoadArrayByFluxogramaAcoesId($intFluxogramaAcoesId, $objOptionalClauses = null) {
			// Call FluxogramaAcoesTempo::QueryArray to perform the LoadArrayByFluxogramaAcoesId query
			try {
				return FluxogramaAcoesTempo::QueryArray(
					QQ::Equal(QQN::FluxogramaAcoesTempo()->FluxogramaAcoesId, $intFluxogramaAcoesId),
					$objOptionalClauses
					);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count FluxogramaAcoesTempos
		 * by FluxogramaAcoesId Index(es)
		 * @param integer $intFluxogramaAcoesId
		 * @return int
		*/
		public static function CountByFluxogramaAcoesId($intFluxogramaAcoesId, $objOptionalClauses = null) {
			// Call FluxogramaAcoesTempo::QueryCount to perform the CountByFluxogramaAcoesId query
			return FluxogramaAcoesTempo::QueryCount(
				QQ::Equal(QQN::FluxogramaAcoesTempo()->FluxogramaAcoesId, $intFluxogramaAcoesId)
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
		 * Save this FluxogramaAcoesTempo
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = FluxogramaAcoesTempo::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `fluxograma_acoes_tempo` (
							`fluxograma_acoes_id`,
							`tempo`
						) VALUES (
							' . $objDatabase->SqlVariable($this->intFluxogramaAcoesId) . ',
							' . $objDatabase->SqlVariable($this->intTempo) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intId = $objDatabase->InsertId('fluxograma_acoes_tempo', 'id');

					// Journaling
					if ($objDatabase->JournalingDatabase) $this->Journal('INSERT');

				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`fluxograma_acoes_tempo`
						SET
							`fluxograma_acoes_id` = ' . $objDatabase->SqlVariable($this->intFluxogramaAcoesId) . ',
							`tempo` = ' . $objDatabase->SqlVariable($this->intTempo) . '
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
		 * Delete this FluxogramaAcoesTempo
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this FluxogramaAcoesTempo with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = FluxogramaAcoesTempo::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`fluxograma_acoes_tempo`
				WHERE
					`id` = ' . $objDatabase->SqlVariable($this->intId) . '');

			// Journaling
			if ($objDatabase->JournalingDatabase) $this->Journal('DELETE');
		}

		/**
		 * Delete all FluxogramaAcoesTempos
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = FluxogramaAcoesTempo::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`fluxograma_acoes_tempo`');
		}

		/**
		 * Truncate fluxograma_acoes_tempo table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = FluxogramaAcoesTempo::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `fluxograma_acoes_tempo`');
		}

		/**
		 * Reload this FluxogramaAcoesTempo from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved FluxogramaAcoesTempo object.');

			// Reload the Object
			$objReloaded = FluxogramaAcoesTempo::Load($this->intId);

			// Update $this's local variables to match
			$this->FluxogramaAcoesId = $objReloaded->FluxogramaAcoesId;
			$this->intTempo = $objReloaded->intTempo;
		}

		/**
		 * Journals the current object into the Log database.
		 * Used internally as a helper method.
		 * @param string $strJournalCommand
		 */
		public function Journal($strJournalCommand) {
			$objDatabase = FluxogramaAcoesTempo::GetDatabase()->JournalingDatabase;

			$objDatabase->NonQuery('
				INSERT INTO `fluxograma_acoes_tempo` (
					`id`,
					`fluxograma_acoes_id`,
					`tempo`,
					__sys_login_id,
					__sys_action,
					__sys_date
				) VALUES (
					' . $objDatabase->SqlVariable($this->intId) . ',
					' . $objDatabase->SqlVariable($this->intFluxogramaAcoesId) . ',
					' . $objDatabase->SqlVariable($this->intTempo) . ',
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
		 * @return FluxogramaAcoesTempo[]
		 */
		public static function GetJournalForId($intId) {
			$objDatabase = FluxogramaAcoesTempo::GetDatabase()->JournalingDatabase;

			$objResult = $objDatabase->Query('SELECT * FROM fluxograma_acoes_tempo WHERE id = ' .
				$objDatabase->SqlVariable($intId) . ' ORDER BY __sys_date');

			return FluxogramaAcoesTempo::InstantiateDbResult($objResult);
		}

		/**
		 * Gets the historical journal for this object from the log database.
		 * Objects will have VirtualAttributes available to lookup login, date, and action information from the journal object.
		 * @return FluxogramaAcoesTempo[]
		 */
		public function GetJournal() {
			return FluxogramaAcoesTempo::GetJournalForId($this->intId);
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

				case 'FluxogramaAcoesId':
					// Gets the value for intFluxogramaAcoesId (Not Null)
					// @return integer
					return $this->intFluxogramaAcoesId;

				case 'Tempo':
					// Gets the value for intTempo (Not Null)
					// @return integer
					return $this->intTempo;


				///////////////////
				// Member Objects
				///////////////////
				case 'FluxogramaAcoes':
					// Gets the value for the FluxogramaAcoes object referenced by intFluxogramaAcoesId (Not Null)
					// @return FluxogramaAcoes
					try {
						if ((!$this->objFluxogramaAcoes) && (!is_null($this->intFluxogramaAcoesId)))
							$this->objFluxogramaAcoes = FluxogramaAcoes::Load($this->intFluxogramaAcoesId);
						return $this->objFluxogramaAcoes;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				////////////////////////////
				// Virtual Object References (Many to Many and Reverse References)
				// (If restored via a "Many-to" expansion)
				////////////////////////////

				case '_FluxogramaItem':
					// Gets the value for the private _objFluxogramaItem (Read-Only)
					// if set due to an expansion on the fluxograma_item.fluxograma_acoes_tempo_id reverse relationship
					// @return FluxogramaItem
					return $this->_objFluxogramaItem;

				case '_FluxogramaItemArray':
					// Gets the value for the private _objFluxogramaItemArray (Read-Only)
					// if set due to an ExpandAsArray on the fluxograma_item.fluxograma_acoes_tempo_id reverse relationship
					// @return FluxogramaItem[]
					return (array) $this->_objFluxogramaItemArray;


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
				case 'FluxogramaAcoesId':
					// Sets the value for intFluxogramaAcoesId (Not Null)
					// @param integer $mixValue
					// @return integer
					try {
						$this->objFluxogramaAcoes = null;
						return ($this->intFluxogramaAcoesId = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Tempo':
					// Sets the value for intTempo (Not Null)
					// @param integer $mixValue
					// @return integer
					try {
						return ($this->intTempo = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				///////////////////
				// Member Objects
				///////////////////
				case 'FluxogramaAcoes':
					// Sets the value for the FluxogramaAcoes object referenced by intFluxogramaAcoesId (Not Null)
					// @param FluxogramaAcoes $mixValue
					// @return FluxogramaAcoes
					if (is_null($mixValue)) {
						$this->intFluxogramaAcoesId = null;
						$this->objFluxogramaAcoes = null;
						return null;
					} else {
						// Make sure $mixValue actually is a FluxogramaAcoes object
						try {
							$mixValue = QType::Cast($mixValue, 'FluxogramaAcoes');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						} 

						// Make sure $mixValue is a SAVED FluxogramaAcoes object
						if (is_null($mixValue->Id))
							throw new QCallerException('Unable to set an unsaved FluxogramaAcoes for this FluxogramaAcoesTempo');

						// Update Local Member Variables
						$this->objFluxogramaAcoes = $mixValue;
						$this->intFluxogramaAcoesId = $mixValue->Id;

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

			
		
		// Related Objects' Methods for FluxogramaItem
		//-------------------------------------------------------------------

		/**
		 * Gets all associated FluxogramaItems as an array of FluxogramaItem objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return FluxogramaItem[]
		*/ 
		public function GetFluxogramaItemArray($objOptionalClauses = null) {
			if ((is_null($this->intId)))
				return array();

			try {
				return FluxogramaItem::LoadArrayByFluxogramaAcoesTempoId($this->intId, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated FluxogramaItems
		 * @return int
		*/ 
		public function CountFluxogramaItems() {
			if ((is_null($this->intId)))
				return 0;

			return FluxogramaItem::CountByFluxogramaAcoesTempoId($this->intId);
		}

		/**
		 * Associates a FluxogramaItem
		 * @param FluxogramaItem $objFluxogramaItem
		 * @return void
		*/ 
		public function AssociateFluxogramaItem(FluxogramaItem $objFluxogramaItem) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateFluxogramaItem on this unsaved FluxogramaAcoesTempo.');
			if ((is_null($objFluxogramaItem->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateFluxogramaItem on this FluxogramaAcoesTempo with an unsaved FluxogramaItem.');

			// Get the Database Object for this Class
			$objDatabase = FluxogramaAcoesTempo::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`fluxograma_item`
				SET
					`fluxograma_acoes_tempo_id` = ' . $objDatabase->SqlVariable($this->intId) . '
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objFluxogramaItem->Id) . '
			');

			// Journaling (if applicable)
			if ($objDatabase->JournalingDatabase) {
				$objFluxogramaItem->FluxogramaAcoesTempoId = $this->intId;
				$objFluxogramaItem->Journal('UPDATE');
			}
		}

		/**
		 * Unassociates a FluxogramaItem
		 * @param FluxogramaItem $objFluxogramaItem
		 * @return void
		*/ 
		public function UnassociateFluxogramaItem(FluxogramaItem $objFluxogramaItem) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFluxogramaItem on this unsaved FluxogramaAcoesTempo.');
			if ((is_null($objFluxogramaItem->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFluxogramaItem on this FluxogramaAcoesTempo with an unsaved FluxogramaItem.');

			// Get the Database Object for this Class
			$objDatabase = FluxogramaAcoesTempo::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`fluxograma_item`
				SET
					`fluxograma_acoes_tempo_id` = null
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objFluxogramaItem->Id) . ' AND
					`fluxograma_acoes_tempo_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				$objFluxogramaItem->FluxogramaAcoesTempoId = null;
				$objFluxogramaItem->Journal('UPDATE');
			}
		}

		/**
		 * Unassociates all FluxogramaItems
		 * @return void
		*/ 
		public function UnassociateAllFluxogramaItems() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFluxogramaItem on this unsaved FluxogramaAcoesTempo.');

			// Get the Database Object for this Class
			$objDatabase = FluxogramaAcoesTempo::GetDatabase();

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				foreach (FluxogramaItem::LoadArrayByFluxogramaAcoesTempoId($this->intId) as $objFluxogramaItem) {
					$objFluxogramaItem->FluxogramaAcoesTempoId = null;
					$objFluxogramaItem->Journal('UPDATE');
				}
			}

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`fluxograma_item`
				SET
					`fluxograma_acoes_tempo_id` = null
				WHERE
					`fluxograma_acoes_tempo_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Deletes an associated FluxogramaItem
		 * @param FluxogramaItem $objFluxogramaItem
		 * @return void
		*/ 
		public function DeleteAssociatedFluxogramaItem(FluxogramaItem $objFluxogramaItem) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFluxogramaItem on this unsaved FluxogramaAcoesTempo.');
			if ((is_null($objFluxogramaItem->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFluxogramaItem on this FluxogramaAcoesTempo with an unsaved FluxogramaItem.');

			// Get the Database Object for this Class
			$objDatabase = FluxogramaAcoesTempo::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`fluxograma_item`
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objFluxogramaItem->Id) . ' AND
					`fluxograma_acoes_tempo_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				$objFluxogramaItem->Journal('DELETE');
			}
		}

		/**
		 * Deletes all associated FluxogramaItems
		 * @return void
		*/ 
		public function DeleteAllFluxogramaItems() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFluxogramaItem on this unsaved FluxogramaAcoesTempo.');

			// Get the Database Object for this Class
			$objDatabase = FluxogramaAcoesTempo::GetDatabase();

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				foreach (FluxogramaItem::LoadArrayByFluxogramaAcoesTempoId($this->intId) as $objFluxogramaItem) {
					$objFluxogramaItem->Journal('DELETE');
				}
			}

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`fluxograma_item`
				WHERE
					`fluxograma_acoes_tempo_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}





		////////////////////////////////////////
		// METHODS for SOAP-BASED WEB SERVICES
		////////////////////////////////////////

		public static function GetSoapComplexTypeXml() {
			$strToReturn = '<complexType name="FluxogramaAcoesTempo"><sequence>';
			$strToReturn .= '<element name="Id" type="xsd:int"/>';
			$strToReturn .= '<element name="FluxogramaAcoes" type="xsd1:FluxogramaAcoes"/>';
			$strToReturn .= '<element name="Tempo" type="xsd:int"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('FluxogramaAcoesTempo', $strComplexTypeArray)) {
				$strComplexTypeArray['FluxogramaAcoesTempo'] = FluxogramaAcoesTempo::GetSoapComplexTypeXml();
				FluxogramaAcoes::AlterSoapComplexTypeArray($strComplexTypeArray);
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, FluxogramaAcoesTempo::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new FluxogramaAcoesTempo();
			if (property_exists($objSoapObject, 'Id'))
				$objToReturn->intId = $objSoapObject->Id;
			if ((property_exists($objSoapObject, 'FluxogramaAcoes')) &&
				($objSoapObject->FluxogramaAcoes))
				$objToReturn->FluxogramaAcoes = FluxogramaAcoes::GetObjectFromSoapObject($objSoapObject->FluxogramaAcoes);
			if (property_exists($objSoapObject, 'Tempo'))
				$objToReturn->intTempo = $objSoapObject->Tempo;
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, FluxogramaAcoesTempo::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->objFluxogramaAcoes)
				$objObject->objFluxogramaAcoes = FluxogramaAcoes::GetSoapObjectFromObject($objObject->objFluxogramaAcoes, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intFluxogramaAcoesId = null;
			return $objObject;
		}




	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCODO QUERY
	/////////////////////////////////////

	/**
	 * @property-read QQNode $Id
	 * @property-read QQNode $FluxogramaAcoesId
	 * @property-read QQNodeFluxogramaAcoes $FluxogramaAcoes
	 * @property-read QQNode $Tempo
	 * @property-read QQReverseReferenceNodeFluxogramaItem $FluxogramaItem
	 */
	class QQNodeFluxogramaAcoesTempo extends QQNode {
		protected $strTableName = 'fluxograma_acoes_tempo';
		protected $strPrimaryKey = 'id';
		protected $strClassName = 'FluxogramaAcoesTempo';
		public function __get($strName) {
			switch ($strName) {
				case 'Id':
					return new QQNode('id', 'Id', 'integer', $this);
				case 'FluxogramaAcoesId':
					return new QQNode('fluxograma_acoes_id', 'FluxogramaAcoesId', 'integer', $this);
				case 'FluxogramaAcoes':
					return new QQNodeFluxogramaAcoes('fluxograma_acoes_id', 'FluxogramaAcoes', 'integer', $this);
				case 'Tempo':
					return new QQNode('tempo', 'Tempo', 'integer', $this);
				case 'FluxogramaItem':
					return new QQReverseReferenceNodeFluxogramaItem($this, 'fluxogramaitem', 'reverse_reference', 'fluxograma_acoes_tempo_id');

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
	 * @property-read QQNode $FluxogramaAcoesId
	 * @property-read QQNodeFluxogramaAcoes $FluxogramaAcoes
	 * @property-read QQNode $Tempo
	 * @property-read QQReverseReferenceNodeFluxogramaItem $FluxogramaItem
	 * @property-read QQNode $_PrimaryKeyNode
	 */
	class QQReverseReferenceNodeFluxogramaAcoesTempo extends QQReverseReferenceNode {
		protected $strTableName = 'fluxograma_acoes_tempo';
		protected $strPrimaryKey = 'id';
		protected $strClassName = 'FluxogramaAcoesTempo';
		public function __get($strName) {
			switch ($strName) {
				case 'Id':
					return new QQNode('id', 'Id', 'integer', $this);
				case 'FluxogramaAcoesId':
					return new QQNode('fluxograma_acoes_id', 'FluxogramaAcoesId', 'integer', $this);
				case 'FluxogramaAcoes':
					return new QQNodeFluxogramaAcoes('fluxograma_acoes_id', 'FluxogramaAcoes', 'integer', $this);
				case 'Tempo':
					return new QQNode('tempo', 'Tempo', 'integer', $this);
				case 'FluxogramaItem':
					return new QQReverseReferenceNodeFluxogramaItem($this, 'fluxogramaitem', 'reverse_reference', 'fluxograma_acoes_tempo_id');

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