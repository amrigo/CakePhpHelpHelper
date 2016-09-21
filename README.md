# CakePhpHelpHelper
A helper to show some help text

Instructions:

1.
Copy HelpHelper into App/View/Helper directory

2.
In your controller :
	public $helpers = array('Help');
	
3.
In your view :
	echo $this->Help->helpTooltip('Show some helpfull text here');
