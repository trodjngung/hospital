<?php
class TranslateShell extends AppShell {
	public function main(){
		if($this->copy())
			$this->translate();
	}
	
	public function copy(){
		$file = "https://docs.google.com/a/tmh-techlab.vn/spreadsheets/d/1lwYkuuOtwC9Vove4SRftwkwqbxADpd9EuImTNVJ6O-k/export?format=csv&id=1lwYkuuOtwC9Vove4SRftwkwqbxADpd9EuImTNVJ6O-k&gid=1131696360";
		$newfile = APP."Config/translation.csv";
	
		if(!copy($file, $newfile)){
			$this->out("<error>Error:</error> Failed to copy file from Google driver");
			return false;
		}
		else
		{
			$this->out("Copy from Google driver successful");
			return true;	
		}
	}
	
	public function translate() {
		setlocale(LC_ALL, 'ja_JP.UTF-8');
		
		define("READFILES", APP."Config/translation.csv");
		
		define("ENG_DIR", APP."Locale/eng/LC_MESSAGES/");
		define("JPN_DIR", APP."Locale/jpn/LC_MESSAGES/");
		define("VIE_DIR", APP."Locale/vn/LC_MESSAGES/");
		
		define("SAVEFILES", "default.po");
		
$h = "msgid \"\"
msgstr \"\"
\"Project-Id-Version: PROJECT VERSION\"
\"POT-Creation-Date: ".date("Y-m-d, G:i:s P")."\"
\"PO-Revision-Date: YYYY-mm-DD HH:MM+ZZZZ\"
\"Last-Translator: NAME <EMAIL@ADDRESS>\"
\"Language-Team: LANGUAGE <EMAIL@ADDRESS>\"
\"MIME-Version: 1.0\"
\"Content-Type: text/plain; charset=utf-8\"
\"Content-Transfer-Encoding: 8bit\"
\"Plural-Forms: nplurals=INTEGER; plural=EXPRESSION;\"
";

		$eng_content = $h;
		$jpn_content = $h;
		$vie_content = $h;
		
		if($fp = fopen(READFILES, "r"))
		{
			while(!feof($fp))
			{
				$line = fgetcsv($fp);
								
				$eng_content .= "msgid \"".$line[0]."\"\nmsgstr \"".str_replace("\n", "<br>", $line[1])."\"\n\n";
				$jpn_content .= "msgid \"".$line[0]."\"\nmsgstr \"".str_replace("\n", "<br>", mb_convert_encoding($line[2], "UTF-8", "auto"))."\"\n\n";
				$vie_content .= "msgid \"".$line[0]."\"\nmsgstr \"".str_replace("\n", "<br>", mb_convert_encoding($line[3], "UTF-8", "auto"))."\"\n\n";
			}
			fclose($fp);
			
			$eng_file = fopen(ENG_DIR.SAVEFILES, "w");
			fputs($eng_file, $eng_content);
			fclose($eng_file);
	
			$jpn_file = fopen(JPN_DIR.SAVEFILES, "w");
			fputs($jpn_file, $jpn_content);
			fclose($jpn_file);
	
			$vie_file = fopen(VIE_DIR.SAVEFILES, "w");
			fputs($vie_file, $vie_content);
			fclose($vie_file);
			
			$this->out("Convert to po file successful");
		}
		else
			$this->out("<error>Error:</error> Failed to read file from ".READFILES);
	}
}
