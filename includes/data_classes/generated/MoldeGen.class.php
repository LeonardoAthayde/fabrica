<?php
	/**
	 * The abstract MoldeGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the Molde subclass which
	 * extends this MoldeGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the Molde class.
	 * 
	 * @package My Application
	 * @subpackage GeneratedDataObjects
	 * @property integer $Id the value for intId (Read-Only PK)
	 * @property string $Nome the value for strNome (Not Null)
	 * @property ComandoRisco $_ComandoRisco the value for the private _objComandoRisco (Read-Only) if set due to an expansion on the comando_risco.molde_id reverse relationship
	 * @property ComandoRisco[] $_ComandoRiscoArray the value for the private _objComandoRiscoArray (Read-Only) if set due to an ExpandAsArray on the comando_risco.molde_id reverse relationship
	 * @property ReferenciaRendimento $_ReferenciaRendimento the value for the private _objReferenciaRendimento (Read-Only) if set due to an expansion on the referencia_rendimento.molde_id reverse relationship
	 * @property ReferenciaRendimento[] $_ReferenciaRendimentoArray the value for the private _objReferenciaRendimentoArray (Read-Only) if set due to an ExpandAsArray on the referencia_rendimento.molde_id reverse relationship
	 * @property boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class MoldeGen extends QBaseClass {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////
		
		/**
		 * Protected member variable that maps to the database PK Identity column molde.id
		 * @var integer intId
		 */
		protected $intId;
		const IdDefault = null;


		/**
		 * Protected member variable that maps to the database column molde.nome
		 * @var string strNome
		 */
		protected $strNome;
		const NomeMaxLength = 20;
		const NomeDefault = null;


		/**
		 * Private member variable that stores a reference to a single ComandoRisco object
		 * (of type ComandoRisco), if this Molde object was restored with
		 * an expansion on the comando_risco association table.
		 * @var ComandoRisco _objComandoRisco;
		 */
		private $_objComandoRisco;

		/**
		 * Private member variable that stores a reference to an array of ComandoRisco objects
		 * (of type ComandoRisco[]), if this Molde object was restored with
		 * an ExpandAsArray on the comando_risco association table.
		 * @var ComandoRisco[] _objComandoRiscoArray;
		 */
		private $_objComandoRiscoArray = array();

		/**
		 * Private member variable that stores a reference to a single ReferenciaRendimento object
		 * (of type ReferenciaRendimento), if this Molde object was restored with
		 * an expansion on the referencia_rendimento association table.
		 * @var ReferenciaRendimento _objReferenciaRendimento;
		 */
		private $_objReferenciaRendimento;

		/**
		 * Private member variable that stores a reference to an array of ReferenciaRendimento objects
		 * (of type ReferenciaRendimento[]), if this Molde object was restored with
		 * an ExpandAsArray on the referencia_rendimento association table.
		 * @var ReferenciaRendimento[] _objReferenciaRendimentoArray;
		 */
		private $_objReferenciaRendimentoArray = array();

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
		 * Load a Molde from PK Info
		 * @param integer $intId
		 * @return Molde
		 */
		public static function Load($intId) {
			// Use QuerySingle to Perform the Query
			return Molde::QuerySingle(
				QQ::Equal(QQN::Molde()->Id, $intId)
			);
		}

		/**
		 * Load all Moldes
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Molde[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			// Call Molde::QueryArray to perform the LoadAll query
			try {
				return Molde::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all Moldes
		 * @return int
		 */
		public static function CountAll() {
			// Call Molde::QueryCount to perform the CountAll query
			return Molde::QueryCount(QQ::All());
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
			$objDatabase = Molde::GetDatabase();

			// Create/Build out the QueryBuilder object with Molde-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'molde');
			Molde::GetSelectFields($objQueryBuilder);
			$objQueryBuilder->AddFromItem('molde');

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
		 * Static Qcodo Query method to query for a single Molde object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Molde the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Molde::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Instantiate a new Molde object and return it

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = Molde::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return Molde::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcodo Query method to query for an array of Molde objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Molde[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Molde::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return Molde::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
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
				$strQuery = Molde::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
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
		 * Static Qcodo Query method to query for a count of Molde objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Molde::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = Molde::GetDatabase();

			// Lookup the QCache for This Query Statement
			$objCache = new QCache('query', 'molde_' . serialize($strConditions));
			if (!($strQuery = $objCache->GetData())) {
				// Not Found -- Go ahead and Create/Build out a new QueryBuilder object with Molde-specific fields
				$objQueryBuilder = new QQueryBuilder($objDatabase);
				Molde::GetSelectFields($objQueryBuilder);
				Molde::GetFromFields($objQueryBuilder);

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
			return Molde::InstantiateDbResult($objDbResult);
		}*/

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this Molde
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'molde';
				$strAliasPrefix = '';
			}

			$objBuilder->AddSelectItem($strTableName, 'id', $strAliasPrefix . 'id');
			$objBuilder->AddSelectItem($strTableName, 'nome', $strAliasPrefix . 'nome');
		}




		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a Molde from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this Molde::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param QDatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $objPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return Molde
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
					$strAliasPrefix = 'molde__';


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

				$strAlias = $strAliasPrefix . 'referenciarendimento__id';
				$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
				if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
					(!is_null($objDbRow->GetColumn($strAliasName)))) {
					if ($intPreviousChildItemCount = count($objPreviousItem->_objReferenciaRendimentoArray)) {
						$objPreviousChildItem = $objPreviousItem->_objReferenciaRendimentoArray[$intPreviousChildItemCount - 1];
						$objChildItem = ReferenciaRendimento::InstantiateDbRow($objDbRow, $strAliasPrefix . 'referenciarendimento__', $strExpandAsArrayNodes, $objPreviousChildItem, $strColumnAliasArray);
						if ($objChildItem)
							$objPreviousItem->_objReferenciaRendimentoArray[] = $objChildItem;
					} else
						$objPreviousItem->_objReferenciaRendimentoArray[] = ReferenciaRendimento::InstantiateDbRow($objDbRow, $strAliasPrefix . 'referenciarendimento__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
					$blnExpandedViaArray = true;
				}

				// Either return false to signal array expansion, or check-to-reset the Alias prefix and move on
				if ($blnExpandedViaArray)
					return false;
				else if ($strAliasPrefix == 'molde__')
					$strAliasPrefix = null;
			}

			// Create a new instance of the Molde object
			$objToReturn = new Molde();
			$objToReturn->__blnRestored = true;

			$strAliasName = array_key_exists($strAliasPrefix . 'id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'id'] : $strAliasPrefix . 'id';
			$objToReturn->intId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'nome', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'nome'] : $strAliasPrefix . 'nome';
			$objToReturn->strNome = $objDbRow->GetColumn($strAliasName, 'VarChar');

			// Instantiate Virtual Attributes
			foreach ($objDbRow->GetColumnNameArray() as $strColumnName => $mixValue) {
				$strVirtualPrefix = $strAliasPrefix . '__';
				$strVirtualPrefixLength = strlen($strVirtualPrefix);
				if (substr($strColumnName, 0, $strVirtualPrefixLength) == $strVirtualPrefix)
					$objToReturn->__strVirtualAttributeArray[substr($strColumnName, $strVirtualPrefixLength)] = $mixValue;
			}

			// Prepare to Check for Early/Virtual Binding
			if (!$strAliasPrefix)
				$strAliasPrefix = 'molde__';




			// Check for ComandoRisco Virtual Binding
			$strAlias = $strAliasPrefix . 'comandorisco__id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
					$objToReturn->_objComandoRiscoArray[] = ComandoRisco::InstantiateDbRow($objDbRow, $strAliasPrefix . 'comandorisco__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objComandoRisco = ComandoRisco::InstantiateDbRow($objDbRow, $strAliasPrefix . 'comandorisco__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for ReferenciaRendimento Virtual Binding
			$strAlias = $strAliasPrefix . 'referenciarendimento__id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
					$objToReturn->_objReferenciaRendimentoArray[] = ReferenciaRendimento::InstantiateDbRow($objDbRow, $strAliasPrefix . 'referenciarendimento__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objReferenciaRendimento = ReferenciaRendimento::InstantiateDbRow($objDbRow, $strAliasPrefix . 'referenciarendimento__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate an array of Moldes from a Database Result
		 * @param QDatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return Molde[]
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
					$objItem = Molde::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objLastRowItem, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
						$objLastRowItem = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = Molde::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate a single Molde object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return Molde next row resulting from the query
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
			return Molde::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, null, $strColumnAliasArray);
		}




		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////
			
		/**
		 * Load a single Molde object,
		 * by Id Index(es)
		 * @param integer $intId
		 * @return Molde
		*/
		public static function LoadById($intId, $objOptionalClauses = null) {
			return Molde::QuerySingle(
				QQ::Equal(QQN::Molde()->Id, $intId)
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
		 * Save this Molde
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = Molde::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `molde` (
							`nome`
						) VALUES (
							' . $objDatabase->SqlVariable($this->strNome) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intId = $objDatabase->InsertId('molde', 'id');

					// Journaling
					if ($objDatabase->JournalingDatabase) $this->Journal('INSERT');

				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`molde`
						SET
							`nome` = ' . $objDatabase->SqlVariable($this->strNome) . '
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
		 * Delete this Molde
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this Molde with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = Molde::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`molde`
				WHERE
					`id` = ' . $objDatabase->SqlVariable($this->intId) . '');

			// Journaling
			if ($objDatabase->JournalingDatabase) $this->Journal('DELETE');
		}

		/**
		 * Delete all Moldes
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = Molde::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`molde`');
		}

		/**
		 * Truncate molde table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = Molde::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `molde`');
		}

		/**
		 * Reload this Molde from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved Molde object.');

			// Reload the Object
			$objReloaded = Molde::Load($this->intId);

			// Update $this's local variables to match
			$this->strNome = $objReloaded->strNome;
		}

		/**
		 * Journals the current object into the Log database.
		 * Used internally as a helper method.
		 * @param string $strJournalCommand
		 */
		public function Journal($strJournalCommand) {
			$objDatabase = Molde::GetDatabase()->JournalingDatabase;

			$objDatabase->NonQuery('
				INSERT INTO `molde` (
					`id`,
					`nome`,
					__sys_login_id,
					__sys_action,
					__sys_date
				) VALUES (
					' . $objDatabase->SqlVariable($this->intId) . ',
					' . $objDatabase->SqlVariable($this->strNome) . ',
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
		 * @return Molde[]
		 */
		public static function GetJournalForId($intId) {
			$objDatabase = Molde::GetDatabase()->JournalingDatabase;

			$objResult = $objDatabase->Query('SELECT * FROM molde WHERE id = ' .
				$objDatabase->SqlVariable($intId) . ' ORDER BY __sys_date');

			return Molde::InstantiateDbResult($objResult);
		}

		/**
		 * Gets the historical journal for this object from the log database.
		 * Objects will have VirtualAttributes available to lookup login, date, and action information from the journal object.
		 * @return Molde[]
		 */
		public function GetJournal() {
			return Molde::GetJournalForId($this->intId);
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

				case 'Nome':
					// Gets the value for strNome (Not Null)
					// @return string
					return $this->strNome;


				///////////////////
				// Member Objects
				///////////////////

				////////////////////////////
				// Virtual Object References (Many to Many and Reverse References)
				// (If restored via a "Many-to" expansion)
				////////////////////////////

				case '_ComandoRisco':
					// Gets the value for the private _objComandoRisco (Read-Only)
					// if set due to an expansion on the comando_risco.molde_id reverse relationship
					// @return ComandoRisco
					return $this->_objComandoRisco;

				case '_ComandoRiscoArray':
					// Gets the value for the private _objComandoRiscoArray (Read-Only)
					// if set due to an ExpandAsArray on the comando_risco.molde_id reverse relationship
					// @return ComandoRisco[]
					return (array) $this->_objComandoRiscoArray;

				case '_ReferenciaRendimento':
					// Gets the value for the private _objReferenciaRendimento (Read-Only)
					// if set due to an expansion on the referencia_rendimento.molde_id reverse relationship
					// @return ReferenciaRendimento
					return $this->_objReferenciaRendimento;

				case '_ReferenciaRendimentoArray':
					// Gets the value for the private _objReferenciaRendimentoArray (Read-Only)
					// if set due to an ExpandAsArray on the referencia_rendimento.molde_id reverse relationship
					// @return ReferenciaRendimento[]
					return (array) $this->_objReferenciaRendimentoArray;


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
				case 'Nome':
					// Sets the value for strNome (Not Null)
					// @param string $mixValue
					// @return string
					try {
						return ($this->strNome = QType::Cast($mixValue, QType::String));
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
				return ComandoRisco::LoadArrayByMoldeId($this->intId, $objOptionalClauses);
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

			return ComandoRisco::CountByMoldeId($this->intId);
		}

		/**
		 * Associates a ComandoRisco
		 * @param ComandoRisco $objComandoRisco
		 * @return void
		*/ 
		public function AssociateComandoRisco(ComandoRisco $objComandoRisco) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateComandoRisco on this unsaved Molde.');
			if ((is_null($objComandoRisco->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateComandoRisco on this Molde with an unsaved ComandoRisco.');

			// Get the Database Object for this Class
			$objDatabase = Molde::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`comando_risco`
				SET
					`molde_id` = ' . $objDatabase->SqlVariable($this->intId) . '
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objComandoRisco->Id) . '
			');

			// Journaling (if applicable)
			if ($objDatabase->JournalingDatabase) {
				$objComandoRisco->MoldeId = $this->intId;
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
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateComandoRisco on this unsaved Molde.');
			if ((is_null($objComandoRisco->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateComandoRisco on this Molde with an unsaved ComandoRisco.');

			// Get the Database Object for this Class
			$objDatabase = Molde::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`comando_risco`
				SET
					`molde_id` = null
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objComandoRisco->Id) . ' AND
					`molde_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				$objComandoRisco->MoldeId = null;
				$objComandoRisco->Journal('UPDATE');
			}
		}

		/**
		 * Unassociates all ComandoRiscos
		 * @return void
		*/ 
		public function UnassociateAllComandoRiscos() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateComandoRisco on this unsaved Molde.');

			// Get the Database Object for this Class
			$objDatabase = Molde::GetDatabase();

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				foreach (ComandoRisco::LoadArrayByMoldeId($this->intId) as $objComandoRisco) {
					$objComandoRisco->MoldeId = null;
					$objComandoRisco->Journal('UPDATE');
				}
			}

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`comando_risco`
				SET
					`molde_id` = null
				WHERE
					`molde_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Deletes an associated ComandoRisco
		 * @param ComandoRisco $objComandoRisco
		 * @return void
		*/ 
		public function DeleteAssociatedComandoRisco(ComandoRisco $objComandoRisco) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateComandoRisco on this unsaved Molde.');
			if ((is_null($objComandoRisco->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateComandoRisco on this Molde with an unsaved ComandoRisco.');

			// Get the Database Object for this Class
			$objDatabase = Molde::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`comando_risco`
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objComandoRisco->Id) . ' AND
					`molde_id` = ' . $objDatabase->SqlVariable($this->intId) . '
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
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateComandoRisco on this unsaved Molde.');

			// Get the Database Object for this Class
			$objDatabase = Molde::GetDatabase();

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				foreach (ComandoRisco::LoadArrayByMoldeId($this->intId) as $objComandoRisco) {
					$objComandoRisco->Journal('DELETE');
				}
			}

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`comando_risco`
				WHERE
					`molde_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

			
		
		// Related Objects' Methods for ReferenciaRendimento
		//-------------------------------------------------------------------

		/**
		 * Gets all associated ReferenciaRendimentos as an array of ReferenciaRendimento objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return ReferenciaRendimento[]
		*/ 
		public function GetReferenciaRendimentoArray($objOptionalClauses = null) {
			if ((is_null($this->intId)))
				return array();

			try {
				return ReferenciaRendimento::LoadArrayByMoldeId($this->intId, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated ReferenciaRendimentos
		 * @return int
		*/ 
		public function CountReferenciaRendimentos() {
			if ((is_null($this->intId)))
				return 0;

			return ReferenciaRendimento::CountByMoldeId($this->intId);
		}

		/**
		 * Associates a ReferenciaRendimento
		 * @param ReferenciaRendimento $objReferenciaRendimento
		 * @return void
		*/ 
		public function AssociateReferenciaRendimento(ReferenciaRendimento $objReferenciaRendimento) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateReferenciaRendimento on this unsaved Molde.');
			if ((is_null($objReferenciaRendimento->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateReferenciaRendimento on this Molde with an unsaved ReferenciaRendimento.');

			// Get the Database Object for this Class
			$objDatabase = Molde::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`referencia_rendimento`
				SET
					`molde_id` = ' . $objDatabase->SqlVariable($this->intId) . '
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objReferenciaRendimento->Id) . '
			');

			// Journaling (if applicable)
			if ($objDatabase->JournalingDatabase) {
				$objReferenciaRendimento->MoldeId = $this->intId;
				$objReferenciaRendimento->Journal('UPDATE');
			}
		}

		/**
		 * Unassociates a ReferenciaRendimento
		 * @param ReferenciaRendimento $objReferenciaRendimento
		 * @return void
		*/ 
		public function UnassociateReferenciaRendimento(ReferenciaRendimento $objReferenciaRendimento) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateReferenciaRendimento on this unsaved Molde.');
			if ((is_null($objReferenciaRendimento->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateReferenciaRendimento on this Molde with an unsaved ReferenciaRendimento.');

			// Get the Database Object for this Class
			$objDatabase = Molde::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`referencia_rendimento`
				SET
					`molde_id` = null
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objReferenciaRendimento->Id) . ' AND
					`molde_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				$objReferenciaRendimento->MoldeId = null;
				$objReferenciaRendimento->Journal('UPDATE');
			}
		}

		/**
		 * Unassociates all ReferenciaRendimentos
		 * @return void
		*/ 
		public function UnassociateAllReferenciaRendimentos() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateReferenciaRendimento on this unsaved Molde.');

			// Get the Database Object for this Class
			$objDatabase = Molde::GetDatabase();

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				foreach (ReferenciaRendimento::LoadArrayByMoldeId($this->intId) as $objReferenciaRendimento) {
					$objReferenciaRendimento->MoldeId = null;
					$objReferenciaRendimento->Journal('UPDATE');
				}
			}

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`referencia_rendimento`
				SET
					`molde_id` = null
				WHERE
					`molde_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Deletes an associated ReferenciaRendimento
		 * @param ReferenciaRendimento $objReferenciaRendimento
		 * @return void
		*/ 
		public function DeleteAssociatedReferenciaRendimento(ReferenciaRendimento $objReferenciaRendimento) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateReferenciaRendimento on this unsaved Molde.');
			if ((is_null($objReferenciaRendimento->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateReferenciaRendimento on this Molde with an unsaved ReferenciaRendimento.');

			// Get the Database Object for this Class
			$objDatabase = Molde::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`referencia_rendimento`
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objReferenciaRendimento->Id) . ' AND
					`molde_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				$objReferenciaRendimento->Journal('DELETE');
			}
		}

		/**
		 * Deletes all associated ReferenciaRendimentos
		 * @return void
		*/ 
		public function DeleteAllReferenciaRendimentos() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateReferenciaRendimento on this unsaved Molde.');

			// Get the Database Object for this Class
			$objDatabase = Molde::GetDatabase();

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				foreach (ReferenciaRendimento::LoadArrayByMoldeId($this->intId) as $objReferenciaRendimento) {
					$objReferenciaRendimento->Journal('DELETE');
				}
			}

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`referencia_rendimento`
				WHERE
					`molde_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}





		////////////////////////////////////////
		// METHODS for SOAP-BASED WEB SERVICES
		////////////////////////////////////////

		public static function GetSoapComplexTypeXml() {
			$strToReturn = '<complexType name="Molde"><sequence>';
			$strToReturn .= '<element name="Id" type="xsd:int"/>';
			$strToReturn .= '<element name="Nome" type="xsd:string"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('Molde', $strComplexTypeArray)) {
				$strComplexTypeArray['Molde'] = Molde::GetSoapComplexTypeXml();
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, Molde::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new Molde();
			if (property_exists($objSoapObject, 'Id'))
				$objToReturn->intId = $objSoapObject->Id;
			if (property_exists($objSoapObject, 'Nome'))
				$objToReturn->strNome = $objSoapObject->Nome;
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, Molde::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			return $objObject;
		}




	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCODO QUERY
	/////////////////////////////////////

	/**
	 * @property-read QQNode $Id
	 * @property-read QQNode $Nome
	 * @property-read QQReverseReferenceNodeComandoRisco $ComandoRisco
	 * @property-read QQReverseReferenceNodeReferenciaRendimento $ReferenciaRendimento
	 */
	class QQNodeMolde extends QQNode {
		protected $strTableName = 'molde';
		protected $strPrimaryKey = 'id';
		protected $strClassName = 'Molde';
		public function __get($strName) {
			switch ($strName) {
				case 'Id':
					return new QQNode('id', 'Id', 'integer', $this);
				case 'Nome':
					return new QQNode('nome', 'Nome', 'string', $this);
				case 'ComandoRisco':
					return new QQReverseReferenceNodeComandoRisco($this, 'comandorisco', 'reverse_reference', 'molde_id');
				case 'ReferenciaRendimento':
					return new QQReverseReferenceNodeReferenciaRendimento($this, 'referenciarendimento', 'reverse_reference', 'molde_id');

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
	 * @property-read QQNode $Nome
	 * @property-read QQReverseReferenceNodeComandoRisco $ComandoRisco
	 * @property-read QQReverseReferenceNodeReferenciaRendimento $ReferenciaRendimento
	 * @property-read QQNode $_PrimaryKeyNode
	 */
	class QQReverseReferenceNodeMolde extends QQReverseReferenceNode {
		protected $strTableName = 'molde';
		protected $strPrimaryKey = 'id';
		protected $strClassName = 'Molde';
		public function __get($strName) {
			switch ($strName) {
				case 'Id':
					return new QQNode('id', 'Id', 'integer', $this);
				case 'Nome':
					return new QQNode('nome', 'Nome', 'string', $this);
				case 'ComandoRisco':
					return new QQReverseReferenceNodeComandoRisco($this, 'comandorisco', 'reverse_reference', 'molde_id');
				case 'ReferenciaRendimento':
					return new QQReverseReferenceNodeReferenciaRendimento($this, 'referenciarendimento', 'reverse_reference', 'molde_id');

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