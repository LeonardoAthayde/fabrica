<?php
	/**
	 * The abstract TecidoGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the Tecido subclass which
	 * extends this TecidoGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the Tecido class.
	 * 
	 * @package My Application
	 * @subpackage GeneratedDataObjects
	 * @property integer $Id the value for intId (Read-Only PK)
	 * @property string $Nome the value for strNome (Unique)
	 * @property string $Codigo the value for strCodigo (Not Null)
	 * @property double $Metro the value for fltMetro (Not Null)
	 * @property double $Preco the value for fltPreco (Not Null)
	 * @property ComandoPeca $_ComandoPeca the value for the private _objComandoPeca (Read-Only) if set due to an expansion on the comando_peca.tecido_id reverse relationship
	 * @property ComandoPeca[] $_ComandoPecaArray the value for the private _objComandoPecaArray (Read-Only) if set due to an ExpandAsArray on the comando_peca.tecido_id reverse relationship
	 * @property Referencia $_Referencia the value for the private _objReferencia (Read-Only) if set due to an expansion on the referencia.tecido_id reverse relationship
	 * @property Referencia[] $_ReferenciaArray the value for the private _objReferenciaArray (Read-Only) if set due to an ExpandAsArray on the referencia.tecido_id reverse relationship
	 * @property ReferenciaRendimento $_ReferenciaRendimento the value for the private _objReferenciaRendimento (Read-Only) if set due to an expansion on the referencia_rendimento.tecido_id reverse relationship
	 * @property ReferenciaRendimento[] $_ReferenciaRendimentoArray the value for the private _objReferenciaRendimentoArray (Read-Only) if set due to an ExpandAsArray on the referencia_rendimento.tecido_id reverse relationship
	 * @property boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class TecidoGen extends QBaseClass {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////
		
		/**
		 * Protected member variable that maps to the database PK Identity column tecido.id
		 * @var integer intId
		 */
		protected $intId;
		const IdDefault = null;


		/**
		 * Protected member variable that maps to the database column tecido.nome
		 * @var string strNome
		 */
		protected $strNome;
		const NomeMaxLength = 150;
		const NomeDefault = null;


		/**
		 * Protected member variable that maps to the database column tecido.codigo
		 * @var string strCodigo
		 */
		protected $strCodigo;
		const CodigoMaxLength = 2;
		const CodigoDefault = null;


		/**
		 * Protected member variable that maps to the database column tecido.metro
		 * @var double fltMetro
		 */
		protected $fltMetro;
		const MetroDefault = null;


		/**
		 * Protected member variable that maps to the database column tecido.preco
		 * @var double fltPreco
		 */
		protected $fltPreco;
		const PrecoDefault = null;


		/**
		 * Private member variable that stores a reference to a single ComandoPeca object
		 * (of type ComandoPeca), if this Tecido object was restored with
		 * an expansion on the comando_peca association table.
		 * @var ComandoPeca _objComandoPeca;
		 */
		private $_objComandoPeca;

		/**
		 * Private member variable that stores a reference to an array of ComandoPeca objects
		 * (of type ComandoPeca[]), if this Tecido object was restored with
		 * an ExpandAsArray on the comando_peca association table.
		 * @var ComandoPeca[] _objComandoPecaArray;
		 */
		private $_objComandoPecaArray = array();

		/**
		 * Private member variable that stores a reference to a single Referencia object
		 * (of type Referencia), if this Tecido object was restored with
		 * an expansion on the referencia association table.
		 * @var Referencia _objReferencia;
		 */
		private $_objReferencia;

		/**
		 * Private member variable that stores a reference to an array of Referencia objects
		 * (of type Referencia[]), if this Tecido object was restored with
		 * an ExpandAsArray on the referencia association table.
		 * @var Referencia[] _objReferenciaArray;
		 */
		private $_objReferenciaArray = array();

		/**
		 * Private member variable that stores a reference to a single ReferenciaRendimento object
		 * (of type ReferenciaRendimento), if this Tecido object was restored with
		 * an expansion on the referencia_rendimento association table.
		 * @var ReferenciaRendimento _objReferenciaRendimento;
		 */
		private $_objReferenciaRendimento;

		/**
		 * Private member variable that stores a reference to an array of ReferenciaRendimento objects
		 * (of type ReferenciaRendimento[]), if this Tecido object was restored with
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
		 * Load a Tecido from PK Info
		 * @param integer $intId
		 * @return Tecido
		 */
		public static function Load($intId) {
			// Use QuerySingle to Perform the Query
			return Tecido::QuerySingle(
				QQ::Equal(QQN::Tecido()->Id, $intId)
			);
		}

		/**
		 * Load all Tecidos
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Tecido[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			// Call Tecido::QueryArray to perform the LoadAll query
			try {
				return Tecido::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all Tecidos
		 * @return int
		 */
		public static function CountAll() {
			// Call Tecido::QueryCount to perform the CountAll query
			return Tecido::QueryCount(QQ::All());
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
			$objDatabase = Tecido::GetDatabase();

			// Create/Build out the QueryBuilder object with Tecido-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'tecido');
			Tecido::GetSelectFields($objQueryBuilder);
			$objQueryBuilder->AddFromItem('tecido');

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
		 * Static Qcodo Query method to query for a single Tecido object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Tecido the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Tecido::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Instantiate a new Tecido object and return it

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = Tecido::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return Tecido::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcodo Query method to query for an array of Tecido objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Tecido[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Tecido::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return Tecido::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
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
				$strQuery = Tecido::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
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
		 * Static Qcodo Query method to query for a count of Tecido objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Tecido::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = Tecido::GetDatabase();

			// Lookup the QCache for This Query Statement
			$objCache = new QCache('query', 'tecido_' . serialize($strConditions));
			if (!($strQuery = $objCache->GetData())) {
				// Not Found -- Go ahead and Create/Build out a new QueryBuilder object with Tecido-specific fields
				$objQueryBuilder = new QQueryBuilder($objDatabase);
				Tecido::GetSelectFields($objQueryBuilder);
				Tecido::GetFromFields($objQueryBuilder);

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
			return Tecido::InstantiateDbResult($objDbResult);
		}*/

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this Tecido
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'tecido';
				$strAliasPrefix = '';
			}

			$objBuilder->AddSelectItem($strTableName, 'id', $strAliasPrefix . 'id');
			$objBuilder->AddSelectItem($strTableName, 'nome', $strAliasPrefix . 'nome');
			$objBuilder->AddSelectItem($strTableName, 'codigo', $strAliasPrefix . 'codigo');
			$objBuilder->AddSelectItem($strTableName, 'metro', $strAliasPrefix . 'metro');
			$objBuilder->AddSelectItem($strTableName, 'preco', $strAliasPrefix . 'preco');
		}




		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a Tecido from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this Tecido::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param QDatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $objPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return Tecido
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
					$strAliasPrefix = 'tecido__';


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

				$strAlias = $strAliasPrefix . 'referencia__id';
				$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
				if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
					(!is_null($objDbRow->GetColumn($strAliasName)))) {
					if ($intPreviousChildItemCount = count($objPreviousItem->_objReferenciaArray)) {
						$objPreviousChildItem = $objPreviousItem->_objReferenciaArray[$intPreviousChildItemCount - 1];
						$objChildItem = Referencia::InstantiateDbRow($objDbRow, $strAliasPrefix . 'referencia__', $strExpandAsArrayNodes, $objPreviousChildItem, $strColumnAliasArray);
						if ($objChildItem)
							$objPreviousItem->_objReferenciaArray[] = $objChildItem;
					} else
						$objPreviousItem->_objReferenciaArray[] = Referencia::InstantiateDbRow($objDbRow, $strAliasPrefix . 'referencia__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
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
				else if ($strAliasPrefix == 'tecido__')
					$strAliasPrefix = null;
			}

			// Create a new instance of the Tecido object
			$objToReturn = new Tecido();
			$objToReturn->__blnRestored = true;

			$strAliasName = array_key_exists($strAliasPrefix . 'id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'id'] : $strAliasPrefix . 'id';
			$objToReturn->intId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'nome', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'nome'] : $strAliasPrefix . 'nome';
			$objToReturn->strNome = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'codigo', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'codigo'] : $strAliasPrefix . 'codigo';
			$objToReturn->strCodigo = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'metro', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'metro'] : $strAliasPrefix . 'metro';
			$objToReturn->fltMetro = $objDbRow->GetColumn($strAliasName, 'Float');
			$strAliasName = array_key_exists($strAliasPrefix . 'preco', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'preco'] : $strAliasPrefix . 'preco';
			$objToReturn->fltPreco = $objDbRow->GetColumn($strAliasName, 'Float');

			// Instantiate Virtual Attributes
			foreach ($objDbRow->GetColumnNameArray() as $strColumnName => $mixValue) {
				$strVirtualPrefix = $strAliasPrefix . '__';
				$strVirtualPrefixLength = strlen($strVirtualPrefix);
				if (substr($strColumnName, 0, $strVirtualPrefixLength) == $strVirtualPrefix)
					$objToReturn->__strVirtualAttributeArray[substr($strColumnName, $strVirtualPrefixLength)] = $mixValue;
			}

			// Prepare to Check for Early/Virtual Binding
			if (!$strAliasPrefix)
				$strAliasPrefix = 'tecido__';




			// Check for ComandoPeca Virtual Binding
			$strAlias = $strAliasPrefix . 'comandopeca__id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
					$objToReturn->_objComandoPecaArray[] = ComandoPeca::InstantiateDbRow($objDbRow, $strAliasPrefix . 'comandopeca__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objComandoPeca = ComandoPeca::InstantiateDbRow($objDbRow, $strAliasPrefix . 'comandopeca__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for Referencia Virtual Binding
			$strAlias = $strAliasPrefix . 'referencia__id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
					$objToReturn->_objReferenciaArray[] = Referencia::InstantiateDbRow($objDbRow, $strAliasPrefix . 'referencia__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objReferencia = Referencia::InstantiateDbRow($objDbRow, $strAliasPrefix . 'referencia__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
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
		 * Instantiate an array of Tecidos from a Database Result
		 * @param QDatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return Tecido[]
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
					$objItem = Tecido::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objLastRowItem, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
						$objLastRowItem = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = Tecido::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate a single Tecido object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return Tecido next row resulting from the query
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
			return Tecido::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, null, $strColumnAliasArray);
		}




		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////
			
		/**
		 * Load a single Tecido object,
		 * by Id Index(es)
		 * @param integer $intId
		 * @return Tecido
		*/
		public static function LoadById($intId, $objOptionalClauses = null) {
			return Tecido::QuerySingle(
				QQ::Equal(QQN::Tecido()->Id, $intId)
			, $objOptionalClauses
			);
		}
			
		/**
		 * Load a single Tecido object,
		 * by Nome Index(es)
		 * @param string $strNome
		 * @return Tecido
		*/
		public static function LoadByNome($strNome, $objOptionalClauses = null) {
			return Tecido::QuerySingle(
				QQ::Equal(QQN::Tecido()->Nome, $strNome)
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
		 * Save this Tecido
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = Tecido::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `tecido` (
							`nome`,
							`codigo`,
							`metro`,
							`preco`
						) VALUES (
							' . $objDatabase->SqlVariable($this->strNome) . ',
							' . $objDatabase->SqlVariable($this->strCodigo) . ',
							' . $objDatabase->SqlVariable($this->fltMetro) . ',
							' . $objDatabase->SqlVariable($this->fltPreco) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intId = $objDatabase->InsertId('tecido', 'id');

					// Journaling
					if ($objDatabase->JournalingDatabase) $this->Journal('INSERT');

				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`tecido`
						SET
							`nome` = ' . $objDatabase->SqlVariable($this->strNome) . ',
							`codigo` = ' . $objDatabase->SqlVariable($this->strCodigo) . ',
							`metro` = ' . $objDatabase->SqlVariable($this->fltMetro) . ',
							`preco` = ' . $objDatabase->SqlVariable($this->fltPreco) . '
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
		 * Delete this Tecido
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this Tecido with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = Tecido::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`tecido`
				WHERE
					`id` = ' . $objDatabase->SqlVariable($this->intId) . '');

			// Journaling
			if ($objDatabase->JournalingDatabase) $this->Journal('DELETE');
		}

		/**
		 * Delete all Tecidos
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = Tecido::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`tecido`');
		}

		/**
		 * Truncate tecido table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = Tecido::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `tecido`');
		}

		/**
		 * Reload this Tecido from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved Tecido object.');

			// Reload the Object
			$objReloaded = Tecido::Load($this->intId);

			// Update $this's local variables to match
			$this->strNome = $objReloaded->strNome;
			$this->strCodigo = $objReloaded->strCodigo;
			$this->fltMetro = $objReloaded->fltMetro;
			$this->fltPreco = $objReloaded->fltPreco;
		}

		/**
		 * Journals the current object into the Log database.
		 * Used internally as a helper method.
		 * @param string $strJournalCommand
		 */
		public function Journal($strJournalCommand) {
			$objDatabase = Tecido::GetDatabase()->JournalingDatabase;

			$objDatabase->NonQuery('
				INSERT INTO `tecido` (
					`id`,
					`nome`,
					`codigo`,
					`metro`,
					`preco`,
					__sys_login_id,
					__sys_action,
					__sys_date
				) VALUES (
					' . $objDatabase->SqlVariable($this->intId) . ',
					' . $objDatabase->SqlVariable($this->strNome) . ',
					' . $objDatabase->SqlVariable($this->strCodigo) . ',
					' . $objDatabase->SqlVariable($this->fltMetro) . ',
					' . $objDatabase->SqlVariable($this->fltPreco) . ',
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
		 * @return Tecido[]
		 */
		public static function GetJournalForId($intId) {
			$objDatabase = Tecido::GetDatabase()->JournalingDatabase;

			$objResult = $objDatabase->Query('SELECT * FROM tecido WHERE id = ' .
				$objDatabase->SqlVariable($intId) . ' ORDER BY __sys_date');

			return Tecido::InstantiateDbResult($objResult);
		}

		/**
		 * Gets the historical journal for this object from the log database.
		 * Objects will have VirtualAttributes available to lookup login, date, and action information from the journal object.
		 * @return Tecido[]
		 */
		public function GetJournal() {
			return Tecido::GetJournalForId($this->intId);
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
					// Gets the value for strNome (Unique)
					// @return string
					return $this->strNome;

				case 'Codigo':
					// Gets the value for strCodigo (Not Null)
					// @return string
					return $this->strCodigo;

				case 'Metro':
					// Gets the value for fltMetro (Not Null)
					// @return double
					return $this->fltMetro;

				case 'Preco':
					// Gets the value for fltPreco (Not Null)
					// @return double
					return $this->fltPreco;


				///////////////////
				// Member Objects
				///////////////////

				////////////////////////////
				// Virtual Object References (Many to Many and Reverse References)
				// (If restored via a "Many-to" expansion)
				////////////////////////////

				case '_ComandoPeca':
					// Gets the value for the private _objComandoPeca (Read-Only)
					// if set due to an expansion on the comando_peca.tecido_id reverse relationship
					// @return ComandoPeca
					return $this->_objComandoPeca;

				case '_ComandoPecaArray':
					// Gets the value for the private _objComandoPecaArray (Read-Only)
					// if set due to an ExpandAsArray on the comando_peca.tecido_id reverse relationship
					// @return ComandoPeca[]
					return (array) $this->_objComandoPecaArray;

				case '_Referencia':
					// Gets the value for the private _objReferencia (Read-Only)
					// if set due to an expansion on the referencia.tecido_id reverse relationship
					// @return Referencia
					return $this->_objReferencia;

				case '_ReferenciaArray':
					// Gets the value for the private _objReferenciaArray (Read-Only)
					// if set due to an ExpandAsArray on the referencia.tecido_id reverse relationship
					// @return Referencia[]
					return (array) $this->_objReferenciaArray;

				case '_ReferenciaRendimento':
					// Gets the value for the private _objReferenciaRendimento (Read-Only)
					// if set due to an expansion on the referencia_rendimento.tecido_id reverse relationship
					// @return ReferenciaRendimento
					return $this->_objReferenciaRendimento;

				case '_ReferenciaRendimentoArray':
					// Gets the value for the private _objReferenciaRendimentoArray (Read-Only)
					// if set due to an ExpandAsArray on the referencia_rendimento.tecido_id reverse relationship
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
					// Sets the value for strNome (Unique)
					// @param string $mixValue
					// @return string
					try {
						return ($this->strNome = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Codigo':
					// Sets the value for strCodigo (Not Null)
					// @param string $mixValue
					// @return string
					try {
						return ($this->strCodigo = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Metro':
					// Sets the value for fltMetro (Not Null)
					// @param double $mixValue
					// @return double
					try {
						return ($this->fltMetro = QType::Cast($mixValue, QType::Float));
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
				return ComandoPeca::LoadArrayByTecidoId($this->intId, $objOptionalClauses);
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

			return ComandoPeca::CountByTecidoId($this->intId);
		}

		/**
		 * Associates a ComandoPeca
		 * @param ComandoPeca $objComandoPeca
		 * @return void
		*/ 
		public function AssociateComandoPeca(ComandoPeca $objComandoPeca) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateComandoPeca on this unsaved Tecido.');
			if ((is_null($objComandoPeca->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateComandoPeca on this Tecido with an unsaved ComandoPeca.');

			// Get the Database Object for this Class
			$objDatabase = Tecido::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`comando_peca`
				SET
					`tecido_id` = ' . $objDatabase->SqlVariable($this->intId) . '
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objComandoPeca->Id) . '
			');

			// Journaling (if applicable)
			if ($objDatabase->JournalingDatabase) {
				$objComandoPeca->TecidoId = $this->intId;
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
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateComandoPeca on this unsaved Tecido.');
			if ((is_null($objComandoPeca->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateComandoPeca on this Tecido with an unsaved ComandoPeca.');

			// Get the Database Object for this Class
			$objDatabase = Tecido::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`comando_peca`
				SET
					`tecido_id` = null
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objComandoPeca->Id) . ' AND
					`tecido_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				$objComandoPeca->TecidoId = null;
				$objComandoPeca->Journal('UPDATE');
			}
		}

		/**
		 * Unassociates all ComandoPecas
		 * @return void
		*/ 
		public function UnassociateAllComandoPecas() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateComandoPeca on this unsaved Tecido.');

			// Get the Database Object for this Class
			$objDatabase = Tecido::GetDatabase();

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				foreach (ComandoPeca::LoadArrayByTecidoId($this->intId) as $objComandoPeca) {
					$objComandoPeca->TecidoId = null;
					$objComandoPeca->Journal('UPDATE');
				}
			}

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`comando_peca`
				SET
					`tecido_id` = null
				WHERE
					`tecido_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Deletes an associated ComandoPeca
		 * @param ComandoPeca $objComandoPeca
		 * @return void
		*/ 
		public function DeleteAssociatedComandoPeca(ComandoPeca $objComandoPeca) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateComandoPeca on this unsaved Tecido.');
			if ((is_null($objComandoPeca->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateComandoPeca on this Tecido with an unsaved ComandoPeca.');

			// Get the Database Object for this Class
			$objDatabase = Tecido::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`comando_peca`
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objComandoPeca->Id) . ' AND
					`tecido_id` = ' . $objDatabase->SqlVariable($this->intId) . '
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
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateComandoPeca on this unsaved Tecido.');

			// Get the Database Object for this Class
			$objDatabase = Tecido::GetDatabase();

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				foreach (ComandoPeca::LoadArrayByTecidoId($this->intId) as $objComandoPeca) {
					$objComandoPeca->Journal('DELETE');
				}
			}

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`comando_peca`
				WHERE
					`tecido_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

			
		
		// Related Objects' Methods for Referencia
		//-------------------------------------------------------------------

		/**
		 * Gets all associated Referencias as an array of Referencia objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Referencia[]
		*/ 
		public function GetReferenciaArray($objOptionalClauses = null) {
			if ((is_null($this->intId)))
				return array();

			try {
				return Referencia::LoadArrayByTecidoId($this->intId, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated Referencias
		 * @return int
		*/ 
		public function CountReferencias() {
			if ((is_null($this->intId)))
				return 0;

			return Referencia::CountByTecidoId($this->intId);
		}

		/**
		 * Associates a Referencia
		 * @param Referencia $objReferencia
		 * @return void
		*/ 
		public function AssociateReferencia(Referencia $objReferencia) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateReferencia on this unsaved Tecido.');
			if ((is_null($objReferencia->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateReferencia on this Tecido with an unsaved Referencia.');

			// Get the Database Object for this Class
			$objDatabase = Tecido::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`referencia`
				SET
					`tecido_id` = ' . $objDatabase->SqlVariable($this->intId) . '
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objReferencia->Id) . '
			');

			// Journaling (if applicable)
			if ($objDatabase->JournalingDatabase) {
				$objReferencia->TecidoId = $this->intId;
				$objReferencia->Journal('UPDATE');
			}
		}

		/**
		 * Unassociates a Referencia
		 * @param Referencia $objReferencia
		 * @return void
		*/ 
		public function UnassociateReferencia(Referencia $objReferencia) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateReferencia on this unsaved Tecido.');
			if ((is_null($objReferencia->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateReferencia on this Tecido with an unsaved Referencia.');

			// Get the Database Object for this Class
			$objDatabase = Tecido::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`referencia`
				SET
					`tecido_id` = null
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objReferencia->Id) . ' AND
					`tecido_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				$objReferencia->TecidoId = null;
				$objReferencia->Journal('UPDATE');
			}
		}

		/**
		 * Unassociates all Referencias
		 * @return void
		*/ 
		public function UnassociateAllReferencias() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateReferencia on this unsaved Tecido.');

			// Get the Database Object for this Class
			$objDatabase = Tecido::GetDatabase();

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				foreach (Referencia::LoadArrayByTecidoId($this->intId) as $objReferencia) {
					$objReferencia->TecidoId = null;
					$objReferencia->Journal('UPDATE');
				}
			}

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`referencia`
				SET
					`tecido_id` = null
				WHERE
					`tecido_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Deletes an associated Referencia
		 * @param Referencia $objReferencia
		 * @return void
		*/ 
		public function DeleteAssociatedReferencia(Referencia $objReferencia) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateReferencia on this unsaved Tecido.');
			if ((is_null($objReferencia->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateReferencia on this Tecido with an unsaved Referencia.');

			// Get the Database Object for this Class
			$objDatabase = Tecido::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`referencia`
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objReferencia->Id) . ' AND
					`tecido_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				$objReferencia->Journal('DELETE');
			}
		}

		/**
		 * Deletes all associated Referencias
		 * @return void
		*/ 
		public function DeleteAllReferencias() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateReferencia on this unsaved Tecido.');

			// Get the Database Object for this Class
			$objDatabase = Tecido::GetDatabase();

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				foreach (Referencia::LoadArrayByTecidoId($this->intId) as $objReferencia) {
					$objReferencia->Journal('DELETE');
				}
			}

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`referencia`
				WHERE
					`tecido_id` = ' . $objDatabase->SqlVariable($this->intId) . '
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
				return ReferenciaRendimento::LoadArrayByTecidoId($this->intId, $objOptionalClauses);
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

			return ReferenciaRendimento::CountByTecidoId($this->intId);
		}

		/**
		 * Associates a ReferenciaRendimento
		 * @param ReferenciaRendimento $objReferenciaRendimento
		 * @return void
		*/ 
		public function AssociateReferenciaRendimento(ReferenciaRendimento $objReferenciaRendimento) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateReferenciaRendimento on this unsaved Tecido.');
			if ((is_null($objReferenciaRendimento->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateReferenciaRendimento on this Tecido with an unsaved ReferenciaRendimento.');

			// Get the Database Object for this Class
			$objDatabase = Tecido::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`referencia_rendimento`
				SET
					`tecido_id` = ' . $objDatabase->SqlVariable($this->intId) . '
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objReferenciaRendimento->Id) . '
			');

			// Journaling (if applicable)
			if ($objDatabase->JournalingDatabase) {
				$objReferenciaRendimento->TecidoId = $this->intId;
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
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateReferenciaRendimento on this unsaved Tecido.');
			if ((is_null($objReferenciaRendimento->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateReferenciaRendimento on this Tecido with an unsaved ReferenciaRendimento.');

			// Get the Database Object for this Class
			$objDatabase = Tecido::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`referencia_rendimento`
				SET
					`tecido_id` = null
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objReferenciaRendimento->Id) . ' AND
					`tecido_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				$objReferenciaRendimento->TecidoId = null;
				$objReferenciaRendimento->Journal('UPDATE');
			}
		}

		/**
		 * Unassociates all ReferenciaRendimentos
		 * @return void
		*/ 
		public function UnassociateAllReferenciaRendimentos() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateReferenciaRendimento on this unsaved Tecido.');

			// Get the Database Object for this Class
			$objDatabase = Tecido::GetDatabase();

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				foreach (ReferenciaRendimento::LoadArrayByTecidoId($this->intId) as $objReferenciaRendimento) {
					$objReferenciaRendimento->TecidoId = null;
					$objReferenciaRendimento->Journal('UPDATE');
				}
			}

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`referencia_rendimento`
				SET
					`tecido_id` = null
				WHERE
					`tecido_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Deletes an associated ReferenciaRendimento
		 * @param ReferenciaRendimento $objReferenciaRendimento
		 * @return void
		*/ 
		public function DeleteAssociatedReferenciaRendimento(ReferenciaRendimento $objReferenciaRendimento) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateReferenciaRendimento on this unsaved Tecido.');
			if ((is_null($objReferenciaRendimento->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateReferenciaRendimento on this Tecido with an unsaved ReferenciaRendimento.');

			// Get the Database Object for this Class
			$objDatabase = Tecido::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`referencia_rendimento`
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objReferenciaRendimento->Id) . ' AND
					`tecido_id` = ' . $objDatabase->SqlVariable($this->intId) . '
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
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateReferenciaRendimento on this unsaved Tecido.');

			// Get the Database Object for this Class
			$objDatabase = Tecido::GetDatabase();

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				foreach (ReferenciaRendimento::LoadArrayByTecidoId($this->intId) as $objReferenciaRendimento) {
					$objReferenciaRendimento->Journal('DELETE');
				}
			}

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`referencia_rendimento`
				WHERE
					`tecido_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}





		////////////////////////////////////////
		// METHODS for SOAP-BASED WEB SERVICES
		////////////////////////////////////////

		public static function GetSoapComplexTypeXml() {
			$strToReturn = '<complexType name="Tecido"><sequence>';
			$strToReturn .= '<element name="Id" type="xsd:int"/>';
			$strToReturn .= '<element name="Nome" type="xsd:string"/>';
			$strToReturn .= '<element name="Codigo" type="xsd:string"/>';
			$strToReturn .= '<element name="Metro" type="xsd:float"/>';
			$strToReturn .= '<element name="Preco" type="xsd:float"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('Tecido', $strComplexTypeArray)) {
				$strComplexTypeArray['Tecido'] = Tecido::GetSoapComplexTypeXml();
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, Tecido::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new Tecido();
			if (property_exists($objSoapObject, 'Id'))
				$objToReturn->intId = $objSoapObject->Id;
			if (property_exists($objSoapObject, 'Nome'))
				$objToReturn->strNome = $objSoapObject->Nome;
			if (property_exists($objSoapObject, 'Codigo'))
				$objToReturn->strCodigo = $objSoapObject->Codigo;
			if (property_exists($objSoapObject, 'Metro'))
				$objToReturn->fltMetro = $objSoapObject->Metro;
			if (property_exists($objSoapObject, 'Preco'))
				$objToReturn->fltPreco = $objSoapObject->Preco;
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, Tecido::GetSoapObjectFromObject($objObject, true));

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
	 * @property-read QQNode $Codigo
	 * @property-read QQNode $Metro
	 * @property-read QQNode $Preco
	 * @property-read QQReverseReferenceNodeComandoPeca $ComandoPeca
	 * @property-read QQReverseReferenceNodeReferencia $Referencia
	 * @property-read QQReverseReferenceNodeReferenciaRendimento $ReferenciaRendimento
	 */
	class QQNodeTecido extends QQNode {
		protected $strTableName = 'tecido';
		protected $strPrimaryKey = 'id';
		protected $strClassName = 'Tecido';
		public function __get($strName) {
			switch ($strName) {
				case 'Id':
					return new QQNode('id', 'Id', 'integer', $this);
				case 'Nome':
					return new QQNode('nome', 'Nome', 'string', $this);
				case 'Codigo':
					return new QQNode('codigo', 'Codigo', 'string', $this);
				case 'Metro':
					return new QQNode('metro', 'Metro', 'double', $this);
				case 'Preco':
					return new QQNode('preco', 'Preco', 'double', $this);
				case 'ComandoPeca':
					return new QQReverseReferenceNodeComandoPeca($this, 'comandopeca', 'reverse_reference', 'tecido_id');
				case 'Referencia':
					return new QQReverseReferenceNodeReferencia($this, 'referencia', 'reverse_reference', 'tecido_id');
				case 'ReferenciaRendimento':
					return new QQReverseReferenceNodeReferenciaRendimento($this, 'referenciarendimento', 'reverse_reference', 'tecido_id');

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
	 * @property-read QQNode $Codigo
	 * @property-read QQNode $Metro
	 * @property-read QQNode $Preco
	 * @property-read QQReverseReferenceNodeComandoPeca $ComandoPeca
	 * @property-read QQReverseReferenceNodeReferencia $Referencia
	 * @property-read QQReverseReferenceNodeReferenciaRendimento $ReferenciaRendimento
	 * @property-read QQNode $_PrimaryKeyNode
	 */
	class QQReverseReferenceNodeTecido extends QQReverseReferenceNode {
		protected $strTableName = 'tecido';
		protected $strPrimaryKey = 'id';
		protected $strClassName = 'Tecido';
		public function __get($strName) {
			switch ($strName) {
				case 'Id':
					return new QQNode('id', 'Id', 'integer', $this);
				case 'Nome':
					return new QQNode('nome', 'Nome', 'string', $this);
				case 'Codigo':
					return new QQNode('codigo', 'Codigo', 'string', $this);
				case 'Metro':
					return new QQNode('metro', 'Metro', 'double', $this);
				case 'Preco':
					return new QQNode('preco', 'Preco', 'double', $this);
				case 'ComandoPeca':
					return new QQReverseReferenceNodeComandoPeca($this, 'comandopeca', 'reverse_reference', 'tecido_id');
				case 'Referencia':
					return new QQReverseReferenceNodeReferencia($this, 'referencia', 'reverse_reference', 'tecido_id');
				case 'ReferenciaRendimento':
					return new QQReverseReferenceNodeReferenciaRendimento($this, 'referenciarendimento', 'reverse_reference', 'tecido_id');

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