<?php

// "plugin" for plain html-formatted text
// returns main as it is as page-body
// returns empty header

class HtmlPlugin {
	
	function getBody($main) {
		return $main;
	}
	
	function getHead($main) {
		return;
	}
	
	function getMain($post) {
		// schoudl be html-formatted already
		return $post['html-content'];
	}
	
	function getEditorBody($main) {
		// ToDo: return an wysiwyg-editor (as html)
		return "<h2>Page Content</h2><textarea>".$main."</textarea><br>\n";
	}
	
	function getEditorHead($main) {
		return;
	}
}

// add plugin-object
$PLUGINS["html"] = new HtmlPlugin();
