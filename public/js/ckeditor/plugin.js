﻿(function()
	{
		CKEDITOR.plugins.add( 'toc', {

			// Register the icons. They must match command names.
			icons: 'toc',
			lang: ['de','en'],
			// The plugin initialization logic goes inside this method.
			init: function( editor ) {

				// Define the editor command that inserts a timestamp.
				editor.addCommand( 'insertToc', {
		
					allowedContent: '*[id,name,class]{margin-left}',
					// Define the function that will be fired when the command is executed.
					exec: function( editor )
					{
						//remove already exisiting tocs...
						var tocElements = editor.document.$.getElementsByName("tableOfContents");
						for (var j = tocElements.length; j > 0; j--) 
						{
							var oldid = tocElements[j-1].getAttribute("id").toString();
							editor.document.getById(oldid).remove();
						}
						//find all headings
						var list = [],
						nodes = editor.editable().find('h1,h2,h3');

						if ( nodes.count() == 0 )
						{
							alert( editor.lang.toc.notitles );
							return;
						}
						//iterate over headings
						var tocItems = "";
						var seqH2 = 0, seqH3=0, seq = 0;
						for ( var i = 0 ; i < nodes.count() ; i++ )
						{
							var node = nodes.getItem(i),
							//level can be used for indenting. it contains a number between 0 (h1) and 5 (h6).
							level = parseInt( node.getName().substr( 1 ) ) - 1;
							if(level == 1) {
								seqH2 = seqH2 + 1;
								seq = seqH2 + '. ';
								seqH3 = 0;
							}
							else if (level == 2) {
								seq = '• ';
								seqH3 = seqH3 + 1;
							}
							var text = new CKEDITOR.dom.text( CKEDITOR.tools.trim( node.getText() ), editor.document);

							var id="";
							//check if heading has id
							if(node.hasAttribute("id")) { id = node.getAttribute("id").toString(); }
							//if no id, create an id based on the text
							else 
							{
								if(level == 1) id = 'hmenuId' + seqH2.toString();
								else if(level == 2) id = 'childmenuId' + seqH3.toString();
								node.setAttribute( 'id', id.toString() );
							}
				
							//build toc entries as divs
							tocItems = tocItems + '<div style="margin-left:'+level*10+'px" id="' + id.toString() + '-toc" name="tableOfContents">' + '<a href="#' + id.toString() + '">' + seq + text.getText().toString() + '</a></div>';
						}

						//output toc
						var tocNode = '<div class="toc_par"><p name="tableOfContents" id="main-toc"><b>' + editor.lang.toc.ToC + '</b></p>' + tocItems + '</div>';
						editor.insertHtml(tocNode);
						
					}
				});

				// Create the toolbar button that executes the above command.
				editor.ui.addButton( 'toc', {
					label: editor.lang.toc.tooltip,
					command: 'insertToc',
					icon: '/images/icon/toc.png',
   		         toolbar: 'links'
				});
				console.log(this.path);
			}
		}
	)
})
();
