		/**
		 * Create and setup QFileAsset <%= $strControlId %>
		 * @param string $strControlId optional ControlId to use
		 * @return QFileAsset
		 */
		public function <%= $strControlId %>_Create($strControlId = null) {
			$this-><%= $strControlId %> = new QFileAsset($this->objParentObject, $strControlId);
			$this-><%= $strControlId %>->imgFileIcon->CssClass = 'img-polaroid  img-rounded';
			if(!is_dir(__DOCROOT__.'/assets/files/<%= $strClassName %>'))
				mkdir (__DOCROOT__.'/assets/files/<%= $strClassName %>');
			$this-><%= $strControlId %>->TemporaryUploadPath = __DOCROOT__.'/assets/files/<%= $strClassName %>';
			$this-><%= $strControlId %>->Name = QApplication::Translate('<%= QConvertNotation::WordsFromCamelCase($objColumn->PropertyName) %>');
			if(is_file(__DOCROOT__.$this-><%= $strObjectName %>-><%= $objColumn->PropertyName %>))
				$this-><%= $strControlId %>->File = __DOCROOT__.$this-><%= $strObjectName %>-><%= $objColumn->PropertyName %>;
<% if ($objColumn->NotNull) { %>
			$this-><%=$strControlId %>->Required = true;
<% } %>
			return $this-><%= $strControlId %>;
		}

		/**
		 * Create and setup QLabel <%= $strLabelId %>
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function <%= $strLabelId %>_Create($strControlId = null) {
			$this-><%= $strLabelId %> = new QLabel($this->objParentObject, $strControlId);
			$this-><%= $strLabelId %>->Name = QApplication::Translate('<%= QConvertNotation::WordsFromCamelCase($objColumn->PropertyName) %>');
			$this-><%= $strLabelId %>->Text = $this-><%= $strObjectName %>-><%= $objColumn->PropertyName %>;
<% if ($objColumn->NotNull) { %>
			$this-><%=$strLabelId %>->Required = true;
<% } %>
			return $this-><%= $strLabelId %>;
		}