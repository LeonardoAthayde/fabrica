<?php
	/**
	 * The abstract UsuarioGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the Usuario subclass which
	 * extends this UsuarioGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the Usuario class.
	 * 
	 * @package My Application
	 * @subpackage GeneratedDataObjects
	 * @property integer $Id the value for intId (Read-Only PK)
	 * @property string $Nome the value for strNome (Not Null)
	 * @property integer $Senha the value for intSenha (Not Null)
	 * @property integer $CostureiraId the value for intCostureiraId 
	 * @property Costureira $Costureira the value for the Costureira object referenced by intCostureiraId 
	 * @property Menu $_Menu the value for the private _objMenu (Read-Only) if set due to an expansion on the usuario_menu_assn association table
	 * @property Menu[] $_MenuArray the value for the private _objMenuArray (Read-Only) if set due to an ExpandAsArray on the usuario_menu_assn association table
	 * @property boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class UsuarioGen extends QBaseClass {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////
		
		/**
		 * Protected member variable that maps to the database PK Identity column usuario.id
		 * @var integer intId
		 */
		protected $intId;
		const IdDefault = null;


		/**
		 * Protected member variable that maps to the database column usuario.nome
		 * @var string strNome
		 */
		protected $strNome;
		const NomeMaxLength = 255;
		const NomeDefault = null;


		/**
		 * Protected member variable that maps to the database column usuario.senha
		 * @var integer intSenha
		 */
		protected $intSenha;
		const SenhaDefault = null;


		/**
		 * Protected member variable that maps to the database column usuario.costureira_id
		 * @var integer intCostureiraId
		 */
		protected $intCostureiraId;
		const CostureiraIdDefault = null;


		/**
		 * Private member variable that stores a reference to a single Menu object
		 * (of type Menu), if this Usuario object was restored with
		 * an expansion on the usuario_menu_assn association table.
		 * @var Menu _objMenu;
		 */
		private $_objMenu;

		/**
		 * Private member variable that stores a reference to an array of Menu objects
		 * (of type Menu[]), if this Usuario object was restored with
		 * an ExpandAsArray on the usuario_menu_assn association table.
		 * @var Menu[] _objMenuArray;
		 */
		private $_objMenuArray = array();

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
		 * in the database column usuario.costureira_id.
		 *
		 * NOTE: Always use the Costureira property getter to correctly retrieve this Costureira object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Costureira objCostureira
		 */
		protected $objCostureira;





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
		 * Load a Usuario from PK Info
		 * @param integer $intId
		 * @return Usuario
		 */
		public static function Load($intId) {
			// Use QuerySingle to Perform the Query
			return Usuario::QuerySingle(
				QQ::Equal(QQN::Usuario()->Id, $intId)
			);
		}

		/**
		 * Load all Usuarios
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Usuario[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			// Call Usuario::QueryArray to perform the LoadAll query
			try {
				return Usuario::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all Usuarios
		 * @return int
		 */
		public static function CountAll() {
			// Call Usuario::QueryCount to perform the CountAll query
			return Usuario::QueryCount(QQ::All());
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
			$objDatabase = Usuario::GetDatabase();

			// Create/Build out the QueryBuilder object with Usuario-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'usuario');
			Usuario::GetSelectFields($objQueryBuilder);
			$objQueryBuilder->AddFromItem('usuario');

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
		 * Static Qcodo Query method to query for a single Usuario object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Usuario the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Usuario::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Instantiate a new Usuario object and return it

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = Usuario::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return Usuario::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcodo Query method to query for an array of Usuario objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Usuario[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Usuario::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return Usuario::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
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
				$strQuery = Usuario::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
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
		 * Static Qcodo Query method to query for a count of Usuario objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Usuario::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = Usuario::GetDatabase();

			// Lookup the QCache for This Query Statement
			$objCache = new QCache('query', 'usuario_' . serialize($strConditions));
			if (!($strQuery = $objCache->GetData())) {
				// Not Found -- Go ahead and Create/Build out a new QueryBuilder object with Usuario-specific fields
				$objQueryBuilder = new QQueryBuilder($objDatabase);
				Usuario::GetSelectFields($objQueryBuilder);
				Usuario::GetFromFields($objQueryBuilder);

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
			return Usuario::InstantiateDbResult($objDbResult);
		}*/

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this Usuario
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'usuario';
				$strAliasPrefix = '';
			}

			$objBuilder->AddSelectItem($strTableName, 'id', $strAliasPrefix . 'id');
			$objBuilder->AddSelectItem($strTableName, 'nome', $strAliasPrefix . 'nome');
			$objBuilder->AddSelectItem($strTableName, 'senha', $strAliasPrefix . 'senha');
			$objBuilder->AddSelectItem($strTableName, 'costureira_id', $strAliasPrefix . 'costureira_id');
		}




		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a Usuario from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this Usuario::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param QDatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $objPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return Usuario
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
					$strAliasPrefix = 'usuario__';

				$strAlias = $strAliasPrefix . 'menu__menu_id__id';
				$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
				if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
					(!is_null($objDbRow->GetColumn($strAliasName)))) {
					if ($intPreviousChildItemCount = count($objPreviousItem->_objMenuArray)) {
						$objPreviousChildItem = $objPreviousItem->_objMenuArray[$intPreviousChildItemCount - 1];
						$objChildItem = Menu::InstantiateDbRow($objDbRow, $strAliasPrefix . 'menu__menu_id__', $strExpandAsArrayNodes, $objPreviousChildItem, $strColumnAliasArray);
						if ($objChildItem)
							$objPreviousItem->_objMenuArray[] = $objChildItem;
					} else
						$objPreviousItem->_objMenuArray[] = Menu::InstantiateDbRow($objDbRow, $strAliasPrefix . 'menu__menu_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
					$blnExpandedViaArray = true;
				}


				// Either return false to signal array expansion, or check-to-reset the Alias prefix and move on
				if ($blnExpandedViaArray)
					return false;
				else if ($strAliasPrefix == 'usuario__')
					$strAliasPrefix = null;
			}

			// Create a new instance of the Usuario object
			$objToReturn = new Usuario();
			$objToReturn->__blnRestored = true;

			$strAliasName = array_key_exists($strAliasPrefix . 'id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'id'] : $strAliasPrefix . 'id';
			$objToReturn->intId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'nome', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'nome'] : $strAliasPrefix . 'nome';
			$objToReturn->strNome = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'senha', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'senha'] : $strAliasPrefix . 'senha';
			$objToReturn->intSenha = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'costureira_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'costureira_id'] : $strAliasPrefix . 'costureira_id';
			$objToReturn->intCostureiraId = $objDbRow->GetColumn($strAliasName, 'Integer');

			// Instantiate Virtual Attributes
			foreach ($objDbRow->GetColumnNameArray() as $strColumnName => $mixValue) {
				$strVirtualPrefix = $strAliasPrefix . '__';
				$strVirtualPrefixLength = strlen($strVirtualPrefix);
				if (substr($strColumnName, 0, $strVirtualPrefixLength) == $strVirtualPrefix)
					$objToReturn->__strVirtualAttributeArray[substr($strColumnName, $strVirtualPrefixLength)] = $mixValue;
			}

			// Prepare to Check for Early/Virtual Binding
			if (!$strAliasPrefix)
				$strAliasPrefix = 'usuario__';

			// Check for Costureira Early Binding
			$strAlias = $strAliasPrefix . 'costureira_id__id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objCostureira = Costureira::InstantiateDbRow($objDbRow, $strAliasPrefix . 'costureira_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);



			// Check for Menu Virtual Binding
			$strAlias = $strAliasPrefix . 'menu__menu_id__id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
					$objToReturn->_objMenuArray[] = Menu::InstantiateDbRow($objDbRow, $strAliasPrefix . 'menu__menu_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objMenu = Menu::InstantiateDbRow($objDbRow, $strAliasPrefix . 'menu__menu_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}


			return $objToReturn;
		}

		/**
		 * Instantiate an array of Usuarios from a Database Result
		 * @param QDatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return Usuario[]
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
					$objItem = Usuario::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objLastRowItem, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
						$objLastRowItem = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = Usuario::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate a single Usuario object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return Usuario next row resulting from the query
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
			return Usuario::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, null, $strColumnAliasArray);
		}




		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////
			
		/**
		 * Load a single Usuario object,
		 * by Id Index(es)
		 * @param integer $intId
		 * @return Usuario
		*/
		public static function LoadById($intId, $objOptionalClauses = null) {
			return Usuario::QuerySingle(
				QQ::Equal(QQN::Usuario()->Id, $intId)
			, $objOptionalClauses
			);
		}
			
		/**
		 * Load a single Usuario object,
		 * by Nome, Senha Index(es)
		 * @param string $strNome
		 * @param integer $intSenha
		 * @return Usuario
		*/
		public static function LoadByNomeSenha($strNome, $intSenha, $objOptionalClauses = null) {
			return Usuario::QuerySingle(
				QQ::AndCondition(
				QQ::Equal(QQN::Usuario()->Nome, $strNome),
				QQ::Equal(QQN::Usuario()->Senha, $intSenha)
				)
			, $objOptionalClauses
			);
		}
			
		/**
		 * Load an array of Usuario objects,
		 * by CostureiraId Index(es)
		 * @param integer $intCostureiraId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Usuario[]
		*/
		public static function LoadArrayByCostureiraId($intCostureiraId, $objOptionalClauses = null) {
			// Call Usuario::QueryArray to perform the LoadArrayByCostureiraId query
			try {
				return Usuario::QueryArray(
					QQ::Equal(QQN::Usuario()->CostureiraId, $intCostureiraId),
					$objOptionalClauses
					);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Usuarios
		 * by CostureiraId Index(es)
		 * @param integer $intCostureiraId
		 * @return int
		*/
		public static function CountByCostureiraId($intCostureiraId, $objOptionalClauses = null) {
			// Call Usuario::QueryCount to perform the CountByCostureiraId query
			return Usuario::QueryCount(
				QQ::Equal(QQN::Usuario()->CostureiraId, $intCostureiraId)
			, $objOptionalClauses
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////
			/**
		 * Load an array of Menu objects for a given Menu
		 * via the usuario_menu_assn table
		 * @param integer $intMenuId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Usuario[]
		*/
		public static function LoadArrayByMenu($intMenuId, $objOptionalClauses = null) {
			// Call Usuario::QueryArray to perform the LoadArrayByMenu query
			try {
				return Usuario::QueryArray(
					QQ::Equal(QQN::Usuario()->Menu->MenuId, $intMenuId),
					$objOptionalClauses
				);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Usuarios for a given Menu
		 * via the usuario_menu_assn table
		 * @param integer $intMenuId
		 * @return int
		*/
		public static function CountByMenu($intMenuId, $objOptionalClauses = null) {
			return Usuario::QueryCount(
				QQ::Equal(QQN::Usuario()->Menu->MenuId, $intMenuId),
				$objOptionalClauses
			);
		}




		//////////////////////////////////////
		// SAVE, DELETE, RELOAD and JOURNALING
		//////////////////////////////////////

		/**
		 * Save this Usuario
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = Usuario::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `usuario` (
							`nome`,
							`senha`,
							`costureira_id`
						) VALUES (
							' . $objDatabase->SqlVariable($this->strNome) . ',
							' . $objDatabase->SqlVariable($this->intSenha) . ',
							' . $objDatabase->SqlVariable($this->intCostureiraId) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intId = $objDatabase->InsertId('usuario', 'id');

					// Journaling
					if ($objDatabase->JournalingDatabase) $this->Journal('INSERT');

				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`usuario`
						SET
							`nome` = ' . $objDatabase->SqlVariable($this->strNome) . ',
							`senha` = ' . $objDatabase->SqlVariable($this->intSenha) . ',
							`costureira_id` = ' . $objDatabase->SqlVariable($this->intCostureiraId) . '
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
		 * Delete this Usuario
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this Usuario with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = Usuario::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`usuario`
				WHERE
					`id` = ' . $objDatabase->SqlVariable($this->intId) . '');

			// Journaling
			if ($objDatabase->JournalingDatabase) $this->Journal('DELETE');
		}

		/**
		 * Delete all Usuarios
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = Usuario::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`usuario`');
		}

		/**
		 * Truncate usuario table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = Usuario::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `usuario`');
		}

		/**
		 * Reload this Usuario from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved Usuario object.');

			// Reload the Object
			$objReloaded = Usuario::Load($this->intId);

			// Update $this's local variables to match
			$this->strNome = $objReloaded->strNome;
			$this->intSenha = $objReloaded->intSenha;
			$this->CostureiraId = $objReloaded->CostureiraId;
		}

		/**
		 * Journals the current object into the Log database.
		 * Used internally as a helper method.
		 * @param string $strJournalCommand
		 */
		public function Journal($strJournalCommand) {
			$objDatabase = Usuario::GetDatabase()->JournalingDatabase;

			$objDatabase->NonQuery('
				INSERT INTO `usuario` (
					`id`,
					`nome`,
					`senha`,
					`costureira_id`,
					__sys_login_id,
					__sys_action,
					__sys_date
				) VALUES (
					' . $objDatabase->SqlVariable($this->intId) . ',
					' . $objDatabase->SqlVariable($this->strNome) . ',
					' . $objDatabase->SqlVariable($this->intSenha) . ',
					' . $objDatabase->SqlVariable($this->intCostureiraId) . ',
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
		 * @return Usuario[]
		 */
		public static function GetJournalForId($intId) {
			$objDatabase = Usuario::GetDatabase()->JournalingDatabase;

			$objResult = $objDatabase->Query('SELECT * FROM usuario WHERE id = ' .
				$objDatabase->SqlVariable($intId) . ' ORDER BY __sys_date');

			return Usuario::InstantiateDbResult($objResult);
		}

		/**
		 * Gets the historical journal for this object from the log database.
		 * Objects will have VirtualAttributes available to lookup login, date, and action information from the journal object.
		 * @return Usuario[]
		 */
		public function GetJournal() {
			return Usuario::GetJournalForId($this->intId);
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

				case 'Senha':
					// Gets the value for intSenha (Not Null)
					// @return integer
					return $this->intSenha;

				case 'CostureiraId':
					// Gets the value for intCostureiraId 
					// @return integer
					return $this->intCostureiraId;


				///////////////////
				// Member Objects
				///////////////////
				case 'Costureira':
					// Gets the value for the Costureira object referenced by intCostureiraId 
					// @return Costureira
					try {
						if ((!$this->objCostureira) && (!is_null($this->intCostureiraId)))
							$this->objCostureira = Costureira::Load($this->intCostureiraId);
						return $this->objCostureira;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				////////////////////////////
				// Virtual Object References (Many to Many and Reverse References)
				// (If restored via a "Many-to" expansion)
				////////////////////////////

				case '_Menu':
					// Gets the value for the private _objMenu (Read-Only)
					// if set due to an expansion on the usuario_menu_assn association table
					// @return Menu
					return $this->_objMenu;

				case '_MenuArray':
					// Gets the value for the private _objMenuArray (Read-Only)
					// if set due to an ExpandAsArray on the usuario_menu_assn association table
					// @return Menu[]
					return (array) $this->_objMenuArray;


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

				case 'Senha':
					// Sets the value for intSenha (Not Null)
					// @param integer $mixValue
					// @return integer
					try {
						return ($this->intSenha = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'CostureiraId':
					// Sets the value for intCostureiraId 
					// @param integer $mixValue
					// @return integer
					try {
						$this->objCostureira = null;
						return ($this->intCostureiraId = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				///////////////////
				// Member Objects
				///////////////////
				case 'Costureira':
					// Sets the value for the Costureira object referenced by intCostureiraId 
					// @param Costureira $mixValue
					// @return Costureira
					if (is_null($mixValue)) {
						$this->intCostureiraId = null;
						$this->objCostureira = null;
						return null;
					} else {
						// Make sure $mixValue actually is a Costureira object
						try {
							$mixValue = QType::Cast($mixValue, 'Costureira');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						} 

						// Make sure $mixValue is a SAVED Costureira object
						if (is_null($mixValue->Id))
							throw new QCallerException('Unable to set an unsaved Costureira for this Usuario');

						// Update Local Member Variables
						$this->objCostureira = $mixValue;
						$this->intCostureiraId = $mixValue->Id;

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

			
		// Related Many-to-Many Objects' Methods for Menu
		//-------------------------------------------------------------------

		/**
		 * Gets all many-to-many associated Menus as an array of Menu objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Menu[]
		*/ 
		public function GetMenuArray($objOptionalClauses = null) {
			if ((is_null($this->intId)))
				return array();

			try {
				return Menu::LoadArrayByUsuario($this->intId, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all many-to-many associated Menus
		 * @return int
		*/ 
		public function CountMenus() {
			if ((is_null($this->intId)))
				return 0;

			return Menu::CountByUsuario($this->intId);
		}

		/**
		 * Checks to see if an association exists with a specific Menu
		 * @param Menu $objMenu
		 * @return bool
		*/
		public function IsMenuAssociated(Menu $objMenu) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call IsMenuAssociated on this unsaved Usuario.');
			if ((is_null($objMenu->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call IsMenuAssociated on this Usuario with an unsaved Menu.');

			$intRowCount = Usuario::QueryCount(
				QQ::AndCondition(
					QQ::Equal(QQN::Usuario()->Id, $this->intId),
					QQ::Equal(QQN::Usuario()->Menu->MenuId, $objMenu->Id)
				)
			);

			return ($intRowCount > 0);
		}

		/**
		 * Journals the Menu relationship into the Log database.
		 * Used internally as a helper method.
		 * @param string $strJournalCommand
		 */
		public function JournalMenuAssociation($intAssociatedId, $strJournalCommand) {
			$objDatabase = Usuario::GetDatabase()->JournalingDatabase;

			$objDatabase->NonQuery('
				INSERT INTO `usuario_menu_assn` (
					`usuario_id`,
					`menu_id`,
					__sys_login_id,
					__sys_action,
					__sys_date
				) VALUES (
					' . $objDatabase->SqlVariable($this->intId) . ',
					' . $objDatabase->SqlVariable($intAssociatedId) . ',
					' . (($objDatabase->JournaledById) ? $objDatabase->JournaledById : 'NULL') . ',
					' . $objDatabase->SqlVariable($strJournalCommand) . ',
					NOW()
				);
			');
		}

		/**
		 * Gets the historical journal for an object's Menu relationship from the log database.
		 * @param integer intId
		 * @return QDatabaseResult $objResult
		 */
		public static function GetJournalMenuAssociationForId($intId) {
			$objDatabase = Usuario::GetDatabase()->JournalingDatabase;

			return $objDatabase->Query('SELECT * FROM usuario_menu_assn WHERE usuario_id = ' .
				$objDatabase->SqlVariable($intId) . ' ORDER BY __sys_date');
		}

		/**
		 * Gets the historical journal for this object's Menu relationship from the log database.
		 * @return QDatabaseResult $objResult
		 */
		public function GetJournalMenuAssociation() {
			return Usuario::GetJournalMenuAssociationForId($this->intId);
		}

		/**
		 * Associates a Menu
		 * @param Menu $objMenu
		 * @return void
		*/ 
		public function AssociateMenu(Menu $objMenu) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateMenu on this unsaved Usuario.');
			if ((is_null($objMenu->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateMenu on this Usuario with an unsaved Menu.');

			// Get the Database Object for this Class
			$objDatabase = Usuario::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				INSERT INTO `usuario_menu_assn` (
					`usuario_id`,
					`menu_id`
				) VALUES (
					' . $objDatabase->SqlVariable($this->intId) . ',
					' . $objDatabase->SqlVariable($objMenu->Id) . '
				)
			');

			// Journaling (if applicable)
			if ($objDatabase->JournalingDatabase)
				$this->JournalMenuAssociation($objMenu->Id, 'INSERT');
		}

		/**
		 * Unassociates a Menu
		 * @param Menu $objMenu
		 * @return void
		*/ 
		public function UnassociateMenu(Menu $objMenu) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateMenu on this unsaved Usuario.');
			if ((is_null($objMenu->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateMenu on this Usuario with an unsaved Menu.');

			// Get the Database Object for this Class
			$objDatabase = Usuario::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`usuario_menu_assn`
				WHERE
					`usuario_id` = ' . $objDatabase->SqlVariable($this->intId) . ' AND
					`menu_id` = ' . $objDatabase->SqlVariable($objMenu->Id) . '
			');

			// Journaling (if applicable)
			if ($objDatabase->JournalingDatabase)
				$this->JournalMenuAssociation($objMenu->Id, 'DELETE');
		}

		/**
		 * Unassociates all Menus
		 * @return void
		*/ 
		public function UnassociateAllMenus() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAllMenuArray on this unsaved Usuario.');

			// Get the Database Object for this Class
			$objDatabase = Usuario::GetDatabase();

			// Journaling (if applicable)
			if ($objDatabase->JournalingDatabase) {
				$objResult = $objDatabase->Query('SELECT `menu_id` AS associated_id FROM `usuario_menu_assn` WHERE `usuario_id` = ' . $objDatabase->SqlVariable($this->intId));
				while ($objRow = $objResult->GetNextRow()) {
					$this->JournalMenuAssociation($objRow->GetColumn('associated_id'), 'DELETE');
				}
			}

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`usuario_menu_assn`
				WHERE
					`usuario_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}




		////////////////////////////////////////
		// METHODS for SOAP-BASED WEB SERVICES
		////////////////////////////////////////

		public static function GetSoapComplexTypeXml() {
			$strToReturn = '<complexType name="Usuario"><sequence>';
			$strToReturn .= '<element name="Id" type="xsd:int"/>';
			$strToReturn .= '<element name="Nome" type="xsd:string"/>';
			$strToReturn .= '<element name="Senha" type="xsd:int"/>';
			$strToReturn .= '<element name="Costureira" type="xsd1:Costureira"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('Usuario', $strComplexTypeArray)) {
				$strComplexTypeArray['Usuario'] = Usuario::GetSoapComplexTypeXml();
				Costureira::AlterSoapComplexTypeArray($strComplexTypeArray);
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, Usuario::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new Usuario();
			if (property_exists($objSoapObject, 'Id'))
				$objToReturn->intId = $objSoapObject->Id;
			if (property_exists($objSoapObject, 'Nome'))
				$objToReturn->strNome = $objSoapObject->Nome;
			if (property_exists($objSoapObject, 'Senha'))
				$objToReturn->intSenha = $objSoapObject->Senha;
			if ((property_exists($objSoapObject, 'Costureira')) &&
				($objSoapObject->Costureira))
				$objToReturn->Costureira = Costureira::GetObjectFromSoapObject($objSoapObject->Costureira);
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, Usuario::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->objCostureira)
				$objObject->objCostureira = Costureira::GetSoapObjectFromObject($objObject->objCostureira, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intCostureiraId = null;
			return $objObject;
		}




	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCODO QUERY
	/////////////////////////////////////

	/**
	 * @property-read QQNode $MenuId
	 * @property-read QQNodeMenu $Menu
	 * @property-read QQNodeMenu $_ChildTableNode
	 */
	class QQNodeUsuarioMenu extends QQAssociationNode {
		protected $strType = 'association';
		protected $strName = 'menu';

		protected $strTableName = 'usuario_menu_assn';
		protected $strPrimaryKey = 'usuario_id';
		protected $strClassName = 'Menu';

		public function __get($strName) {
			switch ($strName) {
				case 'MenuId':
					return new QQNode('menu_id', 'MenuId', 'integer', $this);
				case 'Menu':
					return new QQNodeMenu('menu_id', 'MenuId', 'integer', $this);
				case '_ChildTableNode':
					return new QQNodeMenu('menu_id', 'MenuId', 'integer', $this);
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
	 * @property-read QQNode $Senha
	 * @property-read QQNode $CostureiraId
	 * @property-read QQNodeCostureira $Costureira
	 * @property-read QQNodeUsuarioMenu $Menu
	 */
	class QQNodeUsuario extends QQNode {
		protected $strTableName = 'usuario';
		protected $strPrimaryKey = 'id';
		protected $strClassName = 'Usuario';
		public function __get($strName) {
			switch ($strName) {
				case 'Id':
					return new QQNode('id', 'Id', 'integer', $this);
				case 'Nome':
					return new QQNode('nome', 'Nome', 'string', $this);
				case 'Senha':
					return new QQNode('senha', 'Senha', 'integer', $this);
				case 'CostureiraId':
					return new QQNode('costureira_id', 'CostureiraId', 'integer', $this);
				case 'Costureira':
					return new QQNodeCostureira('costureira_id', 'Costureira', 'integer', $this);
				case 'Menu':
					return new QQNodeUsuarioMenu($this);

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
	 * @property-read QQNode $Senha
	 * @property-read QQNode $CostureiraId
	 * @property-read QQNodeCostureira $Costureira
	 * @property-read QQNodeUsuarioMenu $Menu
	 * @property-read QQNode $_PrimaryKeyNode
	 */
	class QQReverseReferenceNodeUsuario extends QQReverseReferenceNode {
		protected $strTableName = 'usuario';
		protected $strPrimaryKey = 'id';
		protected $strClassName = 'Usuario';
		public function __get($strName) {
			switch ($strName) {
				case 'Id':
					return new QQNode('id', 'Id', 'integer', $this);
				case 'Nome':
					return new QQNode('nome', 'Nome', 'string', $this);
				case 'Senha':
					return new QQNode('senha', 'Senha', 'integer', $this);
				case 'CostureiraId':
					return new QQNode('costureira_id', 'CostureiraId', 'integer', $this);
				case 'Costureira':
					return new QQNodeCostureira('costureira_id', 'Costureira', 'integer', $this);
				case 'Menu':
					return new QQNodeUsuarioMenu($this);

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