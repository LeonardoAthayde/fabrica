<?php
	/**
	 * The abstract ReferenciaGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the Referencia subclass which
	 * extends this ReferenciaGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the Referencia class.
	 * 
	 * @package My Application
	 * @subpackage GeneratedDataObjects
	 * @property integer $Id the value for intId (Read-Only PK)
	 * @property string $Nome the value for strNome (Unique)
	 * @property integer $ReferenciaCategoriaId the value for intReferenciaCategoriaId (Not Null)
	 * @property string $Modelo the value for strModelo (Not Null)
	 * @property integer $TecidoId the value for intTecidoId 
	 * @property ReferenciaCategoria $ReferenciaCategoria the value for the ReferenciaCategoria object referenced by intReferenciaCategoriaId (Not Null)
	 * @property Tecido $Tecido the value for the Tecido object referenced by intTecidoId 
	 * @property Cor $_Cor the value for the private _objCor (Read-Only) if set due to an expansion on the referencia_cor_assn association table
	 * @property Cor[] $_CorArray the value for the private _objCorArray (Read-Only) if set due to an ExpandAsArray on the referencia_cor_assn association table
	 * @property Tamanho $_Tamanho the value for the private _objTamanho (Read-Only) if set due to an expansion on the referencia_tamanho_assn association table
	 * @property Tamanho[] $_TamanhoArray the value for the private _objTamanhoArray (Read-Only) if set due to an ExpandAsArray on the referencia_tamanho_assn association table
	 * @property FluxogramaItem $_FluxogramaItem the value for the private _objFluxogramaItem (Read-Only) if set due to an expansion on the fluxograma_item.referencia_id reverse relationship
	 * @property FluxogramaItem[] $_FluxogramaItemArray the value for the private _objFluxogramaItemArray (Read-Only) if set due to an ExpandAsArray on the fluxograma_item.referencia_id reverse relationship
	 * @property OrdemProducao $_OrdemProducao the value for the private _objOrdemProducao (Read-Only) if set due to an expansion on the ordem_producao.referencia_id reverse relationship
	 * @property OrdemProducao[] $_OrdemProducaoArray the value for the private _objOrdemProducaoArray (Read-Only) if set due to an ExpandAsArray on the ordem_producao.referencia_id reverse relationship
	 * @property boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class ReferenciaGen extends QBaseClass {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////
		
		/**
		 * Protected member variable that maps to the database PK Identity column referencia.id
		 * @var integer intId
		 */
		protected $intId;
		const IdDefault = null;


		/**
		 * Protected member variable that maps to the database column referencia.nome
		 * @var string strNome
		 */
		protected $strNome;
		const NomeMaxLength = 8;
		const NomeDefault = null;


		/**
		 * Protected member variable that maps to the database column referencia.referencia_categoria_id
		 * @var integer intReferenciaCategoriaId
		 */
		protected $intReferenciaCategoriaId;
		const ReferenciaCategoriaIdDefault = null;


		/**
		 * Protected member variable that maps to the database column referencia.modelo
		 * @var string strModelo
		 */
		protected $strModelo;
		const ModeloMaxLength = 3;
		const ModeloDefault = null;


		/**
		 * Protected member variable that maps to the database column referencia.tecido_id
		 * @var integer intTecidoId
		 */
		protected $intTecidoId;
		const TecidoIdDefault = null;


		/**
		 * Private member variable that stores a reference to a single Cor object
		 * (of type Cor), if this Referencia object was restored with
		 * an expansion on the referencia_cor_assn association table.
		 * @var Cor _objCor;
		 */
		private $_objCor;

		/**
		 * Private member variable that stores a reference to an array of Cor objects
		 * (of type Cor[]), if this Referencia object was restored with
		 * an ExpandAsArray on the referencia_cor_assn association table.
		 * @var Cor[] _objCorArray;
		 */
		private $_objCorArray = array();

		/**
		 * Private member variable that stores a reference to a single Tamanho object
		 * (of type Tamanho), if this Referencia object was restored with
		 * an expansion on the referencia_tamanho_assn association table.
		 * @var Tamanho _objTamanho;
		 */
		private $_objTamanho;

		/**
		 * Private member variable that stores a reference to an array of Tamanho objects
		 * (of type Tamanho[]), if this Referencia object was restored with
		 * an ExpandAsArray on the referencia_tamanho_assn association table.
		 * @var Tamanho[] _objTamanhoArray;
		 */
		private $_objTamanhoArray = array();

		/**
		 * Private member variable that stores a reference to a single FluxogramaItem object
		 * (of type FluxogramaItem), if this Referencia object was restored with
		 * an expansion on the fluxograma_item association table.
		 * @var FluxogramaItem _objFluxogramaItem;
		 */
		private $_objFluxogramaItem;

		/**
		 * Private member variable that stores a reference to an array of FluxogramaItem objects
		 * (of type FluxogramaItem[]), if this Referencia object was restored with
		 * an ExpandAsArray on the fluxograma_item association table.
		 * @var FluxogramaItem[] _objFluxogramaItemArray;
		 */
		private $_objFluxogramaItemArray = array();

		/**
		 * Private member variable that stores a reference to a single OrdemProducao object
		 * (of type OrdemProducao), if this Referencia object was restored with
		 * an expansion on the ordem_producao association table.
		 * @var OrdemProducao _objOrdemProducao;
		 */
		private $_objOrdemProducao;

		/**
		 * Private member variable that stores a reference to an array of OrdemProducao objects
		 * (of type OrdemProducao[]), if this Referencia object was restored with
		 * an ExpandAsArray on the ordem_producao association table.
		 * @var OrdemProducao[] _objOrdemProducaoArray;
		 */
		private $_objOrdemProducaoArray = array();

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
		 * in the database column referencia.referencia_categoria_id.
		 *
		 * NOTE: Always use the ReferenciaCategoria property getter to correctly retrieve this ReferenciaCategoria object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var ReferenciaCategoria objReferenciaCategoria
		 */
		protected $objReferenciaCategoria;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column referencia.tecido_id.
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
		 * Load a Referencia from PK Info
		 * @param integer $intId
		 * @return Referencia
		 */
		public static function Load($intId) {
			// Use QuerySingle to Perform the Query
			return Referencia::QuerySingle(
				QQ::Equal(QQN::Referencia()->Id, $intId)
			);
		}

		/**
		 * Load all Referencias
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Referencia[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			// Call Referencia::QueryArray to perform the LoadAll query
			try {
				return Referencia::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all Referencias
		 * @return int
		 */
		public static function CountAll() {
			// Call Referencia::QueryCount to perform the CountAll query
			return Referencia::QueryCount(QQ::All());
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
			$objDatabase = Referencia::GetDatabase();

			// Create/Build out the QueryBuilder object with Referencia-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'referencia');
			Referencia::GetSelectFields($objQueryBuilder);
			$objQueryBuilder->AddFromItem('referencia');

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
		 * Static Qcodo Query method to query for a single Referencia object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Referencia the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Referencia::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Instantiate a new Referencia object and return it

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = Referencia::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return Referencia::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcodo Query method to query for an array of Referencia objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Referencia[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Referencia::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return Referencia::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
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
				$strQuery = Referencia::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
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
		 * Static Qcodo Query method to query for a count of Referencia objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Referencia::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = Referencia::GetDatabase();

			// Lookup the QCache for This Query Statement
			$objCache = new QCache('query', 'referencia_' . serialize($strConditions));
			if (!($strQuery = $objCache->GetData())) {
				// Not Found -- Go ahead and Create/Build out a new QueryBuilder object with Referencia-specific fields
				$objQueryBuilder = new QQueryBuilder($objDatabase);
				Referencia::GetSelectFields($objQueryBuilder);
				Referencia::GetFromFields($objQueryBuilder);

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
			return Referencia::InstantiateDbResult($objDbResult);
		}*/

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this Referencia
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'referencia';
				$strAliasPrefix = '';
			}

			$objBuilder->AddSelectItem($strTableName, 'id', $strAliasPrefix . 'id');
			$objBuilder->AddSelectItem($strTableName, 'nome', $strAliasPrefix . 'nome');
			$objBuilder->AddSelectItem($strTableName, 'referencia_categoria_id', $strAliasPrefix . 'referencia_categoria_id');
			$objBuilder->AddSelectItem($strTableName, 'modelo', $strAliasPrefix . 'modelo');
			$objBuilder->AddSelectItem($strTableName, 'tecido_id', $strAliasPrefix . 'tecido_id');
		}




		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a Referencia from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this Referencia::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param QDatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $objPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return Referencia
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
					$strAliasPrefix = 'referencia__';

				$strAlias = $strAliasPrefix . 'cor__cor_id__id';
				$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
				if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
					(!is_null($objDbRow->GetColumn($strAliasName)))) {
					if ($intPreviousChildItemCount = count($objPreviousItem->_objCorArray)) {
						$objPreviousChildItem = $objPreviousItem->_objCorArray[$intPreviousChildItemCount - 1];
						$objChildItem = Cor::InstantiateDbRow($objDbRow, $strAliasPrefix . 'cor__cor_id__', $strExpandAsArrayNodes, $objPreviousChildItem, $strColumnAliasArray);
						if ($objChildItem)
							$objPreviousItem->_objCorArray[] = $objChildItem;
					} else
						$objPreviousItem->_objCorArray[] = Cor::InstantiateDbRow($objDbRow, $strAliasPrefix . 'cor__cor_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
					$blnExpandedViaArray = true;
				}

				$strAlias = $strAliasPrefix . 'tamanho__tamanho_id__id';
				$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
				if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
					(!is_null($objDbRow->GetColumn($strAliasName)))) {
					if ($intPreviousChildItemCount = count($objPreviousItem->_objTamanhoArray)) {
						$objPreviousChildItem = $objPreviousItem->_objTamanhoArray[$intPreviousChildItemCount - 1];
						$objChildItem = Tamanho::InstantiateDbRow($objDbRow, $strAliasPrefix . 'tamanho__tamanho_id__', $strExpandAsArrayNodes, $objPreviousChildItem, $strColumnAliasArray);
						if ($objChildItem)
							$objPreviousItem->_objTamanhoArray[] = $objChildItem;
					} else
						$objPreviousItem->_objTamanhoArray[] = Tamanho::InstantiateDbRow($objDbRow, $strAliasPrefix . 'tamanho__tamanho_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
					$blnExpandedViaArray = true;
				}


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

				$strAlias = $strAliasPrefix . 'ordemproducao__id';
				$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
				if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
					(!is_null($objDbRow->GetColumn($strAliasName)))) {
					if ($intPreviousChildItemCount = count($objPreviousItem->_objOrdemProducaoArray)) {
						$objPreviousChildItem = $objPreviousItem->_objOrdemProducaoArray[$intPreviousChildItemCount - 1];
						$objChildItem = OrdemProducao::InstantiateDbRow($objDbRow, $strAliasPrefix . 'ordemproducao__', $strExpandAsArrayNodes, $objPreviousChildItem, $strColumnAliasArray);
						if ($objChildItem)
							$objPreviousItem->_objOrdemProducaoArray[] = $objChildItem;
					} else
						$objPreviousItem->_objOrdemProducaoArray[] = OrdemProducao::InstantiateDbRow($objDbRow, $strAliasPrefix . 'ordemproducao__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
					$blnExpandedViaArray = true;
				}

				// Either return false to signal array expansion, or check-to-reset the Alias prefix and move on
				if ($blnExpandedViaArray)
					return false;
				else if ($strAliasPrefix == 'referencia__')
					$strAliasPrefix = null;
			}

			// Create a new instance of the Referencia object
			$objToReturn = new Referencia();
			$objToReturn->__blnRestored = true;

			$strAliasName = array_key_exists($strAliasPrefix . 'id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'id'] : $strAliasPrefix . 'id';
			$objToReturn->intId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'nome', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'nome'] : $strAliasPrefix . 'nome';
			$objToReturn->strNome = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'referencia_categoria_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'referencia_categoria_id'] : $strAliasPrefix . 'referencia_categoria_id';
			$objToReturn->intReferenciaCategoriaId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'modelo', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'modelo'] : $strAliasPrefix . 'modelo';
			$objToReturn->strModelo = $objDbRow->GetColumn($strAliasName, 'VarChar');
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
				$strAliasPrefix = 'referencia__';

			// Check for ReferenciaCategoria Early Binding
			$strAlias = $strAliasPrefix . 'referencia_categoria_id__id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objReferenciaCategoria = ReferenciaCategoria::InstantiateDbRow($objDbRow, $strAliasPrefix . 'referencia_categoria_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for Tecido Early Binding
			$strAlias = $strAliasPrefix . 'tecido_id__id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objTecido = Tecido::InstantiateDbRow($objDbRow, $strAliasPrefix . 'tecido_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);



			// Check for Cor Virtual Binding
			$strAlias = $strAliasPrefix . 'cor__cor_id__id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
					$objToReturn->_objCorArray[] = Cor::InstantiateDbRow($objDbRow, $strAliasPrefix . 'cor__cor_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objCor = Cor::InstantiateDbRow($objDbRow, $strAliasPrefix . 'cor__cor_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for Tamanho Virtual Binding
			$strAlias = $strAliasPrefix . 'tamanho__tamanho_id__id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
					$objToReturn->_objTamanhoArray[] = Tamanho::InstantiateDbRow($objDbRow, $strAliasPrefix . 'tamanho__tamanho_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objTamanho = Tamanho::InstantiateDbRow($objDbRow, $strAliasPrefix . 'tamanho__tamanho_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}


			// Check for FluxogramaItem Virtual Binding
			$strAlias = $strAliasPrefix . 'fluxogramaitem__id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
					$objToReturn->_objFluxogramaItemArray[] = FluxogramaItem::InstantiateDbRow($objDbRow, $strAliasPrefix . 'fluxogramaitem__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objFluxogramaItem = FluxogramaItem::InstantiateDbRow($objDbRow, $strAliasPrefix . 'fluxogramaitem__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for OrdemProducao Virtual Binding
			$strAlias = $strAliasPrefix . 'ordemproducao__id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
					$objToReturn->_objOrdemProducaoArray[] = OrdemProducao::InstantiateDbRow($objDbRow, $strAliasPrefix . 'ordemproducao__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objOrdemProducao = OrdemProducao::InstantiateDbRow($objDbRow, $strAliasPrefix . 'ordemproducao__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate an array of Referencias from a Database Result
		 * @param QDatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return Referencia[]
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
					$objItem = Referencia::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objLastRowItem, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
						$objLastRowItem = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = Referencia::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate a single Referencia object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return Referencia next row resulting from the query
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
			return Referencia::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, null, $strColumnAliasArray);
		}




		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////
			
		/**
		 * Load a single Referencia object,
		 * by Id Index(es)
		 * @param integer $intId
		 * @return Referencia
		*/
		public static function LoadById($intId, $objOptionalClauses = null) {
			return Referencia::QuerySingle(
				QQ::Equal(QQN::Referencia()->Id, $intId)
			, $objOptionalClauses
			);
		}
			
		/**
		 * Load a single Referencia object,
		 * by Nome Index(es)
		 * @param string $strNome
		 * @return Referencia
		*/
		public static function LoadByNome($strNome, $objOptionalClauses = null) {
			return Referencia::QuerySingle(
				QQ::Equal(QQN::Referencia()->Nome, $strNome)
			, $objOptionalClauses
			);
		}
			
		/**
		 * Load an array of Referencia objects,
		 * by TecidoId Index(es)
		 * @param integer $intTecidoId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Referencia[]
		*/
		public static function LoadArrayByTecidoId($intTecidoId, $objOptionalClauses = null) {
			// Call Referencia::QueryArray to perform the LoadArrayByTecidoId query
			try {
				return Referencia::QueryArray(
					QQ::Equal(QQN::Referencia()->TecidoId, $intTecidoId),
					$objOptionalClauses
					);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Referencias
		 * by TecidoId Index(es)
		 * @param integer $intTecidoId
		 * @return int
		*/
		public static function CountByTecidoId($intTecidoId, $objOptionalClauses = null) {
			// Call Referencia::QueryCount to perform the CountByTecidoId query
			return Referencia::QueryCount(
				QQ::Equal(QQN::Referencia()->TecidoId, $intTecidoId)
			, $objOptionalClauses
			);
		}
			
		/**
		 * Load an array of Referencia objects,
		 * by ReferenciaCategoriaId Index(es)
		 * @param integer $intReferenciaCategoriaId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Referencia[]
		*/
		public static function LoadArrayByReferenciaCategoriaId($intReferenciaCategoriaId, $objOptionalClauses = null) {
			// Call Referencia::QueryArray to perform the LoadArrayByReferenciaCategoriaId query
			try {
				return Referencia::QueryArray(
					QQ::Equal(QQN::Referencia()->ReferenciaCategoriaId, $intReferenciaCategoriaId),
					$objOptionalClauses
					);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Referencias
		 * by ReferenciaCategoriaId Index(es)
		 * @param integer $intReferenciaCategoriaId
		 * @return int
		*/
		public static function CountByReferenciaCategoriaId($intReferenciaCategoriaId, $objOptionalClauses = null) {
			// Call Referencia::QueryCount to perform the CountByReferenciaCategoriaId query
			return Referencia::QueryCount(
				QQ::Equal(QQN::Referencia()->ReferenciaCategoriaId, $intReferenciaCategoriaId)
			, $objOptionalClauses
			);
		}
			
		/**
		 * Load an array of Referencia objects,
		 * by ReferenciaCategoriaId, Modelo Index(es)
		 * @param integer $intReferenciaCategoriaId
		 * @param string $strModelo
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Referencia[]
		*/
		public static function LoadArrayByReferenciaCategoriaIdModelo($intReferenciaCategoriaId, $strModelo, $objOptionalClauses = null) {
			// Call Referencia::QueryArray to perform the LoadArrayByReferenciaCategoriaIdModelo query
			try {
				return Referencia::QueryArray(
					QQ::AndCondition(
					QQ::Equal(QQN::Referencia()->ReferenciaCategoriaId, $intReferenciaCategoriaId),
					QQ::Equal(QQN::Referencia()->Modelo, $strModelo)
					),
					$objOptionalClauses
					);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Referencias
		 * by ReferenciaCategoriaId, Modelo Index(es)
		 * @param integer $intReferenciaCategoriaId
		 * @param string $strModelo
		 * @return int
		*/
		public static function CountByReferenciaCategoriaIdModelo($intReferenciaCategoriaId, $strModelo, $objOptionalClauses = null) {
			// Call Referencia::QueryCount to perform the CountByReferenciaCategoriaIdModelo query
			return Referencia::QueryCount(
				QQ::AndCondition(
				QQ::Equal(QQN::Referencia()->ReferenciaCategoriaId, $intReferenciaCategoriaId),
				QQ::Equal(QQN::Referencia()->Modelo, $strModelo)
				)
			, $objOptionalClauses
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////
			/**
		 * Load an array of Cor objects for a given Cor
		 * via the referencia_cor_assn table
		 * @param integer $intCorId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Referencia[]
		*/
		public static function LoadArrayByCor($intCorId, $objOptionalClauses = null) {
			// Call Referencia::QueryArray to perform the LoadArrayByCor query
			try {
				return Referencia::QueryArray(
					QQ::Equal(QQN::Referencia()->Cor->CorId, $intCorId),
					$objOptionalClauses
				);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Referencias for a given Cor
		 * via the referencia_cor_assn table
		 * @param integer $intCorId
		 * @return int
		*/
		public static function CountByCor($intCorId, $objOptionalClauses = null) {
			return Referencia::QueryCount(
				QQ::Equal(QQN::Referencia()->Cor->CorId, $intCorId),
				$objOptionalClauses
			);
		}
			/**
		 * Load an array of Tamanho objects for a given Tamanho
		 * via the referencia_tamanho_assn table
		 * @param integer $intTamanhoId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Referencia[]
		*/
		public static function LoadArrayByTamanho($intTamanhoId, $objOptionalClauses = null) {
			// Call Referencia::QueryArray to perform the LoadArrayByTamanho query
			try {
				return Referencia::QueryArray(
					QQ::Equal(QQN::Referencia()->Tamanho->TamanhoId, $intTamanhoId),
					$objOptionalClauses
				);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Referencias for a given Tamanho
		 * via the referencia_tamanho_assn table
		 * @param integer $intTamanhoId
		 * @return int
		*/
		public static function CountByTamanho($intTamanhoId, $objOptionalClauses = null) {
			return Referencia::QueryCount(
				QQ::Equal(QQN::Referencia()->Tamanho->TamanhoId, $intTamanhoId),
				$objOptionalClauses
			);
		}




		//////////////////////////////////////
		// SAVE, DELETE, RELOAD and JOURNALING
		//////////////////////////////////////

		/**
		 * Save this Referencia
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = Referencia::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `referencia` (
							`nome`,
							`referencia_categoria_id`,
							`modelo`,
							`tecido_id`
						) VALUES (
							' . $objDatabase->SqlVariable($this->strNome) . ',
							' . $objDatabase->SqlVariable($this->intReferenciaCategoriaId) . ',
							' . $objDatabase->SqlVariable($this->strModelo) . ',
							' . $objDatabase->SqlVariable($this->intTecidoId) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intId = $objDatabase->InsertId('referencia', 'id');

					// Journaling
					if ($objDatabase->JournalingDatabase) $this->Journal('INSERT');

				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`referencia`
						SET
							`nome` = ' . $objDatabase->SqlVariable($this->strNome) . ',
							`referencia_categoria_id` = ' . $objDatabase->SqlVariable($this->intReferenciaCategoriaId) . ',
							`modelo` = ' . $objDatabase->SqlVariable($this->strModelo) . ',
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
		 * Delete this Referencia
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this Referencia with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = Referencia::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`referencia`
				WHERE
					`id` = ' . $objDatabase->SqlVariable($this->intId) . '');

			// Journaling
			if ($objDatabase->JournalingDatabase) $this->Journal('DELETE');
		}

		/**
		 * Delete all Referencias
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = Referencia::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`referencia`');
		}

		/**
		 * Truncate referencia table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = Referencia::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `referencia`');
		}

		/**
		 * Reload this Referencia from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved Referencia object.');

			// Reload the Object
			$objReloaded = Referencia::Load($this->intId);

			// Update $this's local variables to match
			$this->strNome = $objReloaded->strNome;
			$this->ReferenciaCategoriaId = $objReloaded->ReferenciaCategoriaId;
			$this->strModelo = $objReloaded->strModelo;
			$this->TecidoId = $objReloaded->TecidoId;
		}

		/**
		 * Journals the current object into the Log database.
		 * Used internally as a helper method.
		 * @param string $strJournalCommand
		 */
		public function Journal($strJournalCommand) {
			$objDatabase = Referencia::GetDatabase()->JournalingDatabase;

			$objDatabase->NonQuery('
				INSERT INTO `referencia` (
					`id`,
					`nome`,
					`referencia_categoria_id`,
					`modelo`,
					`tecido_id`,
					__sys_login_id,
					__sys_action,
					__sys_date
				) VALUES (
					' . $objDatabase->SqlVariable($this->intId) . ',
					' . $objDatabase->SqlVariable($this->strNome) . ',
					' . $objDatabase->SqlVariable($this->intReferenciaCategoriaId) . ',
					' . $objDatabase->SqlVariable($this->strModelo) . ',
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
		 * @return Referencia[]
		 */
		public static function GetJournalForId($intId) {
			$objDatabase = Referencia::GetDatabase()->JournalingDatabase;

			$objResult = $objDatabase->Query('SELECT * FROM referencia WHERE id = ' .
				$objDatabase->SqlVariable($intId) . ' ORDER BY __sys_date');

			return Referencia::InstantiateDbResult($objResult);
		}

		/**
		 * Gets the historical journal for this object from the log database.
		 * Objects will have VirtualAttributes available to lookup login, date, and action information from the journal object.
		 * @return Referencia[]
		 */
		public function GetJournal() {
			return Referencia::GetJournalForId($this->intId);
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

				case 'ReferenciaCategoriaId':
					// Gets the value for intReferenciaCategoriaId (Not Null)
					// @return integer
					return $this->intReferenciaCategoriaId;

				case 'Modelo':
					// Gets the value for strModelo (Not Null)
					// @return string
					return $this->strModelo;

				case 'TecidoId':
					// Gets the value for intTecidoId 
					// @return integer
					return $this->intTecidoId;


				///////////////////
				// Member Objects
				///////////////////
				case 'ReferenciaCategoria':
					// Gets the value for the ReferenciaCategoria object referenced by intReferenciaCategoriaId (Not Null)
					// @return ReferenciaCategoria
					try {
						if ((!$this->objReferenciaCategoria) && (!is_null($this->intReferenciaCategoriaId)))
							$this->objReferenciaCategoria = ReferenciaCategoria::Load($this->intReferenciaCategoriaId);
						return $this->objReferenciaCategoria;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Tecido':
					// Gets the value for the Tecido object referenced by intTecidoId 
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

				case '_Cor':
					// Gets the value for the private _objCor (Read-Only)
					// if set due to an expansion on the referencia_cor_assn association table
					// @return Cor
					return $this->_objCor;

				case '_CorArray':
					// Gets the value for the private _objCorArray (Read-Only)
					// if set due to an ExpandAsArray on the referencia_cor_assn association table
					// @return Cor[]
					return (array) $this->_objCorArray;

				case '_Tamanho':
					// Gets the value for the private _objTamanho (Read-Only)
					// if set due to an expansion on the referencia_tamanho_assn association table
					// @return Tamanho
					return $this->_objTamanho;

				case '_TamanhoArray':
					// Gets the value for the private _objTamanhoArray (Read-Only)
					// if set due to an ExpandAsArray on the referencia_tamanho_assn association table
					// @return Tamanho[]
					return (array) $this->_objTamanhoArray;

				case '_FluxogramaItem':
					// Gets the value for the private _objFluxogramaItem (Read-Only)
					// if set due to an expansion on the fluxograma_item.referencia_id reverse relationship
					// @return FluxogramaItem
					return $this->_objFluxogramaItem;

				case '_FluxogramaItemArray':
					// Gets the value for the private _objFluxogramaItemArray (Read-Only)
					// if set due to an ExpandAsArray on the fluxograma_item.referencia_id reverse relationship
					// @return FluxogramaItem[]
					return (array) $this->_objFluxogramaItemArray;

				case '_OrdemProducao':
					// Gets the value for the private _objOrdemProducao (Read-Only)
					// if set due to an expansion on the ordem_producao.referencia_id reverse relationship
					// @return OrdemProducao
					return $this->_objOrdemProducao;

				case '_OrdemProducaoArray':
					// Gets the value for the private _objOrdemProducaoArray (Read-Only)
					// if set due to an ExpandAsArray on the ordem_producao.referencia_id reverse relationship
					// @return OrdemProducao[]
					return (array) $this->_objOrdemProducaoArray;


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

				case 'ReferenciaCategoriaId':
					// Sets the value for intReferenciaCategoriaId (Not Null)
					// @param integer $mixValue
					// @return integer
					try {
						$this->objReferenciaCategoria = null;
						return ($this->intReferenciaCategoriaId = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Modelo':
					// Sets the value for strModelo (Not Null)
					// @param string $mixValue
					// @return string
					try {
						return ($this->strModelo = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'TecidoId':
					// Sets the value for intTecidoId 
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
				case 'ReferenciaCategoria':
					// Sets the value for the ReferenciaCategoria object referenced by intReferenciaCategoriaId (Not Null)
					// @param ReferenciaCategoria $mixValue
					// @return ReferenciaCategoria
					if (is_null($mixValue)) {
						$this->intReferenciaCategoriaId = null;
						$this->objReferenciaCategoria = null;
						return null;
					} else {
						// Make sure $mixValue actually is a ReferenciaCategoria object
						try {
							$mixValue = QType::Cast($mixValue, 'ReferenciaCategoria');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						} 

						// Make sure $mixValue is a SAVED ReferenciaCategoria object
						if (is_null($mixValue->Id))
							throw new QCallerException('Unable to set an unsaved ReferenciaCategoria for this Referencia');

						// Update Local Member Variables
						$this->objReferenciaCategoria = $mixValue;
						$this->intReferenciaCategoriaId = $mixValue->Id;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'Tecido':
					// Sets the value for the Tecido object referenced by intTecidoId 
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
							throw new QCallerException('Unable to set an unsaved Tecido for this Referencia');

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
				return FluxogramaItem::LoadArrayByReferenciaId($this->intId, $objOptionalClauses);
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

			return FluxogramaItem::CountByReferenciaId($this->intId);
		}

		/**
		 * Associates a FluxogramaItem
		 * @param FluxogramaItem $objFluxogramaItem
		 * @return void
		*/ 
		public function AssociateFluxogramaItem(FluxogramaItem $objFluxogramaItem) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateFluxogramaItem on this unsaved Referencia.');
			if ((is_null($objFluxogramaItem->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateFluxogramaItem on this Referencia with an unsaved FluxogramaItem.');

			// Get the Database Object for this Class
			$objDatabase = Referencia::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`fluxograma_item`
				SET
					`referencia_id` = ' . $objDatabase->SqlVariable($this->intId) . '
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objFluxogramaItem->Id) . '
			');

			// Journaling (if applicable)
			if ($objDatabase->JournalingDatabase) {
				$objFluxogramaItem->ReferenciaId = $this->intId;
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
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFluxogramaItem on this unsaved Referencia.');
			if ((is_null($objFluxogramaItem->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFluxogramaItem on this Referencia with an unsaved FluxogramaItem.');

			// Get the Database Object for this Class
			$objDatabase = Referencia::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`fluxograma_item`
				SET
					`referencia_id` = null
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objFluxogramaItem->Id) . ' AND
					`referencia_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				$objFluxogramaItem->ReferenciaId = null;
				$objFluxogramaItem->Journal('UPDATE');
			}
		}

		/**
		 * Unassociates all FluxogramaItems
		 * @return void
		*/ 
		public function UnassociateAllFluxogramaItems() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFluxogramaItem on this unsaved Referencia.');

			// Get the Database Object for this Class
			$objDatabase = Referencia::GetDatabase();

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				foreach (FluxogramaItem::LoadArrayByReferenciaId($this->intId) as $objFluxogramaItem) {
					$objFluxogramaItem->ReferenciaId = null;
					$objFluxogramaItem->Journal('UPDATE');
				}
			}

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`fluxograma_item`
				SET
					`referencia_id` = null
				WHERE
					`referencia_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Deletes an associated FluxogramaItem
		 * @param FluxogramaItem $objFluxogramaItem
		 * @return void
		*/ 
		public function DeleteAssociatedFluxogramaItem(FluxogramaItem $objFluxogramaItem) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFluxogramaItem on this unsaved Referencia.');
			if ((is_null($objFluxogramaItem->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFluxogramaItem on this Referencia with an unsaved FluxogramaItem.');

			// Get the Database Object for this Class
			$objDatabase = Referencia::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`fluxograma_item`
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objFluxogramaItem->Id) . ' AND
					`referencia_id` = ' . $objDatabase->SqlVariable($this->intId) . '
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
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFluxogramaItem on this unsaved Referencia.');

			// Get the Database Object for this Class
			$objDatabase = Referencia::GetDatabase();

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				foreach (FluxogramaItem::LoadArrayByReferenciaId($this->intId) as $objFluxogramaItem) {
					$objFluxogramaItem->Journal('DELETE');
				}
			}

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`fluxograma_item`
				WHERE
					`referencia_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

			
		
		// Related Objects' Methods for OrdemProducao
		//-------------------------------------------------------------------

		/**
		 * Gets all associated OrdemProducaos as an array of OrdemProducao objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return OrdemProducao[]
		*/ 
		public function GetOrdemProducaoArray($objOptionalClauses = null) {
			if ((is_null($this->intId)))
				return array();

			try {
				return OrdemProducao::LoadArrayByReferenciaId($this->intId, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated OrdemProducaos
		 * @return int
		*/ 
		public function CountOrdemProducaos() {
			if ((is_null($this->intId)))
				return 0;

			return OrdemProducao::CountByReferenciaId($this->intId);
		}

		/**
		 * Associates a OrdemProducao
		 * @param OrdemProducao $objOrdemProducao
		 * @return void
		*/ 
		public function AssociateOrdemProducao(OrdemProducao $objOrdemProducao) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateOrdemProducao on this unsaved Referencia.');
			if ((is_null($objOrdemProducao->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateOrdemProducao on this Referencia with an unsaved OrdemProducao.');

			// Get the Database Object for this Class
			$objDatabase = Referencia::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`ordem_producao`
				SET
					`referencia_id` = ' . $objDatabase->SqlVariable($this->intId) . '
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objOrdemProducao->Id) . '
			');

			// Journaling (if applicable)
			if ($objDatabase->JournalingDatabase) {
				$objOrdemProducao->ReferenciaId = $this->intId;
				$objOrdemProducao->Journal('UPDATE');
			}
		}

		/**
		 * Unassociates a OrdemProducao
		 * @param OrdemProducao $objOrdemProducao
		 * @return void
		*/ 
		public function UnassociateOrdemProducao(OrdemProducao $objOrdemProducao) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateOrdemProducao on this unsaved Referencia.');
			if ((is_null($objOrdemProducao->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateOrdemProducao on this Referencia with an unsaved OrdemProducao.');

			// Get the Database Object for this Class
			$objDatabase = Referencia::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`ordem_producao`
				SET
					`referencia_id` = null
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objOrdemProducao->Id) . ' AND
					`referencia_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				$objOrdemProducao->ReferenciaId = null;
				$objOrdemProducao->Journal('UPDATE');
			}
		}

		/**
		 * Unassociates all OrdemProducaos
		 * @return void
		*/ 
		public function UnassociateAllOrdemProducaos() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateOrdemProducao on this unsaved Referencia.');

			// Get the Database Object for this Class
			$objDatabase = Referencia::GetDatabase();

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				foreach (OrdemProducao::LoadArrayByReferenciaId($this->intId) as $objOrdemProducao) {
					$objOrdemProducao->ReferenciaId = null;
					$objOrdemProducao->Journal('UPDATE');
				}
			}

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`ordem_producao`
				SET
					`referencia_id` = null
				WHERE
					`referencia_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Deletes an associated OrdemProducao
		 * @param OrdemProducao $objOrdemProducao
		 * @return void
		*/ 
		public function DeleteAssociatedOrdemProducao(OrdemProducao $objOrdemProducao) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateOrdemProducao on this unsaved Referencia.');
			if ((is_null($objOrdemProducao->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateOrdemProducao on this Referencia with an unsaved OrdemProducao.');

			// Get the Database Object for this Class
			$objDatabase = Referencia::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`ordem_producao`
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objOrdemProducao->Id) . ' AND
					`referencia_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				$objOrdemProducao->Journal('DELETE');
			}
		}

		/**
		 * Deletes all associated OrdemProducaos
		 * @return void
		*/ 
		public function DeleteAllOrdemProducaos() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateOrdemProducao on this unsaved Referencia.');

			// Get the Database Object for this Class
			$objDatabase = Referencia::GetDatabase();

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				foreach (OrdemProducao::LoadArrayByReferenciaId($this->intId) as $objOrdemProducao) {
					$objOrdemProducao->Journal('DELETE');
				}
			}

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`ordem_producao`
				WHERE
					`referencia_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

			
		// Related Many-to-Many Objects' Methods for Cor
		//-------------------------------------------------------------------

		/**
		 * Gets all many-to-many associated Cors as an array of Cor objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Cor[]
		*/ 
		public function GetCorArray($objOptionalClauses = null) {
			if ((is_null($this->intId)))
				return array();

			try {
				return Cor::LoadArrayByReferencia($this->intId, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all many-to-many associated Cors
		 * @return int
		*/ 
		public function CountCors() {
			if ((is_null($this->intId)))
				return 0;

			return Cor::CountByReferencia($this->intId);
		}

		/**
		 * Checks to see if an association exists with a specific Cor
		 * @param Cor $objCor
		 * @return bool
		*/
		public function IsCorAssociated(Cor $objCor) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call IsCorAssociated on this unsaved Referencia.');
			if ((is_null($objCor->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call IsCorAssociated on this Referencia with an unsaved Cor.');

			$intRowCount = Referencia::QueryCount(
				QQ::AndCondition(
					QQ::Equal(QQN::Referencia()->Id, $this->intId),
					QQ::Equal(QQN::Referencia()->Cor->CorId, $objCor->Id)
				)
			);

			return ($intRowCount > 0);
		}

		/**
		 * Journals the Cor relationship into the Log database.
		 * Used internally as a helper method.
		 * @param string $strJournalCommand
		 */
		public function JournalCorAssociation($intAssociatedId, $strJournalCommand) {
			$objDatabase = Referencia::GetDatabase()->JournalingDatabase;

			$objDatabase->NonQuery('
				INSERT INTO `referencia_cor_assn` (
					`referencia_id`,
					`cor_id`,
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
		 * Gets the historical journal for an object's Cor relationship from the log database.
		 * @param integer intId
		 * @return QDatabaseResult $objResult
		 */
		public static function GetJournalCorAssociationForId($intId) {
			$objDatabase = Referencia::GetDatabase()->JournalingDatabase;

			return $objDatabase->Query('SELECT * FROM referencia_cor_assn WHERE referencia_id = ' .
				$objDatabase->SqlVariable($intId) . ' ORDER BY __sys_date');
		}

		/**
		 * Gets the historical journal for this object's Cor relationship from the log database.
		 * @return QDatabaseResult $objResult
		 */
		public function GetJournalCorAssociation() {
			return Referencia::GetJournalCorAssociationForId($this->intId);
		}

		/**
		 * Associates a Cor
		 * @param Cor $objCor
		 * @return void
		*/ 
		public function AssociateCor(Cor $objCor) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateCor on this unsaved Referencia.');
			if ((is_null($objCor->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateCor on this Referencia with an unsaved Cor.');

			// Get the Database Object for this Class
			$objDatabase = Referencia::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				INSERT INTO `referencia_cor_assn` (
					`referencia_id`,
					`cor_id`
				) VALUES (
					' . $objDatabase->SqlVariable($this->intId) . ',
					' . $objDatabase->SqlVariable($objCor->Id) . '
				)
			');

			// Journaling (if applicable)
			if ($objDatabase->JournalingDatabase)
				$this->JournalCorAssociation($objCor->Id, 'INSERT');
		}

		/**
		 * Unassociates a Cor
		 * @param Cor $objCor
		 * @return void
		*/ 
		public function UnassociateCor(Cor $objCor) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateCor on this unsaved Referencia.');
			if ((is_null($objCor->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateCor on this Referencia with an unsaved Cor.');

			// Get the Database Object for this Class
			$objDatabase = Referencia::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`referencia_cor_assn`
				WHERE
					`referencia_id` = ' . $objDatabase->SqlVariable($this->intId) . ' AND
					`cor_id` = ' . $objDatabase->SqlVariable($objCor->Id) . '
			');

			// Journaling (if applicable)
			if ($objDatabase->JournalingDatabase)
				$this->JournalCorAssociation($objCor->Id, 'DELETE');
		}

		/**
		 * Unassociates all Cors
		 * @return void
		*/ 
		public function UnassociateAllCors() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAllCorArray on this unsaved Referencia.');

			// Get the Database Object for this Class
			$objDatabase = Referencia::GetDatabase();

			// Journaling (if applicable)
			if ($objDatabase->JournalingDatabase) {
				$objResult = $objDatabase->Query('SELECT `cor_id` AS associated_id FROM `referencia_cor_assn` WHERE `referencia_id` = ' . $objDatabase->SqlVariable($this->intId));
				while ($objRow = $objResult->GetNextRow()) {
					$this->JournalCorAssociation($objRow->GetColumn('associated_id'), 'DELETE');
				}
			}

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`referencia_cor_assn`
				WHERE
					`referencia_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}
			
		// Related Many-to-Many Objects' Methods for Tamanho
		//-------------------------------------------------------------------

		/**
		 * Gets all many-to-many associated Tamanhos as an array of Tamanho objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Tamanho[]
		*/ 
		public function GetTamanhoArray($objOptionalClauses = null) {
			if ((is_null($this->intId)))
				return array();

			try {
				return Tamanho::LoadArrayByReferencia($this->intId, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all many-to-many associated Tamanhos
		 * @return int
		*/ 
		public function CountTamanhos() {
			if ((is_null($this->intId)))
				return 0;

			return Tamanho::CountByReferencia($this->intId);
		}

		/**
		 * Checks to see if an association exists with a specific Tamanho
		 * @param Tamanho $objTamanho
		 * @return bool
		*/
		public function IsTamanhoAssociated(Tamanho $objTamanho) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call IsTamanhoAssociated on this unsaved Referencia.');
			if ((is_null($objTamanho->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call IsTamanhoAssociated on this Referencia with an unsaved Tamanho.');

			$intRowCount = Referencia::QueryCount(
				QQ::AndCondition(
					QQ::Equal(QQN::Referencia()->Id, $this->intId),
					QQ::Equal(QQN::Referencia()->Tamanho->TamanhoId, $objTamanho->Id)
				)
			);

			return ($intRowCount > 0);
		}

		/**
		 * Journals the Tamanho relationship into the Log database.
		 * Used internally as a helper method.
		 * @param string $strJournalCommand
		 */
		public function JournalTamanhoAssociation($intAssociatedId, $strJournalCommand) {
			$objDatabase = Referencia::GetDatabase()->JournalingDatabase;

			$objDatabase->NonQuery('
				INSERT INTO `referencia_tamanho_assn` (
					`referencia_id`,
					`tamanho_id`,
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
		 * Gets the historical journal for an object's Tamanho relationship from the log database.
		 * @param integer intId
		 * @return QDatabaseResult $objResult
		 */
		public static function GetJournalTamanhoAssociationForId($intId) {
			$objDatabase = Referencia::GetDatabase()->JournalingDatabase;

			return $objDatabase->Query('SELECT * FROM referencia_tamanho_assn WHERE referencia_id = ' .
				$objDatabase->SqlVariable($intId) . ' ORDER BY __sys_date');
		}

		/**
		 * Gets the historical journal for this object's Tamanho relationship from the log database.
		 * @return QDatabaseResult $objResult
		 */
		public function GetJournalTamanhoAssociation() {
			return Referencia::GetJournalTamanhoAssociationForId($this->intId);
		}

		/**
		 * Associates a Tamanho
		 * @param Tamanho $objTamanho
		 * @return void
		*/ 
		public function AssociateTamanho(Tamanho $objTamanho) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateTamanho on this unsaved Referencia.');
			if ((is_null($objTamanho->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateTamanho on this Referencia with an unsaved Tamanho.');

			// Get the Database Object for this Class
			$objDatabase = Referencia::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				INSERT INTO `referencia_tamanho_assn` (
					`referencia_id`,
					`tamanho_id`
				) VALUES (
					' . $objDatabase->SqlVariable($this->intId) . ',
					' . $objDatabase->SqlVariable($objTamanho->Id) . '
				)
			');

			// Journaling (if applicable)
			if ($objDatabase->JournalingDatabase)
				$this->JournalTamanhoAssociation($objTamanho->Id, 'INSERT');
		}

		/**
		 * Unassociates a Tamanho
		 * @param Tamanho $objTamanho
		 * @return void
		*/ 
		public function UnassociateTamanho(Tamanho $objTamanho) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTamanho on this unsaved Referencia.');
			if ((is_null($objTamanho->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTamanho on this Referencia with an unsaved Tamanho.');

			// Get the Database Object for this Class
			$objDatabase = Referencia::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`referencia_tamanho_assn`
				WHERE
					`referencia_id` = ' . $objDatabase->SqlVariable($this->intId) . ' AND
					`tamanho_id` = ' . $objDatabase->SqlVariable($objTamanho->Id) . '
			');

			// Journaling (if applicable)
			if ($objDatabase->JournalingDatabase)
				$this->JournalTamanhoAssociation($objTamanho->Id, 'DELETE');
		}

		/**
		 * Unassociates all Tamanhos
		 * @return void
		*/ 
		public function UnassociateAllTamanhos() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAllTamanhoArray on this unsaved Referencia.');

			// Get the Database Object for this Class
			$objDatabase = Referencia::GetDatabase();

			// Journaling (if applicable)
			if ($objDatabase->JournalingDatabase) {
				$objResult = $objDatabase->Query('SELECT `tamanho_id` AS associated_id FROM `referencia_tamanho_assn` WHERE `referencia_id` = ' . $objDatabase->SqlVariable($this->intId));
				while ($objRow = $objResult->GetNextRow()) {
					$this->JournalTamanhoAssociation($objRow->GetColumn('associated_id'), 'DELETE');
				}
			}

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`referencia_tamanho_assn`
				WHERE
					`referencia_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}




		////////////////////////////////////////
		// METHODS for SOAP-BASED WEB SERVICES
		////////////////////////////////////////

		public static function GetSoapComplexTypeXml() {
			$strToReturn = '<complexType name="Referencia"><sequence>';
			$strToReturn .= '<element name="Id" type="xsd:int"/>';
			$strToReturn .= '<element name="Nome" type="xsd:string"/>';
			$strToReturn .= '<element name="ReferenciaCategoria" type="xsd1:ReferenciaCategoria"/>';
			$strToReturn .= '<element name="Modelo" type="xsd:string"/>';
			$strToReturn .= '<element name="Tecido" type="xsd1:Tecido"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('Referencia', $strComplexTypeArray)) {
				$strComplexTypeArray['Referencia'] = Referencia::GetSoapComplexTypeXml();
				ReferenciaCategoria::AlterSoapComplexTypeArray($strComplexTypeArray);
				Tecido::AlterSoapComplexTypeArray($strComplexTypeArray);
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, Referencia::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new Referencia();
			if (property_exists($objSoapObject, 'Id'))
				$objToReturn->intId = $objSoapObject->Id;
			if (property_exists($objSoapObject, 'Nome'))
				$objToReturn->strNome = $objSoapObject->Nome;
			if ((property_exists($objSoapObject, 'ReferenciaCategoria')) &&
				($objSoapObject->ReferenciaCategoria))
				$objToReturn->ReferenciaCategoria = ReferenciaCategoria::GetObjectFromSoapObject($objSoapObject->ReferenciaCategoria);
			if (property_exists($objSoapObject, 'Modelo'))
				$objToReturn->strModelo = $objSoapObject->Modelo;
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
				array_push($objArrayToReturn, Referencia::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->objReferenciaCategoria)
				$objObject->objReferenciaCategoria = ReferenciaCategoria::GetSoapObjectFromObject($objObject->objReferenciaCategoria, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intReferenciaCategoriaId = null;
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
	 * @property-read QQNode $CorId
	 * @property-read QQNodeCor $Cor
	 * @property-read QQNodeCor $_ChildTableNode
	 */
	class QQNodeReferenciaCor extends QQAssociationNode {
		protected $strType = 'association';
		protected $strName = 'cor';

		protected $strTableName = 'referencia_cor_assn';
		protected $strPrimaryKey = 'referencia_id';
		protected $strClassName = 'Cor';

		public function __get($strName) {
			switch ($strName) {
				case 'CorId':
					return new QQNode('cor_id', 'CorId', 'integer', $this);
				case 'Cor':
					return new QQNodeCor('cor_id', 'CorId', 'integer', $this);
				case '_ChildTableNode':
					return new QQNodeCor('cor_id', 'CorId', 'integer', $this);
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
	 * @property-read QQNode $TamanhoId
	 * @property-read QQNodeTamanho $Tamanho
	 * @property-read QQNodeTamanho $_ChildTableNode
	 */
	class QQNodeReferenciaTamanho extends QQAssociationNode {
		protected $strType = 'association';
		protected $strName = 'tamanho';

		protected $strTableName = 'referencia_tamanho_assn';
		protected $strPrimaryKey = 'referencia_id';
		protected $strClassName = 'Tamanho';

		public function __get($strName) {
			switch ($strName) {
				case 'TamanhoId':
					return new QQNode('tamanho_id', 'TamanhoId', 'integer', $this);
				case 'Tamanho':
					return new QQNodeTamanho('tamanho_id', 'TamanhoId', 'integer', $this);
				case '_ChildTableNode':
					return new QQNodeTamanho('tamanho_id', 'TamanhoId', 'integer', $this);
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
	 * @property-read QQNode $ReferenciaCategoriaId
	 * @property-read QQNodeReferenciaCategoria $ReferenciaCategoria
	 * @property-read QQNode $Modelo
	 * @property-read QQNode $TecidoId
	 * @property-read QQNodeTecido $Tecido
	 * @property-read QQNodeReferenciaCor $Cor
	 * @property-read QQNodeReferenciaTamanho $Tamanho
	 * @property-read QQReverseReferenceNodeFluxogramaItem $FluxogramaItem
	 * @property-read QQReverseReferenceNodeOrdemProducao $OrdemProducao
	 */
	class QQNodeReferencia extends QQNode {
		protected $strTableName = 'referencia';
		protected $strPrimaryKey = 'id';
		protected $strClassName = 'Referencia';
		public function __get($strName) {
			switch ($strName) {
				case 'Id':
					return new QQNode('id', 'Id', 'integer', $this);
				case 'Nome':
					return new QQNode('nome', 'Nome', 'string', $this);
				case 'ReferenciaCategoriaId':
					return new QQNode('referencia_categoria_id', 'ReferenciaCategoriaId', 'integer', $this);
				case 'ReferenciaCategoria':
					return new QQNodeReferenciaCategoria('referencia_categoria_id', 'ReferenciaCategoria', 'integer', $this);
				case 'Modelo':
					return new QQNode('modelo', 'Modelo', 'string', $this);
				case 'TecidoId':
					return new QQNode('tecido_id', 'TecidoId', 'integer', $this);
				case 'Tecido':
					return new QQNodeTecido('tecido_id', 'Tecido', 'integer', $this);
				case 'Cor':
					return new QQNodeReferenciaCor($this);
				case 'Tamanho':
					return new QQNodeReferenciaTamanho($this);
				case 'FluxogramaItem':
					return new QQReverseReferenceNodeFluxogramaItem($this, 'fluxogramaitem', 'reverse_reference', 'referencia_id');
				case 'OrdemProducao':
					return new QQReverseReferenceNodeOrdemProducao($this, 'ordemproducao', 'reverse_reference', 'referencia_id');

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
	 * @property-read QQNode $ReferenciaCategoriaId
	 * @property-read QQNodeReferenciaCategoria $ReferenciaCategoria
	 * @property-read QQNode $Modelo
	 * @property-read QQNode $TecidoId
	 * @property-read QQNodeTecido $Tecido
	 * @property-read QQNodeReferenciaCor $Cor
	 * @property-read QQNodeReferenciaTamanho $Tamanho
	 * @property-read QQReverseReferenceNodeFluxogramaItem $FluxogramaItem
	 * @property-read QQReverseReferenceNodeOrdemProducao $OrdemProducao
	 * @property-read QQNode $_PrimaryKeyNode
	 */
	class QQReverseReferenceNodeReferencia extends QQReverseReferenceNode {
		protected $strTableName = 'referencia';
		protected $strPrimaryKey = 'id';
		protected $strClassName = 'Referencia';
		public function __get($strName) {
			switch ($strName) {
				case 'Id':
					return new QQNode('id', 'Id', 'integer', $this);
				case 'Nome':
					return new QQNode('nome', 'Nome', 'string', $this);
				case 'ReferenciaCategoriaId':
					return new QQNode('referencia_categoria_id', 'ReferenciaCategoriaId', 'integer', $this);
				case 'ReferenciaCategoria':
					return new QQNodeReferenciaCategoria('referencia_categoria_id', 'ReferenciaCategoria', 'integer', $this);
				case 'Modelo':
					return new QQNode('modelo', 'Modelo', 'string', $this);
				case 'TecidoId':
					return new QQNode('tecido_id', 'TecidoId', 'integer', $this);
				case 'Tecido':
					return new QQNodeTecido('tecido_id', 'Tecido', 'integer', $this);
				case 'Cor':
					return new QQNodeReferenciaCor($this);
				case 'Tamanho':
					return new QQNodeReferenciaTamanho($this);
				case 'FluxogramaItem':
					return new QQReverseReferenceNodeFluxogramaItem($this, 'fluxogramaitem', 'reverse_reference', 'referencia_id');
				case 'OrdemProducao':
					return new QQReverseReferenceNodeOrdemProducao($this, 'ordemproducao', 'reverse_reference', 'referencia_id');

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