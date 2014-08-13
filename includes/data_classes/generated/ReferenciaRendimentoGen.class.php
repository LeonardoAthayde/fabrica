<?php
	/**
	 * The abstract ReferenciaRendimentoGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the ReferenciaRendimento subclass which
	 * extends this ReferenciaRendimentoGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the ReferenciaRendimento class.
	 * 
	 * @package My Application
	 * @subpackage GeneratedDataObjects
	 * @property integer $Id the value for intId (Read-Only PK)
	 * @property integer $MoldeId the value for intMoldeId (Not Null)
	 * @property integer $ReferenciaId the value for intReferenciaId (Not Null)
	 * @property double $Comprimento the value for fltComprimento (Not Null)
	 * @property integer $Pecas the value for intPecas (Not Null)
	 * @property double $Peso the value for fltPeso (Not Null)
	 * @property double $Preco the value for fltPreco (Not Null)
	 * @property integer $TecidoId the value for intTecidoId (Not Null)
	 * @property Molde $Molde the value for the Molde object referenced by intMoldeId (Not Null)
	 * @property Referencia $Referencia the value for the Referencia object referenced by intReferenciaId (Not Null)
	 * @property Tecido $Tecido the value for the Tecido object referenced by intTecidoId (Not Null)
	 * @property boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class ReferenciaRendimentoGen extends QBaseClass {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////
		
		/**
		 * Protected member variable that maps to the database PK Identity column referencia_rendimento.id
		 * @var integer intId
		 */
		protected $intId;
		const IdDefault = null;


		/**
		 * Protected member variable that maps to the database column referencia_rendimento.molde_id
		 * @var integer intMoldeId
		 */
		protected $intMoldeId;
		const MoldeIdDefault = null;


		/**
		 * Protected member variable that maps to the database column referencia_rendimento.referencia_id
		 * @var integer intReferenciaId
		 */
		protected $intReferenciaId;
		const ReferenciaIdDefault = null;


		/**
		 * Protected member variable that maps to the database column referencia_rendimento.comprimento
		 * @var double fltComprimento
		 */
		protected $fltComprimento;
		const ComprimentoDefault = null;


		/**
		 * Protected member variable that maps to the database column referencia_rendimento.pecas
		 * @var integer intPecas
		 */
		protected $intPecas;
		const PecasDefault = null;


		/**
		 * Protected member variable that maps to the database column referencia_rendimento.peso
		 * @var double fltPeso
		 */
		protected $fltPeso;
		const PesoDefault = null;


		/**
		 * Protected member variable that maps to the database column referencia_rendimento.preco
		 * @var double fltPreco
		 */
		protected $fltPreco;
		const PrecoDefault = null;


		/**
		 * Protected member variable that maps to the database column referencia_rendimento.tecido_id
		 * @var integer intTecidoId
		 */
		protected $intTecidoId;
		const TecidoIdDefault = null;


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
		 * in the database column referencia_rendimento.molde_id.
		 *
		 * NOTE: Always use the Molde property getter to correctly retrieve this Molde object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Molde objMolde
		 */
		protected $objMolde;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column referencia_rendimento.referencia_id.
		 *
		 * NOTE: Always use the Referencia property getter to correctly retrieve this Referencia object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Referencia objReferencia
		 */
		protected $objReferencia;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column referencia_rendimento.tecido_id.
		 *
		 * NOTE: Always use the Tecido property getter to correctly retrieve this Tecido object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Tecido objTecido
		 */
		protected $objTecido;





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
		 * Load a ReferenciaRendimento from PK Info
		 * @param integer $intId
		 * @return ReferenciaRendimento
		 */
		public static function Load($intId) {
			// Use QuerySingle to Perform the Query
			return ReferenciaRendimento::QuerySingle(
				QQ::Equal(QQN::ReferenciaRendimento()->Id, $intId)
			);
		}

		/**
		 * Load all ReferenciaRendimentos
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return ReferenciaRendimento[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			// Call ReferenciaRendimento::QueryArray to perform the LoadAll query
			try {
				return ReferenciaRendimento::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all ReferenciaRendimentos
		 * @return int
		 */
		public static function CountAll() {
			// Call ReferenciaRendimento::QueryCount to perform the CountAll query
			return ReferenciaRendimento::QueryCount(QQ::All());
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
			$objDatabase = ReferenciaRendimento::GetDatabase();

			// Create/Build out the QueryBuilder object with ReferenciaRendimento-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'referencia_rendimento');
			ReferenciaRendimento::GetSelectFields($objQueryBuilder);
			$objQueryBuilder->AddFromItem('referencia_rendimento');

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
		 * Static Qcodo Query method to query for a single ReferenciaRendimento object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return ReferenciaRendimento the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = ReferenciaRendimento::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Instantiate a new ReferenciaRendimento object and return it

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = ReferenciaRendimento::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return ReferenciaRendimento::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcodo Query method to query for an array of ReferenciaRendimento objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return ReferenciaRendimento[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = ReferenciaRendimento::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return ReferenciaRendimento::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
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
				$strQuery = ReferenciaRendimento::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
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
		 * Static Qcodo Query method to query for a count of ReferenciaRendimento objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = ReferenciaRendimento::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = ReferenciaRendimento::GetDatabase();

			// Lookup the QCache for This Query Statement
			$objCache = new QCache('query', 'referencia_rendimento_' . serialize($strConditions));
			if (!($strQuery = $objCache->GetData())) {
				// Not Found -- Go ahead and Create/Build out a new QueryBuilder object with ReferenciaRendimento-specific fields
				$objQueryBuilder = new QQueryBuilder($objDatabase);
				ReferenciaRendimento::GetSelectFields($objQueryBuilder);
				ReferenciaRendimento::GetFromFields($objQueryBuilder);

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
			return ReferenciaRendimento::InstantiateDbResult($objDbResult);
		}*/

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this ReferenciaRendimento
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'referencia_rendimento';
				$strAliasPrefix = '';
			}

			$objBuilder->AddSelectItem($strTableName, 'id', $strAliasPrefix . 'id');
			$objBuilder->AddSelectItem($strTableName, 'molde_id', $strAliasPrefix . 'molde_id');
			$objBuilder->AddSelectItem($strTableName, 'referencia_id', $strAliasPrefix . 'referencia_id');
			$objBuilder->AddSelectItem($strTableName, 'comprimento', $strAliasPrefix . 'comprimento');
			$objBuilder->AddSelectItem($strTableName, 'pecas', $strAliasPrefix . 'pecas');
			$objBuilder->AddSelectItem($strTableName, 'peso', $strAliasPrefix . 'peso');
			$objBuilder->AddSelectItem($strTableName, 'preco', $strAliasPrefix . 'preco');
			$objBuilder->AddSelectItem($strTableName, 'tecido_id', $strAliasPrefix . 'tecido_id');
		}




		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a ReferenciaRendimento from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this ReferenciaRendimento::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param QDatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $objPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return ReferenciaRendimento
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $objPreviousItem = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow)
				return null;


			// Create a new instance of the ReferenciaRendimento object
			$objToReturn = new ReferenciaRendimento();
			$objToReturn->__blnRestored = true;

			$strAliasName = array_key_exists($strAliasPrefix . 'id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'id'] : $strAliasPrefix . 'id';
			$objToReturn->intId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'molde_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'molde_id'] : $strAliasPrefix . 'molde_id';
			$objToReturn->intMoldeId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'referencia_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'referencia_id'] : $strAliasPrefix . 'referencia_id';
			$objToReturn->intReferenciaId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'comprimento', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'comprimento'] : $strAliasPrefix . 'comprimento';
			$objToReturn->fltComprimento = $objDbRow->GetColumn($strAliasName, 'Float');
			$strAliasName = array_key_exists($strAliasPrefix . 'pecas', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'pecas'] : $strAliasPrefix . 'pecas';
			$objToReturn->intPecas = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'peso', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'peso'] : $strAliasPrefix . 'peso';
			$objToReturn->fltPeso = $objDbRow->GetColumn($strAliasName, 'Float');
			$strAliasName = array_key_exists($strAliasPrefix . 'preco', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'preco'] : $strAliasPrefix . 'preco';
			$objToReturn->fltPreco = $objDbRow->GetColumn($strAliasName, 'Float');
			$strAliasName = array_key_exists($strAliasPrefix . 'tecido_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'tecido_id'] : $strAliasPrefix . 'tecido_id';
			$objToReturn->intTecidoId = $objDbRow->GetColumn($strAliasName, 'Integer');

			// Instantiate Virtual Attributes
			foreach ($objDbRow->GetColumnNameArray() as $strColumnName => $mixValue) {
				$strVirtualPrefix = $strAliasPrefix . '__';
				$strVirtualPrefixLength = strlen($strVirtualPrefix);
				if (substr($strColumnName, 0, $strVirtualPrefixLength) == $strVirtualPrefix)
					$objToReturn->__strVirtualAttributeArray[substr($strColumnName, $strVirtualPrefixLength)] = $mixValue;
			}

			// Prepare to Check for Early/Virtual Binding
			if (!$strAliasPrefix)
				$strAliasPrefix = 'referencia_rendimento__';

			// Check for Molde Early Binding
			$strAlias = $strAliasPrefix . 'molde_id__id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objMolde = Molde::InstantiateDbRow($objDbRow, $strAliasPrefix . 'molde_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for Referencia Early Binding
			$strAlias = $strAliasPrefix . 'referencia_id__id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objReferencia = Referencia::InstantiateDbRow($objDbRow, $strAliasPrefix . 'referencia_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for Tecido Early Binding
			$strAlias = $strAliasPrefix . 'tecido_id__id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objTecido = Tecido::InstantiateDbRow($objDbRow, $strAliasPrefix . 'tecido_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);




			return $objToReturn;
		}

		/**
		 * Instantiate an array of ReferenciaRendimentos from a Database Result
		 * @param QDatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return ReferenciaRendimento[]
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
					$objItem = ReferenciaRendimento::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objLastRowItem, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
						$objLastRowItem = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = ReferenciaRendimento::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate a single ReferenciaRendimento object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return ReferenciaRendimento next row resulting from the query
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
			return ReferenciaRendimento::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, null, $strColumnAliasArray);
		}




		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////
			
		/**
		 * Load a single ReferenciaRendimento object,
		 * by Id Index(es)
		 * @param integer $intId
		 * @return ReferenciaRendimento
		*/
		public static function LoadById($intId, $objOptionalClauses = null) {
			return ReferenciaRendimento::QuerySingle(
				QQ::Equal(QQN::ReferenciaRendimento()->Id, $intId)
			, $objOptionalClauses
			);
		}
			
		/**
		 * Load an array of ReferenciaRendimento objects,
		 * by TecidoId Index(es)
		 * @param integer $intTecidoId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return ReferenciaRendimento[]
		*/
		public static function LoadArrayByTecidoId($intTecidoId, $objOptionalClauses = null) {
			// Call ReferenciaRendimento::QueryArray to perform the LoadArrayByTecidoId query
			try {
				return ReferenciaRendimento::QueryArray(
					QQ::Equal(QQN::ReferenciaRendimento()->TecidoId, $intTecidoId),
					$objOptionalClauses
					);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count ReferenciaRendimentos
		 * by TecidoId Index(es)
		 * @param integer $intTecidoId
		 * @return int
		*/
		public static function CountByTecidoId($intTecidoId, $objOptionalClauses = null) {
			// Call ReferenciaRendimento::QueryCount to perform the CountByTecidoId query
			return ReferenciaRendimento::QueryCount(
				QQ::Equal(QQN::ReferenciaRendimento()->TecidoId, $intTecidoId)
			, $objOptionalClauses
			);
		}
			
		/**
		 * Load an array of ReferenciaRendimento objects,
		 * by ReferenciaId Index(es)
		 * @param integer $intReferenciaId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return ReferenciaRendimento[]
		*/
		public static function LoadArrayByReferenciaId($intReferenciaId, $objOptionalClauses = null) {
			// Call ReferenciaRendimento::QueryArray to perform the LoadArrayByReferenciaId query
			try {
				return ReferenciaRendimento::QueryArray(
					QQ::Equal(QQN::ReferenciaRendimento()->ReferenciaId, $intReferenciaId),
					$objOptionalClauses
					);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count ReferenciaRendimentos
		 * by ReferenciaId Index(es)
		 * @param integer $intReferenciaId
		 * @return int
		*/
		public static function CountByReferenciaId($intReferenciaId, $objOptionalClauses = null) {
			// Call ReferenciaRendimento::QueryCount to perform the CountByReferenciaId query
			return ReferenciaRendimento::QueryCount(
				QQ::Equal(QQN::ReferenciaRendimento()->ReferenciaId, $intReferenciaId)
			, $objOptionalClauses
			);
		}
			
		/**
		 * Load an array of ReferenciaRendimento objects,
		 * by MoldeId Index(es)
		 * @param integer $intMoldeId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return ReferenciaRendimento[]
		*/
		public static function LoadArrayByMoldeId($intMoldeId, $objOptionalClauses = null) {
			// Call ReferenciaRendimento::QueryArray to perform the LoadArrayByMoldeId query
			try {
				return ReferenciaRendimento::QueryArray(
					QQ::Equal(QQN::ReferenciaRendimento()->MoldeId, $intMoldeId),
					$objOptionalClauses
					);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count ReferenciaRendimentos
		 * by MoldeId Index(es)
		 * @param integer $intMoldeId
		 * @return int
		*/
		public static function CountByMoldeId($intMoldeId, $objOptionalClauses = null) {
			// Call ReferenciaRendimento::QueryCount to perform the CountByMoldeId query
			return ReferenciaRendimento::QueryCount(
				QQ::Equal(QQN::ReferenciaRendimento()->MoldeId, $intMoldeId)
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
		 * Save this ReferenciaRendimento
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = ReferenciaRendimento::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `referencia_rendimento` (
							`molde_id`,
							`referencia_id`,
							`comprimento`,
							`pecas`,
							`peso`,
							`preco`,
							`tecido_id`
						) VALUES (
							' . $objDatabase->SqlVariable($this->intMoldeId) . ',
							' . $objDatabase->SqlVariable($this->intReferenciaId) . ',
							' . $objDatabase->SqlVariable($this->fltComprimento) . ',
							' . $objDatabase->SqlVariable($this->intPecas) . ',
							' . $objDatabase->SqlVariable($this->fltPeso) . ',
							' . $objDatabase->SqlVariable($this->fltPreco) . ',
							' . $objDatabase->SqlVariable($this->intTecidoId) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intId = $objDatabase->InsertId('referencia_rendimento', 'id');

					// Journaling
					if ($objDatabase->JournalingDatabase) $this->Journal('INSERT');

				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`referencia_rendimento`
						SET
							`molde_id` = ' . $objDatabase->SqlVariable($this->intMoldeId) . ',
							`referencia_id` = ' . $objDatabase->SqlVariable($this->intReferenciaId) . ',
							`comprimento` = ' . $objDatabase->SqlVariable($this->fltComprimento) . ',
							`pecas` = ' . $objDatabase->SqlVariable($this->intPecas) . ',
							`peso` = ' . $objDatabase->SqlVariable($this->fltPeso) . ',
							`preco` = ' . $objDatabase->SqlVariable($this->fltPreco) . ',
							`tecido_id` = ' . $objDatabase->SqlVariable($this->intTecidoId) . '
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
		 * Delete this ReferenciaRendimento
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this ReferenciaRendimento with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = ReferenciaRendimento::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`referencia_rendimento`
				WHERE
					`id` = ' . $objDatabase->SqlVariable($this->intId) . '');

			// Journaling
			if ($objDatabase->JournalingDatabase) $this->Journal('DELETE');
		}

		/**
		 * Delete all ReferenciaRendimentos
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = ReferenciaRendimento::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`referencia_rendimento`');
		}

		/**
		 * Truncate referencia_rendimento table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = ReferenciaRendimento::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `referencia_rendimento`');
		}

		/**
		 * Reload this ReferenciaRendimento from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved ReferenciaRendimento object.');

			// Reload the Object
			$objReloaded = ReferenciaRendimento::Load($this->intId);

			// Update $this's local variables to match
			$this->MoldeId = $objReloaded->MoldeId;
			$this->ReferenciaId = $objReloaded->ReferenciaId;
			$this->fltComprimento = $objReloaded->fltComprimento;
			$this->intPecas = $objReloaded->intPecas;
			$this->fltPeso = $objReloaded->fltPeso;
			$this->fltPreco = $objReloaded->fltPreco;
			$this->TecidoId = $objReloaded->TecidoId;
		}

		/**
		 * Journals the current object into the Log database.
		 * Used internally as a helper method.
		 * @param string $strJournalCommand
		 */
		public function Journal($strJournalCommand) {
			$objDatabase = ReferenciaRendimento::GetDatabase()->JournalingDatabase;

			$objDatabase->NonQuery('
				INSERT INTO `referencia_rendimento` (
					`id`,
					`molde_id`,
					`referencia_id`,
					`comprimento`,
					`pecas`,
					`peso`,
					`preco`,
					`tecido_id`,
					__sys_login_id,
					__sys_action,
					__sys_date
				) VALUES (
					' . $objDatabase->SqlVariable($this->intId) . ',
					' . $objDatabase->SqlVariable($this->intMoldeId) . ',
					' . $objDatabase->SqlVariable($this->intReferenciaId) . ',
					' . $objDatabase->SqlVariable($this->fltComprimento) . ',
					' . $objDatabase->SqlVariable($this->intPecas) . ',
					' . $objDatabase->SqlVariable($this->fltPeso) . ',
					' . $objDatabase->SqlVariable($this->fltPreco) . ',
					' . $objDatabase->SqlVariable($this->intTecidoId) . ',
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
		 * @return ReferenciaRendimento[]
		 */
		public static function GetJournalForId($intId) {
			$objDatabase = ReferenciaRendimento::GetDatabase()->JournalingDatabase;

			$objResult = $objDatabase->Query('SELECT * FROM referencia_rendimento WHERE id = ' .
				$objDatabase->SqlVariable($intId) . ' ORDER BY __sys_date');

			return ReferenciaRendimento::InstantiateDbResult($objResult);
		}

		/**
		 * Gets the historical journal for this object from the log database.
		 * Objects will have VirtualAttributes available to lookup login, date, and action information from the journal object.
		 * @return ReferenciaRendimento[]
		 */
		public function GetJournal() {
			return ReferenciaRendimento::GetJournalForId($this->intId);
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

				case 'MoldeId':
					// Gets the value for intMoldeId (Not Null)
					// @return integer
					return $this->intMoldeId;

				case 'ReferenciaId':
					// Gets the value for intReferenciaId (Not Null)
					// @return integer
					return $this->intReferenciaId;

				case 'Comprimento':
					// Gets the value for fltComprimento (Not Null)
					// @return double
					return $this->fltComprimento;

				case 'Pecas':
					// Gets the value for intPecas (Not Null)
					// @return integer
					return $this->intPecas;

				case 'Peso':
					// Gets the value for fltPeso (Not Null)
					// @return double
					return $this->fltPeso;

				case 'Preco':
					// Gets the value for fltPreco (Not Null)
					// @return double
					return $this->fltPreco;

				case 'TecidoId':
					// Gets the value for intTecidoId (Not Null)
					// @return integer
					return $this->intTecidoId;


				///////////////////
				// Member Objects
				///////////////////
				case 'Molde':
					// Gets the value for the Molde object referenced by intMoldeId (Not Null)
					// @return Molde
					try {
						if ((!$this->objMolde) && (!is_null($this->intMoldeId)))
							$this->objMolde = Molde::Load($this->intMoldeId);
						return $this->objMolde;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Referencia':
					// Gets the value for the Referencia object referenced by intReferenciaId (Not Null)
					// @return Referencia
					try {
						if ((!$this->objReferencia) && (!is_null($this->intReferenciaId)))
							$this->objReferencia = Referencia::Load($this->intReferenciaId);
						return $this->objReferencia;
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
				case 'MoldeId':
					// Sets the value for intMoldeId (Not Null)
					// @param integer $mixValue
					// @return integer
					try {
						$this->objMolde = null;
						return ($this->intMoldeId = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'ReferenciaId':
					// Sets the value for intReferenciaId (Not Null)
					// @param integer $mixValue
					// @return integer
					try {
						$this->objReferencia = null;
						return ($this->intReferenciaId = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Comprimento':
					// Sets the value for fltComprimento (Not Null)
					// @param double $mixValue
					// @return double
					try {
						return ($this->fltComprimento = QType::Cast($mixValue, QType::Float));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Pecas':
					// Sets the value for intPecas (Not Null)
					// @param integer $mixValue
					// @return integer
					try {
						return ($this->intPecas = QType::Cast($mixValue, QType::Integer));
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

				case 'Preco':
					// Sets the value for fltPreco (Not Null)
					// @param double $mixValue
					// @return double
					try {
						return ($this->fltPreco = QType::Cast($mixValue, QType::Float));
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


				///////////////////
				// Member Objects
				///////////////////
				case 'Molde':
					// Sets the value for the Molde object referenced by intMoldeId (Not Null)
					// @param Molde $mixValue
					// @return Molde
					if (is_null($mixValue)) {
						$this->intMoldeId = null;
						$this->objMolde = null;
						return null;
					} else {
						// Make sure $mixValue actually is a Molde object
						try {
							$mixValue = QType::Cast($mixValue, 'Molde');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						} 

						// Make sure $mixValue is a SAVED Molde object
						if (is_null($mixValue->Id))
							throw new QCallerException('Unable to set an unsaved Molde for this ReferenciaRendimento');

						// Update Local Member Variables
						$this->objMolde = $mixValue;
						$this->intMoldeId = $mixValue->Id;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'Referencia':
					// Sets the value for the Referencia object referenced by intReferenciaId (Not Null)
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
							throw new QCallerException('Unable to set an unsaved Referencia for this ReferenciaRendimento');

						// Update Local Member Variables
						$this->objReferencia = $mixValue;
						$this->intReferenciaId = $mixValue->Id;

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
							throw new QCallerException('Unable to set an unsaved Tecido for this ReferenciaRendimento');

						// Update Local Member Variables
						$this->objTecido = $mixValue;
						$this->intTecidoId = $mixValue->Id;

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
			$strToReturn = '<complexType name="ReferenciaRendimento"><sequence>';
			$strToReturn .= '<element name="Id" type="xsd:int"/>';
			$strToReturn .= '<element name="Molde" type="xsd1:Molde"/>';
			$strToReturn .= '<element name="Referencia" type="xsd1:Referencia"/>';
			$strToReturn .= '<element name="Comprimento" type="xsd:float"/>';
			$strToReturn .= '<element name="Pecas" type="xsd:int"/>';
			$strToReturn .= '<element name="Peso" type="xsd:float"/>';
			$strToReturn .= '<element name="Preco" type="xsd:float"/>';
			$strToReturn .= '<element name="Tecido" type="xsd1:Tecido"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('ReferenciaRendimento', $strComplexTypeArray)) {
				$strComplexTypeArray['ReferenciaRendimento'] = ReferenciaRendimento::GetSoapComplexTypeXml();
				Molde::AlterSoapComplexTypeArray($strComplexTypeArray);
				Referencia::AlterSoapComplexTypeArray($strComplexTypeArray);
				Tecido::AlterSoapComplexTypeArray($strComplexTypeArray);
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, ReferenciaRendimento::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new ReferenciaRendimento();
			if (property_exists($objSoapObject, 'Id'))
				$objToReturn->intId = $objSoapObject->Id;
			if ((property_exists($objSoapObject, 'Molde')) &&
				($objSoapObject->Molde))
				$objToReturn->Molde = Molde::GetObjectFromSoapObject($objSoapObject->Molde);
			if ((property_exists($objSoapObject, 'Referencia')) &&
				($objSoapObject->Referencia))
				$objToReturn->Referencia = Referencia::GetObjectFromSoapObject($objSoapObject->Referencia);
			if (property_exists($objSoapObject, 'Comprimento'))
				$objToReturn->fltComprimento = $objSoapObject->Comprimento;
			if (property_exists($objSoapObject, 'Pecas'))
				$objToReturn->intPecas = $objSoapObject->Pecas;
			if (property_exists($objSoapObject, 'Peso'))
				$objToReturn->fltPeso = $objSoapObject->Peso;
			if (property_exists($objSoapObject, 'Preco'))
				$objToReturn->fltPreco = $objSoapObject->Preco;
			if ((property_exists($objSoapObject, 'Tecido')) &&
				($objSoapObject->Tecido))
				$objToReturn->Tecido = Tecido::GetObjectFromSoapObject($objSoapObject->Tecido);
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, ReferenciaRendimento::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->objMolde)
				$objObject->objMolde = Molde::GetSoapObjectFromObject($objObject->objMolde, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intMoldeId = null;
			if ($objObject->objReferencia)
				$objObject->objReferencia = Referencia::GetSoapObjectFromObject($objObject->objReferencia, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intReferenciaId = null;
			if ($objObject->objTecido)
				$objObject->objTecido = Tecido::GetSoapObjectFromObject($objObject->objTecido, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intTecidoId = null;
			return $objObject;
		}




	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCODO QUERY
	/////////////////////////////////////

	/**
	 * @property-read QQNode $Id
	 * @property-read QQNode $MoldeId
	 * @property-read QQNodeMolde $Molde
	 * @property-read QQNode $ReferenciaId
	 * @property-read QQNodeReferencia $Referencia
	 * @property-read QQNode $Comprimento
	 * @property-read QQNode $Pecas
	 * @property-read QQNode $Peso
	 * @property-read QQNode $Preco
	 * @property-read QQNode $TecidoId
	 * @property-read QQNodeTecido $Tecido
	 */
	class QQNodeReferenciaRendimento extends QQNode {
		protected $strTableName = 'referencia_rendimento';
		protected $strPrimaryKey = 'id';
		protected $strClassName = 'ReferenciaRendimento';
		public function __get($strName) {
			switch ($strName) {
				case 'Id':
					return new QQNode('id', 'Id', 'integer', $this);
				case 'MoldeId':
					return new QQNode('molde_id', 'MoldeId', 'integer', $this);
				case 'Molde':
					return new QQNodeMolde('molde_id', 'Molde', 'integer', $this);
				case 'ReferenciaId':
					return new QQNode('referencia_id', 'ReferenciaId', 'integer', $this);
				case 'Referencia':
					return new QQNodeReferencia('referencia_id', 'Referencia', 'integer', $this);
				case 'Comprimento':
					return new QQNode('comprimento', 'Comprimento', 'double', $this);
				case 'Pecas':
					return new QQNode('pecas', 'Pecas', 'integer', $this);
				case 'Peso':
					return new QQNode('peso', 'Peso', 'double', $this);
				case 'Preco':
					return new QQNode('preco', 'Preco', 'double', $this);
				case 'TecidoId':
					return new QQNode('tecido_id', 'TecidoId', 'integer', $this);
				case 'Tecido':
					return new QQNodeTecido('tecido_id', 'Tecido', 'integer', $this);

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
	 * @property-read QQNode $MoldeId
	 * @property-read QQNodeMolde $Molde
	 * @property-read QQNode $ReferenciaId
	 * @property-read QQNodeReferencia $Referencia
	 * @property-read QQNode $Comprimento
	 * @property-read QQNode $Pecas
	 * @property-read QQNode $Peso
	 * @property-read QQNode $Preco
	 * @property-read QQNode $TecidoId
	 * @property-read QQNodeTecido $Tecido
	 * @property-read QQNode $_PrimaryKeyNode
	 */
	class QQReverseReferenceNodeReferenciaRendimento extends QQReverseReferenceNode {
		protected $strTableName = 'referencia_rendimento';
		protected $strPrimaryKey = 'id';
		protected $strClassName = 'ReferenciaRendimento';
		public function __get($strName) {
			switch ($strName) {
				case 'Id':
					return new QQNode('id', 'Id', 'integer', $this);
				case 'MoldeId':
					return new QQNode('molde_id', 'MoldeId', 'integer', $this);
				case 'Molde':
					return new QQNodeMolde('molde_id', 'Molde', 'integer', $this);
				case 'ReferenciaId':
					return new QQNode('referencia_id', 'ReferenciaId', 'integer', $this);
				case 'Referencia':
					return new QQNodeReferencia('referencia_id', 'Referencia', 'integer', $this);
				case 'Comprimento':
					return new QQNode('comprimento', 'Comprimento', 'double', $this);
				case 'Pecas':
					return new QQNode('pecas', 'Pecas', 'integer', $this);
				case 'Peso':
					return new QQNode('peso', 'Peso', 'double', $this);
				case 'Preco':
					return new QQNode('preco', 'Preco', 'double', $this);
				case 'TecidoId':
					return new QQNode('tecido_id', 'TecidoId', 'integer', $this);
				case 'Tecido':
					return new QQNodeTecido('tecido_id', 'Tecido', 'integer', $this);

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