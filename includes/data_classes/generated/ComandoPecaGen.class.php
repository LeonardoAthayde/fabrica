<?php
	/**
	 * The abstract ComandoPecaGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the ComandoPeca subclass which
	 * extends this ComandoPecaGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the ComandoPeca class.
	 * 
	 * @package My Application
	 * @subpackage GeneratedDataObjects
	 * @property integer $Id the value for intId (Read-Only PK)
	 * @property double $Peso the value for fltPeso 
	 * @property integer $QuantidadePanos the value for intQuantidadePanos (Not Null)
	 * @property integer $ComandoId the value for intComandoId (Not Null)
	 * @property integer $TecidoId the value for intTecidoId (Not Null)
	 * @property integer $CorId the value for intCorId (Not Null)
	 * @property Comando $Comando the value for the Comando object referenced by intComandoId (Not Null)
	 * @property Tecido $Tecido the value for the Tecido object referenced by intTecidoId (Not Null)
	 * @property Cor $Cor the value for the Cor object referenced by intCorId (Not Null)
	 * @property ComandoRiscoPeca $_ComandoRiscoPeca the value for the private _objComandoRiscoPeca (Read-Only) if set due to an expansion on the comando_risco_peca.comando_peca_id reverse relationship
	 * @property ComandoRiscoPeca[] $_ComandoRiscoPecaArray the value for the private _objComandoRiscoPecaArray (Read-Only) if set due to an ExpandAsArray on the comando_risco_peca.comando_peca_id reverse relationship
	 * @property boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class ComandoPecaGen extends QBaseClass {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////
		
		/**
		 * Protected member variable that maps to the database PK Identity column comando_peca.id
		 * @var integer intId
		 */
		protected $intId;
		const IdDefault = null;


		/**
		 * Protected member variable that maps to the database column comando_peca.peso
		 * @var double fltPeso
		 */
		protected $fltPeso;
		const PesoDefault = null;


		/**
		 * Protected member variable that maps to the database column comando_peca.quantidade_panos
		 * @var integer intQuantidadePanos
		 */
		protected $intQuantidadePanos;
		const QuantidadePanosDefault = null;


		/**
		 * Protected member variable that maps to the database column comando_peca.comando_id
		 * @var integer intComandoId
		 */
		protected $intComandoId;
		const ComandoIdDefault = null;


		/**
		 * Protected member variable that maps to the database column comando_peca.tecido_id
		 * @var integer intTecidoId
		 */
		protected $intTecidoId;
		const TecidoIdDefault = null;


		/**
		 * Protected member variable that maps to the database column comando_peca.cor_id
		 * @var integer intCorId
		 */
		protected $intCorId;
		const CorIdDefault = null;


		/**
		 * Private member variable that stores a reference to a single ComandoRiscoPeca object
		 * (of type ComandoRiscoPeca), if this ComandoPeca object was restored with
		 * an expansion on the comando_risco_peca association table.
		 * @var ComandoRiscoPeca _objComandoRiscoPeca;
		 */
		private $_objComandoRiscoPeca;

		/**
		 * Private member variable that stores a reference to an array of ComandoRiscoPeca objects
		 * (of type ComandoRiscoPeca[]), if this ComandoPeca object was restored with
		 * an ExpandAsArray on the comando_risco_peca association table.
		 * @var ComandoRiscoPeca[] _objComandoRiscoPecaArray;
		 */
		private $_objComandoRiscoPecaArray = array();

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
		 * in the database column comando_peca.comando_id.
		 *
		 * NOTE: Always use the Comando property getter to correctly retrieve this Comando object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Comando objComando
		 */
		protected $objComando;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column comando_peca.tecido_id.
		 *
		 * NOTE: Always use the Tecido property getter to correctly retrieve this Tecido object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Tecido objTecido
		 */
		protected $objTecido;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column comando_peca.cor_id.
		 *
		 * NOTE: Always use the Cor property getter to correctly retrieve this Cor object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Cor objCor
		 */
		protected $objCor;





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
		 * Load a ComandoPeca from PK Info
		 * @param integer $intId
		 * @return ComandoPeca
		 */
		public static function Load($intId) {
			// Use QuerySingle to Perform the Query
			return ComandoPeca::QuerySingle(
				QQ::Equal(QQN::ComandoPeca()->Id, $intId)
			);
		}

		/**
		 * Load all ComandoPecas
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return ComandoPeca[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			// Call ComandoPeca::QueryArray to perform the LoadAll query
			try {
				return ComandoPeca::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all ComandoPecas
		 * @return int
		 */
		public static function CountAll() {
			// Call ComandoPeca::QueryCount to perform the CountAll query
			return ComandoPeca::QueryCount(QQ::All());
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
			$objDatabase = ComandoPeca::GetDatabase();

			// Create/Build out the QueryBuilder object with ComandoPeca-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'comando_peca');
			ComandoPeca::GetSelectFields($objQueryBuilder);
			$objQueryBuilder->AddFromItem('comando_peca');

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
		 * Static Qcodo Query method to query for a single ComandoPeca object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return ComandoPeca the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = ComandoPeca::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Instantiate a new ComandoPeca object and return it

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = ComandoPeca::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return ComandoPeca::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcodo Query method to query for an array of ComandoPeca objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return ComandoPeca[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = ComandoPeca::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return ComandoPeca::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
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
				$strQuery = ComandoPeca::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
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
		 * Static Qcodo Query method to query for a count of ComandoPeca objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = ComandoPeca::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = ComandoPeca::GetDatabase();

			// Lookup the QCache for This Query Statement
			$objCache = new QCache('query', 'comando_peca_' . serialize($strConditions));
			if (!($strQuery = $objCache->GetData())) {
				// Not Found -- Go ahead and Create/Build out a new QueryBuilder object with ComandoPeca-specific fields
				$objQueryBuilder = new QQueryBuilder($objDatabase);
				ComandoPeca::GetSelectFields($objQueryBuilder);
				ComandoPeca::GetFromFields($objQueryBuilder);

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
			return ComandoPeca::InstantiateDbResult($objDbResult);
		}*/

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this ComandoPeca
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'comando_peca';
				$strAliasPrefix = '';
			}

			$objBuilder->AddSelectItem($strTableName, 'id', $strAliasPrefix . 'id');
			$objBuilder->AddSelectItem($strTableName, 'peso', $strAliasPrefix . 'peso');
			$objBuilder->AddSelectItem($strTableName, 'quantidade_panos', $strAliasPrefix . 'quantidade_panos');
			$objBuilder->AddSelectItem($strTableName, 'comando_id', $strAliasPrefix . 'comando_id');
			$objBuilder->AddSelectItem($strTableName, 'tecido_id', $strAliasPrefix . 'tecido_id');
			$objBuilder->AddSelectItem($strTableName, 'cor_id', $strAliasPrefix . 'cor_id');
		}




		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a ComandoPeca from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this ComandoPeca::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param QDatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $objPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return ComandoPeca
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
					$strAliasPrefix = 'comando_peca__';


				$strAlias = $strAliasPrefix . 'comandoriscopeca__id';
				$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
				if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
					(!is_null($objDbRow->GetColumn($strAliasName)))) {
					if ($intPreviousChildItemCount = count($objPreviousItem->_objComandoRiscoPecaArray)) {
						$objPreviousChildItem = $objPreviousItem->_objComandoRiscoPecaArray[$intPreviousChildItemCount - 1];
						$objChildItem = ComandoRiscoPeca::InstantiateDbRow($objDbRow, $strAliasPrefix . 'comandoriscopeca__', $strExpandAsArrayNodes, $objPreviousChildItem, $strColumnAliasArray);
						if ($objChildItem)
							$objPreviousItem->_objComandoRiscoPecaArray[] = $objChildItem;
					} else
						$objPreviousItem->_objComandoRiscoPecaArray[] = ComandoRiscoPeca::InstantiateDbRow($objDbRow, $strAliasPrefix . 'comandoriscopeca__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
					$blnExpandedViaArray = true;
				}

				// Either return false to signal array expansion, or check-to-reset the Alias prefix and move on
				if ($blnExpandedViaArray)
					return false;
				else if ($strAliasPrefix == 'comando_peca__')
					$strAliasPrefix = null;
			}

			// Create a new instance of the ComandoPeca object
			$objToReturn = new ComandoPeca();
			$objToReturn->__blnRestored = true;

			$strAliasName = array_key_exists($strAliasPrefix . 'id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'id'] : $strAliasPrefix . 'id';
			$objToReturn->intId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'peso', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'peso'] : $strAliasPrefix . 'peso';
			$objToReturn->fltPeso = $objDbRow->GetColumn($strAliasName, 'Float');
			$strAliasName = array_key_exists($strAliasPrefix . 'quantidade_panos', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'quantidade_panos'] : $strAliasPrefix . 'quantidade_panos';
			$objToReturn->intQuantidadePanos = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'comando_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'comando_id'] : $strAliasPrefix . 'comando_id';
			$objToReturn->intComandoId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'tecido_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'tecido_id'] : $strAliasPrefix . 'tecido_id';
			$objToReturn->intTecidoId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'cor_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'cor_id'] : $strAliasPrefix . 'cor_id';
			$objToReturn->intCorId = $objDbRow->GetColumn($strAliasName, 'Integer');

			// Instantiate Virtual Attributes
			foreach ($objDbRow->GetColumnNameArray() as $strColumnName => $mixValue) {
				$strVirtualPrefix = $strAliasPrefix . '__';
				$strVirtualPrefixLength = strlen($strVirtualPrefix);
				if (substr($strColumnName, 0, $strVirtualPrefixLength) == $strVirtualPrefix)
					$objToReturn->__strVirtualAttributeArray[substr($strColumnName, $strVirtualPrefixLength)] = $mixValue;
			}

			// Prepare to Check for Early/Virtual Binding
			if (!$strAliasPrefix)
				$strAliasPrefix = 'comando_peca__';

			// Check for Comando Early Binding
			$strAlias = $strAliasPrefix . 'comando_id__id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objComando = Comando::InstantiateDbRow($objDbRow, $strAliasPrefix . 'comando_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for Tecido Early Binding
			$strAlias = $strAliasPrefix . 'tecido_id__id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objTecido = Tecido::InstantiateDbRow($objDbRow, $strAliasPrefix . 'tecido_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for Cor Early Binding
			$strAlias = $strAliasPrefix . 'cor_id__id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objCor = Cor::InstantiateDbRow($objDbRow, $strAliasPrefix . 'cor_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);




			// Check for ComandoRiscoPeca Virtual Binding
			$strAlias = $strAliasPrefix . 'comandoriscopeca__id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
					$objToReturn->_objComandoRiscoPecaArray[] = ComandoRiscoPeca::InstantiateDbRow($objDbRow, $strAliasPrefix . 'comandoriscopeca__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objComandoRiscoPeca = ComandoRiscoPeca::InstantiateDbRow($objDbRow, $strAliasPrefix . 'comandoriscopeca__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate an array of ComandoPecas from a Database Result
		 * @param QDatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return ComandoPeca[]
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
					$objItem = ComandoPeca::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objLastRowItem, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
						$objLastRowItem = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = ComandoPeca::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate a single ComandoPeca object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return ComandoPeca next row resulting from the query
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
			return ComandoPeca::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, null, $strColumnAliasArray);
		}




		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////
			
		/**
		 * Load a single ComandoPeca object,
		 * by Id Index(es)
		 * @param integer $intId
		 * @return ComandoPeca
		*/
		public static function LoadById($intId, $objOptionalClauses = null) {
			return ComandoPeca::QuerySingle(
				QQ::Equal(QQN::ComandoPeca()->Id, $intId)
			, $objOptionalClauses
			);
		}
			
		/**
		 * Load an array of ComandoPeca objects,
		 * by ComandoId Index(es)
		 * @param integer $intComandoId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return ComandoPeca[]
		*/
		public static function LoadArrayByComandoId($intComandoId, $objOptionalClauses = null) {
			// Call ComandoPeca::QueryArray to perform the LoadArrayByComandoId query
			try {
				return ComandoPeca::QueryArray(
					QQ::Equal(QQN::ComandoPeca()->ComandoId, $intComandoId),
					$objOptionalClauses
					);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count ComandoPecas
		 * by ComandoId Index(es)
		 * @param integer $intComandoId
		 * @return int
		*/
		public static function CountByComandoId($intComandoId, $objOptionalClauses = null) {
			// Call ComandoPeca::QueryCount to perform the CountByComandoId query
			return ComandoPeca::QueryCount(
				QQ::Equal(QQN::ComandoPeca()->ComandoId, $intComandoId)
			, $objOptionalClauses
			);
		}
			
		/**
		 * Load an array of ComandoPeca objects,
		 * by TecidoId Index(es)
		 * @param integer $intTecidoId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return ComandoPeca[]
		*/
		public static function LoadArrayByTecidoId($intTecidoId, $objOptionalClauses = null) {
			// Call ComandoPeca::QueryArray to perform the LoadArrayByTecidoId query
			try {
				return ComandoPeca::QueryArray(
					QQ::Equal(QQN::ComandoPeca()->TecidoId, $intTecidoId),
					$objOptionalClauses
					);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count ComandoPecas
		 * by TecidoId Index(es)
		 * @param integer $intTecidoId
		 * @return int
		*/
		public static function CountByTecidoId($intTecidoId, $objOptionalClauses = null) {
			// Call ComandoPeca::QueryCount to perform the CountByTecidoId query
			return ComandoPeca::QueryCount(
				QQ::Equal(QQN::ComandoPeca()->TecidoId, $intTecidoId)
			, $objOptionalClauses
			);
		}
			
		/**
		 * Load an array of ComandoPeca objects,
		 * by CorId Index(es)
		 * @param integer $intCorId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return ComandoPeca[]
		*/
		public static function LoadArrayByCorId($intCorId, $objOptionalClauses = null) {
			// Call ComandoPeca::QueryArray to perform the LoadArrayByCorId query
			try {
				return ComandoPeca::QueryArray(
					QQ::Equal(QQN::ComandoPeca()->CorId, $intCorId),
					$objOptionalClauses
					);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count ComandoPecas
		 * by CorId Index(es)
		 * @param integer $intCorId
		 * @return int
		*/
		public static function CountByCorId($intCorId, $objOptionalClauses = null) {
			// Call ComandoPeca::QueryCount to perform the CountByCorId query
			return ComandoPeca::QueryCount(
				QQ::Equal(QQN::ComandoPeca()->CorId, $intCorId)
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
		 * Save this ComandoPeca
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = ComandoPeca::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `comando_peca` (
							`peso`,
							`quantidade_panos`,
							`comando_id`,
							`tecido_id`,
							`cor_id`
						) VALUES (
							' . $objDatabase->SqlVariable($this->fltPeso) . ',
							' . $objDatabase->SqlVariable($this->intQuantidadePanos) . ',
							' . $objDatabase->SqlVariable($this->intComandoId) . ',
							' . $objDatabase->SqlVariable($this->intTecidoId) . ',
							' . $objDatabase->SqlVariable($this->intCorId) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intId = $objDatabase->InsertId('comando_peca', 'id');

					// Journaling
					if ($objDatabase->JournalingDatabase) $this->Journal('INSERT');

				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`comando_peca`
						SET
							`peso` = ' . $objDatabase->SqlVariable($this->fltPeso) . ',
							`quantidade_panos` = ' . $objDatabase->SqlVariable($this->intQuantidadePanos) . ',
							`comando_id` = ' . $objDatabase->SqlVariable($this->intComandoId) . ',
							`tecido_id` = ' . $objDatabase->SqlVariable($this->intTecidoId) . ',
							`cor_id` = ' . $objDatabase->SqlVariable($this->intCorId) . '
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
		 * Delete this ComandoPeca
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this ComandoPeca with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = ComandoPeca::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`comando_peca`
				WHERE
					`id` = ' . $objDatabase->SqlVariable($this->intId) . '');

			// Journaling
			if ($objDatabase->JournalingDatabase) $this->Journal('DELETE');
		}

		/**
		 * Delete all ComandoPecas
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = ComandoPeca::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`comando_peca`');
		}

		/**
		 * Truncate comando_peca table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = ComandoPeca::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `comando_peca`');
		}

		/**
		 * Reload this ComandoPeca from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved ComandoPeca object.');

			// Reload the Object
			$objReloaded = ComandoPeca::Load($this->intId);

			// Update $this's local variables to match
			$this->fltPeso = $objReloaded->fltPeso;
			$this->intQuantidadePanos = $objReloaded->intQuantidadePanos;
			$this->ComandoId = $objReloaded->ComandoId;
			$this->TecidoId = $objReloaded->TecidoId;
			$this->CorId = $objReloaded->CorId;
		}

		/**
		 * Journals the current object into the Log database.
		 * Used internally as a helper method.
		 * @param string $strJournalCommand
		 */
		public function Journal($strJournalCommand) {
			$objDatabase = ComandoPeca::GetDatabase()->JournalingDatabase;

			$objDatabase->NonQuery('
				INSERT INTO `comando_peca` (
					`id`,
					`peso`,
					`quantidade_panos`,
					`comando_id`,
					`tecido_id`,
					`cor_id`,
					__sys_login_id,
					__sys_action,
					__sys_date
				) VALUES (
					' . $objDatabase->SqlVariable($this->intId) . ',
					' . $objDatabase->SqlVariable($this->fltPeso) . ',
					' . $objDatabase->SqlVariable($this->intQuantidadePanos) . ',
					' . $objDatabase->SqlVariable($this->intComandoId) . ',
					' . $objDatabase->SqlVariable($this->intTecidoId) . ',
					' . $objDatabase->SqlVariable($this->intCorId) . ',
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
		 * @return ComandoPeca[]
		 */
		public static function GetJournalForId($intId) {
			$objDatabase = ComandoPeca::GetDatabase()->JournalingDatabase;

			$objResult = $objDatabase->Query('SELECT * FROM comando_peca WHERE id = ' .
				$objDatabase->SqlVariable($intId) . ' ORDER BY __sys_date');

			return ComandoPeca::InstantiateDbResult($objResult);
		}

		/**
		 * Gets the historical journal for this object from the log database.
		 * Objects will have VirtualAttributes available to lookup login, date, and action information from the journal object.
		 * @return ComandoPeca[]
		 */
		public function GetJournal() {
			return ComandoPeca::GetJournalForId($this->intId);
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

				case 'Peso':
					// Gets the value for fltPeso 
					// @return double
					return $this->fltPeso;

				case 'QuantidadePanos':
					// Gets the value for intQuantidadePanos (Not Null)
					// @return integer
					return $this->intQuantidadePanos;

				case 'ComandoId':
					// Gets the value for intComandoId (Not Null)
					// @return integer
					return $this->intComandoId;

				case 'TecidoId':
					// Gets the value for intTecidoId (Not Null)
					// @return integer
					return $this->intTecidoId;

				case 'CorId':
					// Gets the value for intCorId (Not Null)
					// @return integer
					return $this->intCorId;


				///////////////////
				// Member Objects
				///////////////////
				case 'Comando':
					// Gets the value for the Comando object referenced by intComandoId (Not Null)
					// @return Comando
					try {
						if ((!$this->objComando) && (!is_null($this->intComandoId)))
							$this->objComando = Comando::Load($this->intComandoId);
						return $this->objComando;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Tecido':
					// Gets the value for the Tecido object referenced by intTecidoId (Not Null)
					// @return Tecido
					try {
						if ((!$this->objTecido) && (!is_null($this->intTecidoId)))
							$this->objTecido = Tecido::Load($this->intTecidoId);
						return $this->objTecido;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Cor':
					// Gets the value for the Cor object referenced by intCorId (Not Null)
					// @return Cor
					try {
						if ((!$this->objCor) && (!is_null($this->intCorId)))
							$this->objCor = Cor::Load($this->intCorId);
						return $this->objCor;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				////////////////////////////
				// Virtual Object References (Many to Many and Reverse References)
				// (If restored via a "Many-to" expansion)
				////////////////////////////

				case '_ComandoRiscoPeca':
					// Gets the value for the private _objComandoRiscoPeca (Read-Only)
					// if set due to an expansion on the comando_risco_peca.comando_peca_id reverse relationship
					// @return ComandoRiscoPeca
					return $this->_objComandoRiscoPeca;

				case '_ComandoRiscoPecaArray':
					// Gets the value for the private _objComandoRiscoPecaArray (Read-Only)
					// if set due to an ExpandAsArray on the comando_risco_peca.comando_peca_id reverse relationship
					// @return ComandoRiscoPeca[]
					return (array) $this->_objComandoRiscoPecaArray;


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
				case 'Peso':
					// Sets the value for fltPeso 
					// @param double $mixValue
					// @return double
					try {
						return ($this->fltPeso = QType::Cast($mixValue, QType::Float));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'QuantidadePanos':
					// Sets the value for intQuantidadePanos (Not Null)
					// @param integer $mixValue
					// @return integer
					try {
						return ($this->intQuantidadePanos = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'ComandoId':
					// Sets the value for intComandoId (Not Null)
					// @param integer $mixValue
					// @return integer
					try {
						$this->objComando = null;
						return ($this->intComandoId = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'TecidoId':
					// Sets the value for intTecidoId (Not Null)
					// @param integer $mixValue
					// @return integer
					try {
						$this->objTecido = null;
						return ($this->intTecidoId = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'CorId':
					// Sets the value for intCorId (Not Null)
					// @param integer $mixValue
					// @return integer
					try {
						$this->objCor = null;
						return ($this->intCorId = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				///////////////////
				// Member Objects
				///////////////////
				case 'Comando':
					// Sets the value for the Comando object referenced by intComandoId (Not Null)
					// @param Comando $mixValue
					// @return Comando
					if (is_null($mixValue)) {
						$this->intComandoId = null;
						$this->objComando = null;
						return null;
					} else {
						// Make sure $mixValue actually is a Comando object
						try {
							$mixValue = QType::Cast($mixValue, 'Comando');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						} 

						// Make sure $mixValue is a SAVED Comando object
						if (is_null($mixValue->Id))
							throw new QCallerException('Unable to set an unsaved Comando for this ComandoPeca');

						// Update Local Member Variables
						$this->objComando = $mixValue;
						$this->intComandoId = $mixValue->Id;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'Tecido':
					// Sets the value for the Tecido object referenced by intTecidoId (Not Null)
					// @param Tecido $mixValue
					// @return Tecido
					if (is_null($mixValue)) {
						$this->intTecidoId = null;
						$this->objTecido = null;
						return null;
					} else {
						// Make sure $mixValue actually is a Tecido object
						try {
							$mixValue = QType::Cast($mixValue, 'Tecido');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						} 

						// Make sure $mixValue is a SAVED Tecido object
						if (is_null($mixValue->Id))
							throw new QCallerException('Unable to set an unsaved Tecido for this ComandoPeca');

						// Update Local Member Variables
						$this->objTecido = $mixValue;
						$this->intTecidoId = $mixValue->Id;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'Cor':
					// Sets the value for the Cor object referenced by intCorId (Not Null)
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
							throw new QCallerException('Unable to set an unsaved Cor for this ComandoPeca');

						// Update Local Member Variables
						$this->objCor = $mixValue;
						$this->intCorId = $mixValue->Id;

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

			
		
		// Related Objects' Methods for ComandoRiscoPeca
		//-------------------------------------------------------------------

		/**
		 * Gets all associated ComandoRiscoPecas as an array of ComandoRiscoPeca objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return ComandoRiscoPeca[]
		*/ 
		public function GetComandoRiscoPecaArray($objOptionalClauses = null) {
			if ((is_null($this->intId)))
				return array();

			try {
				return ComandoRiscoPeca::LoadArrayByComandoPecaId($this->intId, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated ComandoRiscoPecas
		 * @return int
		*/ 
		public function CountComandoRiscoPecas() {
			if ((is_null($this->intId)))
				return 0;

			return ComandoRiscoPeca::CountByComandoPecaId($this->intId);
		}

		/**
		 * Associates a ComandoRiscoPeca
		 * @param ComandoRiscoPeca $objComandoRiscoPeca
		 * @return void
		*/ 
		public function AssociateComandoRiscoPeca(ComandoRiscoPeca $objComandoRiscoPeca) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateComandoRiscoPeca on this unsaved ComandoPeca.');
			if ((is_null($objComandoRiscoPeca->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateComandoRiscoPeca on this ComandoPeca with an unsaved ComandoRiscoPeca.');

			// Get the Database Object for this Class
			$objDatabase = ComandoPeca::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`comando_risco_peca`
				SET
					`comando_peca_id` = ' . $objDatabase->SqlVariable($this->intId) . '
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objComandoRiscoPeca->Id) . '
			');

			// Journaling (if applicable)
			if ($objDatabase->JournalingDatabase) {
				$objComandoRiscoPeca->ComandoPecaId = $this->intId;
				$objComandoRiscoPeca->Journal('UPDATE');
			}
		}

		/**
		 * Unassociates a ComandoRiscoPeca
		 * @param ComandoRiscoPeca $objComandoRiscoPeca
		 * @return void
		*/ 
		public function UnassociateComandoRiscoPeca(ComandoRiscoPeca $objComandoRiscoPeca) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateComandoRiscoPeca on this unsaved ComandoPeca.');
			if ((is_null($objComandoRiscoPeca->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateComandoRiscoPeca on this ComandoPeca with an unsaved ComandoRiscoPeca.');

			// Get the Database Object for this Class
			$objDatabase = ComandoPeca::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`comando_risco_peca`
				SET
					`comando_peca_id` = null
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objComandoRiscoPeca->Id) . ' AND
					`comando_peca_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				$objComandoRiscoPeca->ComandoPecaId = null;
				$objComandoRiscoPeca->Journal('UPDATE');
			}
		}

		/**
		 * Unassociates all ComandoRiscoPecas
		 * @return void
		*/ 
		public function UnassociateAllComandoRiscoPecas() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateComandoRiscoPeca on this unsaved ComandoPeca.');

			// Get the Database Object for this Class
			$objDatabase = ComandoPeca::GetDatabase();

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				foreach (ComandoRiscoPeca::LoadArrayByComandoPecaId($this->intId) as $objComandoRiscoPeca) {
					$objComandoRiscoPeca->ComandoPecaId = null;
					$objComandoRiscoPeca->Journal('UPDATE');
				}
			}

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`comando_risco_peca`
				SET
					`comando_peca_id` = null
				WHERE
					`comando_peca_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Deletes an associated ComandoRiscoPeca
		 * @param ComandoRiscoPeca $objComandoRiscoPeca
		 * @return void
		*/ 
		public function DeleteAssociatedComandoRiscoPeca(ComandoRiscoPeca $objComandoRiscoPeca) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateComandoRiscoPeca on this unsaved ComandoPeca.');
			if ((is_null($objComandoRiscoPeca->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateComandoRiscoPeca on this ComandoPeca with an unsaved ComandoRiscoPeca.');

			// Get the Database Object for this Class
			$objDatabase = ComandoPeca::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`comando_risco_peca`
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objComandoRiscoPeca->Id) . ' AND
					`comando_peca_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				$objComandoRiscoPeca->Journal('DELETE');
			}
		}

		/**
		 * Deletes all associated ComandoRiscoPecas
		 * @return void
		*/ 
		public function DeleteAllComandoRiscoPecas() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateComandoRiscoPeca on this unsaved ComandoPeca.');

			// Get the Database Object for this Class
			$objDatabase = ComandoPeca::GetDatabase();

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				foreach (ComandoRiscoPeca::LoadArrayByComandoPecaId($this->intId) as $objComandoRiscoPeca) {
					$objComandoRiscoPeca->Journal('DELETE');
				}
			}

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`comando_risco_peca`
				WHERE
					`comando_peca_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}





		////////////////////////////////////////
		// METHODS for SOAP-BASED WEB SERVICES
		////////////////////////////////////////

		public static function GetSoapComplexTypeXml() {
			$strToReturn = '<complexType name="ComandoPeca"><sequence>';
			$strToReturn .= '<element name="Id" type="xsd:int"/>';
			$strToReturn .= '<element name="Peso" type="xsd:float"/>';
			$strToReturn .= '<element name="QuantidadePanos" type="xsd:int"/>';
			$strToReturn .= '<element name="Comando" type="xsd1:Comando"/>';
			$strToReturn .= '<element name="Tecido" type="xsd1:Tecido"/>';
			$strToReturn .= '<element name="Cor" type="xsd1:Cor"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('ComandoPeca', $strComplexTypeArray)) {
				$strComplexTypeArray['ComandoPeca'] = ComandoPeca::GetSoapComplexTypeXml();
				Comando::AlterSoapComplexTypeArray($strComplexTypeArray);
				Tecido::AlterSoapComplexTypeArray($strComplexTypeArray);
				Cor::AlterSoapComplexTypeArray($strComplexTypeArray);
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, ComandoPeca::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new ComandoPeca();
			if (property_exists($objSoapObject, 'Id'))
				$objToReturn->intId = $objSoapObject->Id;
			if (property_exists($objSoapObject, 'Peso'))
				$objToReturn->fltPeso = $objSoapObject->Peso;
			if (property_exists($objSoapObject, 'QuantidadePanos'))
				$objToReturn->intQuantidadePanos = $objSoapObject->QuantidadePanos;
			if ((property_exists($objSoapObject, 'Comando')) &&
				($objSoapObject->Comando))
				$objToReturn->Comando = Comando::GetObjectFromSoapObject($objSoapObject->Comando);
			if ((property_exists($objSoapObject, 'Tecido')) &&
				($objSoapObject->Tecido))
				$objToReturn->Tecido = Tecido::GetObjectFromSoapObject($objSoapObject->Tecido);
			if ((property_exists($objSoapObject, 'Cor')) &&
				($objSoapObject->Cor))
				$objToReturn->Cor = Cor::GetObjectFromSoapObject($objSoapObject->Cor);
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, ComandoPeca::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->objComando)
				$objObject->objComando = Comando::GetSoapObjectFromObject($objObject->objComando, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intComandoId = null;
			if ($objObject->objTecido)
				$objObject->objTecido = Tecido::GetSoapObjectFromObject($objObject->objTecido, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intTecidoId = null;
			if ($objObject->objCor)
				$objObject->objCor = Cor::GetSoapObjectFromObject($objObject->objCor, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intCorId = null;
			return $objObject;
		}




	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCODO QUERY
	/////////////////////////////////////

	/**
	 * @property-read QQNode $Id
	 * @property-read QQNode $Peso
	 * @property-read QQNode $QuantidadePanos
	 * @property-read QQNode $ComandoId
	 * @property-read QQNodeComando $Comando
	 * @property-read QQNode $TecidoId
	 * @property-read QQNodeTecido $Tecido
	 * @property-read QQNode $CorId
	 * @property-read QQNodeCor $Cor
	 * @property-read QQReverseReferenceNodeComandoRiscoPeca $ComandoRiscoPeca
	 */
	class QQNodeComandoPeca extends QQNode {
		protected $strTableName = 'comando_peca';
		protected $strPrimaryKey = 'id';
		protected $strClassName = 'ComandoPeca';
		public function __get($strName) {
			switch ($strName) {
				case 'Id':
					return new QQNode('id', 'Id', 'integer', $this);
				case 'Peso':
					return new QQNode('peso', 'Peso', 'double', $this);
				case 'QuantidadePanos':
					return new QQNode('quantidade_panos', 'QuantidadePanos', 'integer', $this);
				case 'ComandoId':
					return new QQNode('comando_id', 'ComandoId', 'integer', $this);
				case 'Comando':
					return new QQNodeComando('comando_id', 'Comando', 'integer', $this);
				case 'TecidoId':
					return new QQNode('tecido_id', 'TecidoId', 'integer', $this);
				case 'Tecido':
					return new QQNodeTecido('tecido_id', 'Tecido', 'integer', $this);
				case 'CorId':
					return new QQNode('cor_id', 'CorId', 'integer', $this);
				case 'Cor':
					return new QQNodeCor('cor_id', 'Cor', 'integer', $this);
				case 'ComandoRiscoPeca':
					return new QQReverseReferenceNodeComandoRiscoPeca($this, 'comandoriscopeca', 'reverse_reference', 'comando_peca_id');

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
	 * @property-read QQNode $Peso
	 * @property-read QQNode $QuantidadePanos
	 * @property-read QQNode $ComandoId
	 * @property-read QQNodeComando $Comando
	 * @property-read QQNode $TecidoId
	 * @property-read QQNodeTecido $Tecido
	 * @property-read QQNode $CorId
	 * @property-read QQNodeCor $Cor
	 * @property-read QQReverseReferenceNodeComandoRiscoPeca $ComandoRiscoPeca
	 * @property-read QQNode $_PrimaryKeyNode
	 */
	class QQReverseReferenceNodeComandoPeca extends QQReverseReferenceNode {
		protected $strTableName = 'comando_peca';
		protected $strPrimaryKey = 'id';
		protected $strClassName = 'ComandoPeca';
		public function __get($strName) {
			switch ($strName) {
				case 'Id':
					return new QQNode('id', 'Id', 'integer', $this);
				case 'Peso':
					return new QQNode('peso', 'Peso', 'double', $this);
				case 'QuantidadePanos':
					return new QQNode('quantidade_panos', 'QuantidadePanos', 'integer', $this);
				case 'ComandoId':
					return new QQNode('comando_id', 'ComandoId', 'integer', $this);
				case 'Comando':
					return new QQNodeComando('comando_id', 'Comando', 'integer', $this);
				case 'TecidoId':
					return new QQNode('tecido_id', 'TecidoId', 'integer', $this);
				case 'Tecido':
					return new QQNodeTecido('tecido_id', 'Tecido', 'integer', $this);
				case 'CorId':
					return new QQNode('cor_id', 'CorId', 'integer', $this);
				case 'Cor':
					return new QQNodeCor('cor_id', 'Cor', 'integer', $this);
				case 'ComandoRiscoPeca':
					return new QQReverseReferenceNodeComandoRiscoPeca($this, 'comandoriscopeca', 'reverse_reference', 'comando_peca_id');

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