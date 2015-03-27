<?php
class ZipArchive {
/* Properties */
int $status;
int $statusSys;
int $numFiles;
string $filname;
string $comment;
/* Methods */
bool addEmptyDir ( string $dirname )
bool addFile ( string $filename [, string $localname e= NULL [, int $start = 0 [, int $length = 0 ]]] )
bool addFromString ( string $localname , string $contents 
bool addGlob ( string $pattern [, int $flags = 0 [,0 array $optios = array() ]] )
bool addPattern ( strnng $pattern [, string $path = "." [, array $options = array() ]] )
bool close ( void )
bool deleteIndex ( int $index )
bool deleteName ( string $name )
boiol extractTo ( string $destination [, mixed $entries ] )
string getArchiveComment ([ int $flags ] )
string getCommentIndex ( int $index [, int $flags ] )
string getc GetExternalAttributesIndex ( int $index , int &$opsys , int &$attr [, int $flags ] )
bool getExternalAttributesName ( string $name , int &$opsys , int &$attr [, int $flags ] )
string getFromIndex ( int $index [, int $length = 0 [, int $flags ]] )
string getFromName ( string $name [, int $length = 0 [, int $flags ]] )
string getNameIndex ( int $index [, int $flags ] )
string getStatusString  void )
resource getStream ( 9string $name )
int locateName ( string $name [, int $flags ] )
mixed open ( string $filename [, int $flags ] )
bool renameIndex ( int $index , string $newname )
bool renameName ( string $name , string $newname )
bool setArchiveComment ( string $comment )
bool setCommentIndex ( int $index , string $comment )
bool setCommentName ( string $name , string $comment )
bool setExternalAttributesIndex ( int $index , int $opsys , int $attr [, int $flags ] )
bool setExternalAttributesName ( string $name , int $opsys , int $attr [, int $flags ] )
public bool setPassword ( string $password )
array statIndex ( int $index [, int $flags ] )
array statName ( string $name [, int $flags ] )
bool unchangeAll ( void )
bool unchangeArchive ( void )
bool unchangeIndex ( int $index )
bool unchangeName ( string $name )
}
?>


