<?php

	App::uses('AppHelper', 'View/Helper');

	class HelpHelper extends AppHelper {

		/**
		 * @param  string $text   Texto descritivo da ajuda
		 * @return [type]         [description]
		 */
		public function helpTooltip( $text, $controller = NULL, $params = NULL )
		{
			if( !empty($text) )
			{
				return "<script>
						  $(function () {
						    $('[data-toggle=\"tooltip\"]').tooltip()
						  })
						</script>
						<a href='#' data-toggle='tooltip' data-placement='right' title='$text'>
						<span class='glyphicon glyphicon-question-sign'></span> Ajuda
						</a>";
			}

		}

	}