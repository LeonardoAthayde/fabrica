<?php
	/**
	 * The abstract MenuGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the Menu subclass which
	 * extends this MenuGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the Menu class.
	 * 
	 * @package My Application
	 * @subpackage GeneratedDataObjects
	 * @property integer $Id the value for intId (Read-Only PK)
	 * @property string $Nome the value for strNome (Not Null)
	 * @property string $Link the value for strLink 
	 * @property integer $MenuId the value for intMenuId 
	 * @property integer $Ordenacao the value for intOrdenacao 
	 * @property string $Icon the value for strIcon 
	 * @property Menu $Menu the value for the Menu object referenced by intMenuId 
	 * @property Usuario $_Usuario the value for the private _objUsuario (Read-Only) if set due to an expansion on the usuario_menu_assn association table
	 * @property Usuario[] $_UsuarioArray the value for the private _objUsuarioArray (Read-Only) if set due to an ExpandAsArray on the usuario_menu_assn association table
	 * @property Menu $_ChildMenu the value for the private _objChildMenu (Read-Only) if set due to an expansion on the menu.menu_id reverse relationship
	 * @property Menu[] $_ChildMenuArray the value for the private _objChildMenuArray (Read-Only) if set due to an ExpandAsArray on the menu.menu_id reverse relationship
	 * @property boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class MenuGen extends QBaseClass {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////
		
		/**
		 * Protected member variable that maps to the database PK Identity column menu.id
		 * @var integer intId
		 */
		protected $intId;
		const IdDefault = null;


		/**
		 * Protected member variable that maps to the database column menu.nome
		 * @var string strNome
		 */
		protected $strNome;
		const NomeMaxLength = 150;
		const NomeDefault = null;


		/**
		 * Protected member variable that maps to the database column menu.link
		 * @var string strLink
		 */
		protected $strLink;
		const LinkMaxLength = 255;
		const LinkDefault = null;


		/**
		 * Protected member variable that maps to the database column menu.menu_id
		 * @var integer intMenuId
		 */
		protected $intMenuId;
		const MenuIdDefault = null;


		/**
		 * Protected member variable that maps to the database column menu.ordenacao
		 * @var integer intOrdenacao
		 */
		protected $intOrdenacao;
		const OrdenacaoDefault = null;


		/**
		 * Protected member variable that maps to the database column menu.icon
		 * @var string strIcon
		 */
		protected $strIcon;
		const IconMaxLength = 200;
		const IconDefault = null;


		/**
		 * Private member variable that stores a reference to a single Usuario object
		 * (of type Usuario), if this Menu object was restored with
		 * an expansion on the usuario_menu_assn association table.
		 * @var Usuario _objUsuario;
		 */
		private $_objUsuario;

		/**
		 * Private member variable that stores a reference to an array of Usuario objects
		 * (of type Usuario[]), if this Menu object was restored with
		 * an ExpandAsArray on the usuario_menu_assn association table.
		 * @var Usuario[] _objUsuarioArray;
		 */
		private $_objUsuarioArray = array();

		/**
		 * Private member variable that stores a reference to a single ChildMenu object
		 * (of type Menu), if this Menu object was restored with
		 * an expansion on the menu association table.
		 * @var Menu _objChildMenu;
		 */
		private $_objChildMenu;

		/**
		 * Private member variable that stores a reference to an array of ChildMenu objects
		 * (of type Menu[]), if this Menu object was restored with
		 * an ExpandAsArray on the menu association table.
		 * @var Menu[] _objChildMenuArray;
		 */
		private $_objChildMenuArray = array();

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
		 * in the database column menu.menu_id.
		 *
		 * NOTE: Always use the Menu property getter to correctly retrieve this Menu object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Menu objMenu
		 */
		protected $objMenu;





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
		 * Load a Menu from PK Info
		 * @param integer $intId
		 * @return Menu
		 */
		public static function Load($intId) {
			// Use QuerySingle to Perform the Query
			return Menu::QuerySingle(
				QQ::Equal(QQN::Menu()->Id, $intId)
			);
		}

		/**
		 * Load all Menus
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Menu[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			// Call Menu::QueryArray to perform the LoadAll query
			try {
				return Menu::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all Menus
		 * @return int
		 */
		public static function CountAll() {
			// Call Menu::QueryCount to perform the CountAll query
			return Menu::QueryCount(QQ::All());
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
			$objDatabase = Menu::GetDatabase();

			// Create/Build out the QueryBuilder object with Menu-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'menu');
			Menu::GetSelectFields($objQueryBuilder);
			$objQueryBuilder->AddFromItem('menu');

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
		 * Static Qcodo Query method to query for a single Menu object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Menu the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Menu::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Instantiate a new Menu object and return it

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = Menu::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return Menu::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcodo Query method to query for an array of Menu objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Menu[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Menu::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return Menu::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
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
				$strQuery = Menu::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
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
		 * Static Qcodo Query method to query for a count of Menu objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Menu::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = Menu::GetDatabase();

			// Lookup the QCache for This Query Statement
			$objCache = new QCache('query', 'menu_' . serialize($strConditions));
			if (!($strQuery = $objCache->GetData())) {
				// Not Found -- Go ahead and Create/Build out a new QueryBuilder object with Menu-specific fields
				$objQueryBuilder = new QQueryBuilder($objDatabase);
				Menu::GetSelectFields($objQueryBuilder);
				Menu::GetFromFields($objQueryBuilder);

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
			return Menu::InstantiateDbResult($objDbResult);
		}*/

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this Menu
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'menu';
				$strAliasPrefix = '';
			}

			$objBuilder->AddSelectItem($strTableName, 'id', $strAliasPrefix . 'id');
			$objBuilder->AddSelectItem($strTableName, 'nome', $strAliasPrefix . 'nome');
			$objBuilder->AddSelectItem($strTableName, 'link', $strAliasPrefix . 'link');
			$objBuilder->AddSelectItem($strTableName, 'menu_id', $strAliasPrefix . 'menu_id');
			$objBuilder->AddSelectItem($strTableName, 'ordenacao', $strAliasPrefix . 'ordenacao');
			$objBuilder->AddSelectItem($strTableName, 'icon', $strAliasPrefix . 'icon');
		}




		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a Menu from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this Menu::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param QDatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $objPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return Menu
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
					$strAliasPrefix = 'menu__';

				$strAlias = $strAliasPrefix . 'usuario__usuario_id__id';
				$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
				if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
					(!is_null($objDbRow->GetColumn($strAliasName)))) {
					if ($intPreviousChildItemCount = count($objPreviousItem->_objUsuarioArray)) {
						$objPreviousChildItem = $objPreviousItem->_objUsuarioArray[$intPreviousChildItemCount - 1];
						$objChildItem = Usuario::InstantiateDbRow($objDbRow, $strAliasPrefix . 'usuario__usuario_id__', $strExpandAsArrayNodes, $objPreviousChildItem, $strColumnAliasArray);
						if ($objChildItem)
							$objPreviousItem->_objUsuarioArray[] = $objChildItem;
					} else
						$objPreviousItem->_objUsuarioArray[] = Usuario::InstantiateDbRow($objDbRow, $strAliasPrefix . 'usuario__usuario_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
					$blnExpandedViaArray = true;
				}


				$strAlias = $strAliasPrefix . 'childmenu__id';
				$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
				if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
					(!is_null($objDbRow->GetColumn($strAliasName)))) {
					if ($intPreviousChildItemCount = count($objPreviousItem->_objChildMenuArray)) {
						$objPreviousChildItem = $objPreviousItem->_objChildMenuArray[$intPreviousChildItemCount - 1];
						$objChildItem = Menu::InstantiateDbRow($objDbRow, $strAliasPrefix . 'childmenu__', $strExpandAsArrayNodes, $objPreviousChildItem, $strColumnAliasArray);
						if ($objChildItem)
							$objPreviousItem->_objChildMenuArray[] = $objChildItem;
					} else
						$objPreviousItem->_objChildMenuArray[] = Menu::InstantiateDbRow($objDbRow, $strAliasPrefix . 'childmenu__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
					$blnExpandedViaArray = true;
				}

				// Either return false to signal array expansion, or check-to-reset the Alias prefix and move on
				if ($blnExpandedViaArray)
					return false;
				else if ($strAliasPrefix == 'menu__')
					$strAliasPrefix = null;
			}

			// Create a new instance of the Menu object
			$objToReturn = new Menu();
			$objToReturn->__blnRestored = true;

			$strAliasName = array_key_exists($strAliasPrefix . 'id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'id'] : $strAliasPrefix . 'id';
			$objToReturn->intId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'nome', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'nome'] : $strAliasPrefix . 'nome';
			$objToReturn->strNome = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'link', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'link'] : $strAliasPrefix . 'link';
			$objToReturn->strLink = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'menu_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'menu_id'] : $strAliasPrefix . 'menu_id';
			$objToReturn->intMenuId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'ordenacao', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'ordenacao'] : $strAliasPrefix . 'ordenacao';
			$objToReturn->intOrdenacao = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'icon', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'icon'] : $strAliasPrefix . 'icon';
			$objToReturn->strIcon = $objDbRow->GetColumn($strAliasName, 'VarChar');

			// Instantiate Virtual Attributes
			foreach ($objDbRow->GetColumnNameArray() as $strColumnName => $mixValue) {
				$strVirtualPrefix = $strAliasPrefix . '__';
				$strVirtualPrefixLength = strlen($strVirtualPrefix);
				if (substr($strColumnName, 0, $strVirtualPrefixLength) == $strVirtualPrefix)
					$objToReturn->__strVirtualAttributeArray[substr($strColumnName, $strVirtualPrefixLength)] = $mixValue;
			}

			// Prepare to Check for Early/Virtual Binding
			if (!$strAliasPrefix)
				$strAliasPrefix = 'menu__';

			// Check for Menu Early Binding
			$strAlias = $strAliasPrefix . 'menu_id__id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objMenu = Menu::InstantiateDbRow($objDbRow, $strAliasPrefix . 'menu_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);



			// Check for Usuario Virtual Binding
			$strAlias = $strAliasPrefix . 'usuario__usuario_id__id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
					$objToReturn->_objUsuarioArray[] = Usuario::InstantiateDbRow($objDbRow, $strAliasPrefix . 'usuario__usuario_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objUsuario = Usuario::InstantiateDbRow($objDbRow, $strAliasPrefix . 'usuario__usuario_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}


			// Check for ChildMenu Virtual Binding
			$strAlias = $strAliasPrefix . 'childmenu__id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
					$objToReturn->_objChildMenuArray[] = Menu::InstantiateDbRow($objDbRow, $strAliasPrefix . 'childmenu__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objChildMenu = Menu::InstantiateDbRow($objDbRow, $strAliasPrefix . 'childmenu__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate an array of Menus from a Database Result
		 * @param QDatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return Menu[]
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
					$objItem = Menu::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objLastRowItem, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
						$objLastRowItem = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = Menu::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate a single Menu object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return Menu next row resulting from the query
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
			return Menu::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, null, $strColumnAliasArray);
		}




		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////
			
		/**
		 * Load a single Menu object,
		 * by Id Index(es)
		 * @param integer $intId
		 * @return Menu
		*/
		public static function LoadById($intId, $objOptionalClauses = null) {
			return Menu::QuerySingle(
				QQ::Equal(QQN::Menu()->Id, $intId)
			, $objOptionalClauses
			);
		}
			
		/**
		 * Load an array of Menu objects,
		 * by MenuId Index(es)
		 * @param integer $intMenuId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Menu[]
		*/
		public static function LoadArrayByMenuId($intMenuId, $objOptionalClauses = null) {
			// Call Menu::QueryArray to perform the LoadArrayByMenuId query
			try {
				return Menu::QueryArray(
					QQ::Equal(QQN::Menu()->MenuId, $intMenuId),
					$objOptionalClauses
					);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Menus
		 * by MenuId Index(es)
		 * @param integer $intMenuId
		 * @return int
		*/
		public static function CountByMenuId($intMenuId, $objOptionalClauses = null) {
			// Call Menu::QueryCount to perform the CountByMenuId query
			return Menu::QueryCount(
				QQ::Equal(QQN::Menu()->MenuId, $intMenuId)
			, $objOptionalClauses
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////
			/**
		 * Load an array of Usuario objects for a given Usuario
		 * via the usuario_menu_assn table
		 * @param integer $intUsuarioId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Menu[]
		*/
		public static function LoadArrayByUsuario($intUsuarioId, $objOptionalClauses = null) {
			// Call Menu::QueryArray to perform the LoadArrayByUsuario query
			try {
				return Menu::QueryArray(
					QQ::Equal(QQN::Menu()->Usuario->UsuarioId, $intUsuarioId),
					$objOptionalClauses
				);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Menus for a given Usuario
		 * via the usuario_menu_assn table
		 * @param integer $intUsuarioId
		 * @return int
		*/
		public static function CountByUsuario($intUsuarioId, $objOptionalClauses = null) {
			return Menu::QueryCount(
				QQ::Equal(QQN::Menu()->Usuario->UsuarioId, $intUsuarioId),
				$objOptionalClauses
			);
		}




		//////////////////////////////////////
		// SAVE, DELETE, RELOAD and JOURNALING
		//////////////////////////////////////

		/**
		 * Save this Menu
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = Menu::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `menu` (
							`nome`,
							`link`,
							`menu_id`,
							`ordenacao`,
							`icon`
						) VALUES (
							' . $objDatabase->SqlVariable($this->strNome) . ',
							' . $objDatabase->SqlVariable($this->strLink) . ',
							' . $objDatabase->SqlVariable($this->intMenuId) . ',
							' . $objDatabase->SqlVariable($this->intOrdenacao) . ',
							' . $objDatabase->SqlVariable($this->strIcon) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intId = $objDatabase->InsertId('menu', 'id');

					// Journaling
					if ($objDatabase->JournalingDatabase) $this->Journal('INSERT');

				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`menu`
						SET
							`nome` = ' . $objDatabase->SqlVariable($this->strNome) . ',
							`link` = ' . $objDatabase->SqlVariable($this->strLink) . ',
							`menu_id` = ' . $objDatabase->SqlVariable($this->intMenuId) . ',
							`ordenacao` = ' . $objDatabase->SqlVariable($this->intOrdenacao) . ',
							`icon` = ' . $objDatabase->SqlVariable($this->strIcon) . '
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
		 * Delete this Menu
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this Menu with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = Menu::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`menu`
				WHERE
					`id` = ' . $objDatabase->SqlVariable($this->intId) . '');

			// Journaling
			if ($objDatabase->JournalingDatabase) $this->Journal('DELETE');
		}

		/**
		 * Delete all Menus
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = Menu::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`menu`');
		}

		/**
		 * Truncate menu table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = Menu::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `menu`');
		}

		/**
		 * Reload this Menu from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved Menu object.');

			// Reload the Object
			$objReloaded = Menu::Load($this->intId);

			// Update $this's local variables to match
			$this->strNome = $objReloaded->strNome;
			$this->strLink = $objReloaded->strLink;
			$this->MenuId = $objReloaded->MenuId;
			$this->intOrdenacao = $objReloaded->intOrdenacao;
			$this->strIcon = $objReloaded->strIcon;
		}

		/**
		 * Journals the current object into the Log database.
		 * Used internally as a helper method.
		 * @param string $strJournalCommand
		 */
		public function Journal($strJournalCommand) {
			$objDatabase = Menu::GetDatabase()->JournalingDatabase;

			$objDatabase->NonQuery('
				INSERT INTO `menu` (
					`id`,
					`nome`,
					`link`,
					`menu_id`,
					`ordenacao`,
					`icon`,
					__sys_login_id,
					__sys_action,
					__sys_date
				) VALUES (
					' . $objDatabase->SqlVariable($this->intId) . ',
					' . $objDatabase->SqlVariable($this->strNome) . ',
					' . $objDatabase->SqlVariable($this->strLink) . ',
					' . $objDatabase->SqlVariable($this->intMenuId) . ',
					' . $objDatabase->SqlVariable($this->intOrdenacao) . ',
					' . $objDatabase->SqlVariable($this->strIcon) . ',
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
		 * @return Menu[]
		 */
		public static function GetJournalForId($intId) {
			$objDatabase = Menu::GetDatabase()->JournalingDatabase;

			$objResult = $objDatabase->Query('SELECT * FROM menu WHERE id = ' .
				$objDatabase->SqlVariable($intId) . ' ORDER BY __sys_date');

			return Menu::InstantiateDbResult($objResult);
		}

		/**
		 * Gets the historical journal for this object from the log database.
		 * Objects will have VirtualAttributes available to lookup login, date, and action information from the journal object.
		 * @return Menu[]
		 */
		public function GetJournal() {
			return Menu::GetJournalForId($this->intId);
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

				case 'Link':
					// Gets the value for strLink 
					// @return string
					return $this->strLink;

				case 'MenuId':
					// Gets the value for intMenuId 
					// @return integer
					return $this->intMenuId;

				case 'Ordenacao':
					// Gets the value for intOrdenacao 
					// @return integer
					return $this->intOrdenacao;

				case 'Icon':
					// Gets the value for strIcon 
					// @return string
					return $this->strIcon;


				///////////////////
				// Member Objects
				///////////////////
				case 'Menu':
					// Gets the value for the Menu object referenced by intMenuId 
					// @return Menu
					try {
						if ((!$this->objMenu) && (!is_null($this->intMenuId)))
							$this->objMenu = Menu::Load($this->intMenuId);
						return $this->objMenu;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				////////////////////////////
				// Virtual Object References (Many to Many and Reverse References)
				// (If restored via a "Many-to" expansion)
				////////////////////////////

				case '_Usuario':
					// Gets the value for the private _objUsuario (Read-Only)
					// if set due to an expansion on the usuario_menu_assn association table
					// @return Usuario
					return $this->_objUsuario;

				case '_UsuarioArray':
					// Gets the value for the private _objUsuarioArray (Read-Only)
					// if set due to an ExpandAsArray on the usuario_menu_assn association table
					// @return Usuario[]
					return (array) $this->_objUsuarioArray;

				case '_ChildMenu':
					// Gets the value for the private _objChildMenu (Read-Only)
					// if set due to an expansion on the menu.menu_id reverse relationship
					// @return Menu
					return $this->_objChildMenu;

				case '_ChildMenuArray':
					// Gets the value for the private _objChildMenuArray (Read-Only)
					// if set due to an ExpandAsArray on the menu.menu_id reverse relationship
					// @return Menu[]
					return (array) $this->_objChildMenuArray;


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

				case 'Link':
					// Sets the value for strLink 
					// @param string $mixValue
					// @return string
					try {
						return ($this->strLink = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'MenuId':
					// Sets the value for intMenuId 
					// @param integer $mixValue
					// @return integer
					try {
						$this->objMenu = null;
						return ($this->intMenuId = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Ordenacao':
					// Sets the value for intOrdenacao 
					// @param integer $mixValue
					// @return integer
					try {
						return ($this->intOrdenacao = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Icon':
					// Sets the value for strIcon 
					// @param string $mixValue
					// @return string
					try {
						return ($this->strIcon = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				///////////////////
				// Member Objects
				///////////////////
				case 'Menu':
					// Sets the value for the Menu object referenced by intMenuId 
					// @param Menu $mixValue
					// @return Menu
					if (is_null($mixValue)) {
						$this->intMenuId = null;
						$this->objMenu = null;
						return null;
					} else {
						// Make sure $mixValue actually is a Menu object
						try {
							$mixValue = QType::Cast($mixValue, 'Menu');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						} 

						// Make sure $mixValue is a SAVED Menu object
						if (is_null($mixValue->Id))
							throw new QCallerException('Unable to set an unsaved Menu for this Menu');

						// Update Local Member Variables
						$this->objMenu = $mixValue;
						$this->intMenuId = $mixValue->Id;

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

			
		
		// Related Objects' Methods for ChildMenu
		//-------------------------------------------------------------------

		/**
		 * Gets all associated ChildMenus as an array of Menu objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Menu[]
		*/ 
		public function GetChildMenuArray($objOptionalClauses = null) {
			if ((is_null($this->intId)))
				return array();

			try {
				return Menu::LoadArrayByMenuId($this->intId, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated ChildMenus
		 * @return int
		*/ 
		public function CountChildMenus() {
			if ((is_null($this->intId)))
				return 0;

			return Menu::CountByMenuId($this->intId);
		}

		/**
		 * Associates a ChildMenu
		 * @param Menu $objMenu
		 * @return void
		*/ 
		public function AssociateChildMenu(Menu $objMenu) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateChildMenu on this unsaved Menu.');
			if ((is_null($objMenu->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateChildMenu on this Menu with an unsaved Menu.');

			// Get the Database Object for this Class
			$objDatabase = Menu::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`menu`
				SET
					`menu_id` = ' . $objDatabase->SqlVariable($this->intId) . '
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objMenu->Id) . '
			');

			// Journaling (if applicable)
			if ($objDatabase->JournalingDatabase) {
				$objMenu->MenuId = $this->intId;
				$objMenu->Journal('UPDATE');
			}
		}

		/**
		 * Unassociates a ChildMenu
		 * @param Menu $objMenu
		 * @return void
		*/ 
		public function UnassociateChildMenu(Menu $objMenu) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateChildMenu on this unsaved Menu.');
			if ((is_null($objMenu->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateChildMenu on this Menu with an unsaved Menu.');

			// Get the Database Object for this Class
			$objDatabase = Menu::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`menu`
				SET
					`menu_id` = null
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objMenu->Id) . ' AND
					`menu_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				$objMenu->MenuId = null;
				$objMenu->Journal('UPDATE');
			}
		}

		/**
		 * Unassociates all ChildMenus
		 * @return void
		*/ 
		public function UnassociateAllChildMenus() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateChildMenu on this unsaved Menu.');

			// Get the Database Object for this Class
			$objDatabase = Menu::GetDatabase();

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				foreach (Menu::LoadArrayByMenuId($this->intId) as $objMenu) {
					$objMenu->MenuId = null;
					$objMenu->Journal('UPDATE');
				}
			}

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`menu`
				SET
					`menu_id` = null
				WHERE
					`menu_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Deletes an associated ChildMenu
		 * @param Menu $objMenu
		 * @return void
		*/ 
		public function DeleteAssociatedChildMenu(Menu $objMenu) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateChildMenu on this unsaved Menu.');
			if ((is_null($objMenu->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateChildMenu on this Menu with an unsaved Menu.');

			// Get the Database Object for this Class
			$objDatabase = Menu::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`menu`
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objMenu->Id) . ' AND
					`menu_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				$objMenu->Journal('DELETE');
			}
		}

		/**
		 * Deletes all associated ChildMenus
		 * @return void
		*/ 
		public function DeleteAllChildMenus() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateChildMenu on this unsaved Menu.');

			// Get the Database Object for this Class
			$objDatabase = Menu::GetDatabase();

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				foreach (Menu::LoadArrayByMenuId($this->intId) as $objMenu) {
					$objMenu->Journal('DELETE');
				}
			}

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`menu`
				WHERE
					`menu_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

			
		// Related Many-to-Many Objects' Methods for Usuario
		//-------------------------------------------------------------------

		/**
		 * Gets all many-to-many associated Usuarios as an array of Usuario objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Usuario[]
		*/ 
		public function GetUsuarioArray($objOptionalClauses = null) {
			if ((is_null($this->intId)))
				return array();

			try {
				return Usuario::LoadArrayByMenu($this->intId, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all many-to-many associated Usuarios
		 * @return int
		*/ 
		public function CountUsuarios() {
			if ((is_null($this->intId)))
				return 0;

			return Usuario::CountByMenu($this->intId);
		}

		/**
		 * Checks to see if an association exists with a specific Usuario
		 * @param Usuario $objUsuario
		 * @return bool
		*/
		public function IsUsuarioAssociated(Usuario $objUsuario) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call IsUsuarioAssociated on this unsaved Menu.');
			if ((is_null($objUsuario->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call IsUsuarioAssociated on this Menu with an unsaved Usuario.');

			$intRowCount = Menu::QueryCount(
				QQ::AndCondition(
					QQ::Equal(QQN::Menu()->Id, $this->intId),
					QQ::Equal(QQN::Menu()->Usuario->UsuarioId, $objUsuario->Id)
				)
			);

			return ($intRowCount > 0);
		}

		/**
		 * Journals the Usuario relationship into the Log database.
		 * Used internally as a helper method.
		 * @param string $strJournalCommand
		 */
		public function JournalUsuarioAssociation($intAssociatedId, $strJournalCommand) {
			$objDatabase = Menu::GetDatabase()->JournalingDatabase;

			$objDatabase->NonQuery('
				INSERT INTO `usuario_menu_assn` (
					`menu_id`,
					`usuario_id`,
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
		 * Gets the historical journal for an object's Usuario relationship from the log database.
		 * @param integer intId
		 * @return QDatabaseResult $objResult
		 */
		public static function GetJournalUsuarioAssociationForId($intId) {
			$objDatabase = Menu::GetDatabase()->JournalingDatabase;

			return $objDatabase->Query('SELECT * FROM usuario_menu_assn WHERE menu_id = ' .
				$objDatabase->SqlVariable($intId) . ' ORDER BY __sys_date');
		}

		/**
		 * Gets the historical journal for this object's Usuario relationship from the log database.
		 * @return QDatabaseResult $objResult
		 */
		public function GetJournalUsuarioAssociation() {
			return Menu::GetJournalUsuarioAssociationForId($this->intId);
		}

		/**
		 * Associates a Usuario
		 * @param Usuario $objUsuario
		 * @return void
		*/ 
		public function AssociateUsuario(Usuario $objUsuario) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateUsuario on this unsaved Menu.');
			if ((is_null($objUsuario->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateUsuario on this Menu with an unsaved Usuario.');

			// Get the Database Object for this Class
			$objDatabase = Menu::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				INSERT INTO `usuario_menu_assn` (
					`menu_id`,
					`usuario_id`
				) VALUES (
					' . $objDatabase->SqlVariable($this->intId) . ',
					' . $objDatabase->SqlVariable($objUsuario->Id) . '
				)
			');

			// Journaling (if applicable)
			if ($objDatabase->JournalingDatabase)
				$this->JournalUsuarioAssociation($objUsuario->Id, 'INSERT');
		}

		/**
		 * Unassociates a Usuario
		 * @param Usuario $objUsuario
		 * @return void
		*/ 
		public function UnassociateUsuario(Usuario $objUsuario) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateUsuario on this unsaved Menu.');
			if ((is_null($objUsuario->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateUsuario on this Menu with an unsaved Usuario.');

			// Get the Database Object for this Class
			$objDatabase = Menu::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`usuario_menu_assn`
				WHERE
					`menu_id` = ' . $objDatabase->SqlVariable($this->intId) . ' AND
					`usuario_id` = ' . $objDatabase->SqlVariable($objUsuario->Id) . '
			');

			// Journaling (if applicable)
			if ($objDatabase->JournalingDatabase)
				$this->JournalUsuarioAssociation($objUsuario->Id, 'DELETE');
		}

		/**
		 * Unassociates all Usuarios
		 * @return void
		*/ 
		public function UnassociateAllUsuarios() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAllUsuarioArray on this unsaved Menu.');

			// Get the Database Object for this Class
			$objDatabase = Menu::GetDatabase();

			// Journaling (if applicable)
			if ($objDatabase->JournalingDatabase) {
				$objResult = $objDatabase->Query('SELECT `usuario_id` AS associated_id FROM `usuario_menu_assn` WHERE `menu_id` = ' . $objDatabase->SqlVariable($this->intId));
				while ($objRow = $objResult->GetNextRow()) {
					$this->JournalUsuarioAssociation($objRow->GetColumn('associated_id'), 'DELETE');
				}
			}

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`usuario_menu_assn`
				WHERE
					`menu_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}




		////////////////////////////////////////
		// METHODS for SOAP-BASED WEB SERVICES
		////////////////////////////////////////

		public static function GetSoapComplexTypeXml() {
			$strToReturn = '<complexType name="Menu"><sequence>';
			$strToReturn .= '<element name="Id" type="xsd:int"/>';
			$strToReturn .= '<element name="Nome" type="xsd:string"/>';
			$strToReturn .= '<element name="Link" type="xsd:string"/>';
			$strToReturn .= '<element name="Menu" type="xsd1:Menu"/>';
			$strToReturn .= '<element name="Ordenacao" type="xsd:int"/>';
			$strToReturn .= '<element name="Icon" type="xsd:string"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('Menu', $strComplexTypeArray)) {
				$strComplexTypeArray['Menu'] = Menu::GetSoapComplexTypeXml();
				Menu::AlterSoapComplexTypeArray($strComplexTypeArray);
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, Menu::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new Menu();
			if (property_exists($objSoapObject, 'Id'))
				$objToReturn->intId = $objSoapObject->Id;
			if (property_exists($objSoapObject, 'Nome'))
				$objToReturn->strNome = $objSoapObject->Nome;
			if (property_exists($objSoapObject, 'Link'))
				$objToReturn->strLink = $objSoapObject->Link;
			if ((property_exists($objSoapObject, 'Menu')) &&
				($objSoapObject->Menu))
				$objToReturn->Menu = Menu::GetObjectFromSoapObject($objSoapObject->Menu);
			if (property_exists($objSoapObject, 'Ordenacao'))
				$objToReturn->intOrdenacao = $objSoapObject->Ordenacao;
			if (property_exists($objSoapObject, 'Icon'))
				$objToReturn->strIcon = $objSoapObject->Icon;
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, Menu::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->objMenu)
				$objObject->objMenu = Menu::GetSoapObjectFromObject($objObject->objMenu, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intMenuId = null;
			return $objObject;
		}




	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCODO QUERY
	/////////////////////////////////////

	/**
	 * @property-read QQNode $UsuarioId
	 * @property-read QQNodeUsuario $Usuario
	 * @property-read QQNodeUsuario $_ChildTableNode
	 */
	class QQNodeMenuUsuario extends QQAssociationNode {
		protected $strType = 'association';
		protected $strName = 'usuario';

		protected $strTableName = 'usuario_menu_assn';
		protected $strPrimaryKey = 'menu_id';
		protected $strClassName = 'Usuario';

		public function __get($strName) {
			switch ($strName) {
				case 'UsuarioId':
					return new QQNode('usuario_id', 'UsuarioId', 'integer', $this);
				case 'Usuario':
					return new QQNodeUsuario('usuario_id', 'UsuarioId', 'integer', $this);
				case '_ChildTableNode':
					return new QQNodeUsuario('usuario_id', 'UsuarioId', 'integer', $this);
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
	 * @property-read QQNode $Link
	 * @property-read QQNode $MenuId
	 * @property-read QQNodeMenu $Menu
	 * @property-read QQNode $Ordenacao
	 * @property-read QQNode $Icon
	 * @property-read QQNodeMenuUsuario $Usuario
	 * @property-read QQReverseReferenceNodeMenu $ChildMenu
	 */
	class QQNodeMenu extends QQNode {
		protected $strTableName = 'menu';
		protected $strPrimaryKey = 'id';
		protected $strClassName = 'Menu';
		public function __get($strName) {
			switch ($strName) {
				case 'Id':
					return new QQNode('id', 'Id', 'integer', $this);
				case 'Nome':
					return new QQNode('nome', 'Nome', 'string', $this);
				case 'Link':
					return new QQNode('link', 'Link', 'string', $this);
				case 'MenuId':
					return new QQNode('menu_id', 'MenuId', 'integer', $this);
				case 'Menu':
					return new QQNodeMenu('menu_id', 'Menu', 'integer', $this);
				case 'Ordenacao':
					return new QQNode('ordenacao', 'Ordenacao', 'integer', $this);
				case 'Icon':
					return new QQNode('icon', 'Icon', 'string', $this);
				case 'Usuario':
					return new QQNodeMenuUsuario($this);
				case 'ChildMenu':
					return new QQReverseReferenceNodeMenu($this, 'childmenu', 'reverse_reference', 'menu_id');

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
	 * @property-read QQNode $Link
	 * @property-read QQNode $MenuId
	 * @property-read QQNodeMenu $Menu
	 * @property-read QQNode $Ordenacao
	 * @property-read QQNode $Icon
	 * @property-read QQNodeMenuUsuario $Usuario
	 * @property-read QQReverseReferenceNodeMenu $ChildMenu
	 * @property-read QQNode $_PrimaryKeyNode
	 */
	class QQReverseReferenceNodeMenu extends QQReverseReferenceNode {
		protected $strTableName = 'menu';
		protected $strPrimaryKey = 'id';
		protected $strClassName = 'Menu';
		public function __get($strName) {
			switch ($strName) {
				case 'Id':
					return new QQNode('id', 'Id', 'integer', $this);
				case 'Nome':
					return new QQNode('nome', 'Nome', 'string', $this);
				case 'Link':
					return new QQNode('link', 'Link', 'string', $this);
				case 'MenuId':
					return new QQNode('menu_id', 'MenuId', 'integer', $this);
				case 'Menu':
					return new QQNodeMenu('menu_id', 'Menu', 'integer', $this);
				case 'Ordenacao':
					return new QQNode('ordenacao', 'Ordenacao', 'integer', $this);
				case 'Icon':
					return new QQNode('icon', 'Icon', 'string', $this);
				case 'Usuario':
					return new QQNodeMenuUsuario($this);
				case 'ChildMenu':
					return new QQReverseReferenceNodeMenu($this, 'childmenu', 'reverse_reference', 'menu_id');

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