<% foreach ($objTable->ColumnArray as $objColumn) { %><%
	// Use the "control_create_" subtemplates to generate the code
	// required to create/setup the control.
	$mixArguments = array(
		'objColumn' => $objColumn,
		'strObjectName' => $objCodeGen->VariableNameFromTable($objTable->Name),
		'strClassName' => $objTable->ClassName,
		'strControlId' => $objCodeGen->FormControlVariableNameForColumn($objColumn),
		'strLabelId' => $objCodeGen->FormLabelVariableNameForColumn($objColumn)
	);

	// Figure out WHICH "control_create_" to use
	if ($objColumn->Identity) {
		$strTemplateFilename = 'identity';
	} else if ($objColumn->Timestamp) {
		$strTemplateFilename = 'identity';
	} else if ($objColumn->Reference) {
		if ($objColumn->Reference->IsType)
			$strTemplateFilename = 'type';
		else
			$strTemplateFilename = 'reference';
	} else if (strpos($objColumn->Name, 'fla') !== false) {
		$strTemplateFilename = 'file_asset';
	} else if (strpos($objColumn->Name, 'cke') !== false) { 
		$strTemplateFilename = 'ckeditor';
	} else
		$strTemplateFilename = $objColumn->VariableType;
	
	
	// Get the subtemplate and evaluate
	return $objCodeGen->EvaluateSubTemplate(sprintf('control_create_%s.tpl', $strTemplateFilename), $strModuleName, $mixArguments) . "\n\n";
%><% } %>
<% foreach ($objTable->ReverseReferenceArray as $objReverseReference) { %><%
	if ($objReverseReference->Unique) { 
		// Use the "control_create_" subtemplates to generate the code
		// required to create/setup the control.
		$mixArguments = array(
			'objReverseReference' => $objReverseReference,
			'objTable' => $objTable,
			'strObjectName' => $objCodeGen->VariableNameFromTable($objTable->Name),
			'strClassName' => $objTable->ClassName,
			'strControlId' => $objCodeGen->FormControlVariableNameForUniqueReverseReference($objReverseReference),
			'strLabelId' => $objCodeGen->FormLabelVariableNameForUniqueReverseReference($objReverseReference)
		);
		// Get the subtemplate and evaluate
		return $objCodeGen->EvaluateSubTemplate('control_create_unique_reversereference.tpl', $strModuleName, $mixArguments) . "\n\n";
	} else
		return null;
%><% } %>
<% foreach ($objTable->ManyToManyReferenceArray as $objManyToManyReference) { %><%
	// Use the "control_create_manytomany_reference" subtemplate to generate the code
	// required to create/setup the control.
	$mixArguments = array(
		'objManyToManyReference' => $objManyToManyReference,
		'objTable' => $objTable,
		'strObjectName' => $objCodeGen->VariableNameFromTable($objTable->Name),
		'strClassName' => $objTable->ClassName,
		'strControlId' => $objCodeGen->FormControlVariableNameForManyToManyReference($objManyToManyReference),
		'strLabelId' => $objCodeGen->FormLabelVariableNameForManyToManyReference($objManyToManyReference)
	);
	// Get the subtemplate and evaluate
	return $objCodeGen->EvaluateSubTemplate('control_create_manytomany_reference.tpl', $strModuleName, $mixArguments) . "\n\n";
%><% } %>