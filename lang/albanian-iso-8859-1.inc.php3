<?php
/* $Id$ */

/**
 * Translated by: Laurent Dhima <laurenti at users.sourceforge.net>
 * Rishikuar nga: Arben �okaj <acokaj at t-online.de>
 */

$charset = 'iso-8859-1';
$text_dir = 'ltr';
$left_font_family = 'verdana, arial, helvetica, geneva, sans-serif';
$right_font_family = 'arial, helvetica, geneva, sans-serif';
$number_thousands_separator = '.';
$number_decimal_separator = ',';
// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
$byteUnits = array('Bytes', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB');

$day_of_week = array('Djl', 'H�n', 'Mar', 'M�r', 'Enj', 'Pre', 'Sht'); //albanian days
$month = array('Jan', 'Shk', 'Mar', 'Pri', 'Maj', 'Qer', 'Kor', 'Gsh', 'Sht', 'Tet', 'N�n', 'Dhj'); //albanian months
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%d %B, %Y at %I:%M %p'; //albanian time
$timespanfmt = '%s dit�, %s or�, %s minuta dhe %s sekonda';


$strAPrimaryKey = 'Nj� ky� primar u shtua tek %s';
$strAbortedClients = 'D�shtoi';
$strAbsolutePathToDocSqlDir = 'Ju lutem, shkruani pozicionin absolut n� webserver p�r tek directory e docSQL';
$strAccessDenied = 'Hyrja nuk u pranua';
$strAction = 'Aksioni';
$strAddDeleteColumn = 'Shto/Fshi fush�n';
$strAddDeleteRow = 'Shto/Fshi kriterin';
$strAddNewField = 'Shto nj� fush� t� re';
$strAddPriv = 'Shto nj� privilegj t� ri';
$strAddPrivilegesOnDb = 'Shto privilegje tek databaz� n� vazhdim';
$strAddPrivilegesOnTbl = 'Shto privilegje tek tabela n� vazhdim';
$strAddPrivMessage = 'Ke shtuar nj� privilegj t� ri.';
$strAddSearchConditions = 'Shto kushte k�rkimi (trupi i specifikimit "where"):';
$strAddToIndex = 'Shto tek treguesi i &nbsp;%s&nbsp;kolon�s(ave)';
$strAddUser = 'Shto nj� p�rdorues t� ri';
$strAddUserMessage = 'Ke shtuar nj� p�rdorues t� ri.';
$strAddedColumnComment = 'Komenti u shtua n� kollon�';
$strAddedColumnRelation = 'Relacioni u shtua p�r kollon�n';
$strAdministration = 'Administrimi';
$strAffectedRows = 'Rreshtat e ndikuar:';
$strAfter = 'Mbas %s';
$strAfterInsertBack = 'Mbrapa';
$strAfterInsertNewInsert = 'Shto nj� record t� ri';
$strAll = 'T� gjith�';
$strAllTableSameWidth = 'vizualizon t� gjitha tabelat me t� nj�jt�n gj�r�si?';
$strAlterOrderBy = 'Transformo tabel�n e renditur sipas';
$strAnIndex = 'Nj� tregues u shtua tek %s';
$strAnalyzeTable = 'Analizo tabel�n';
$strAnd = 'Dhe';
$strAny = '�far�do';
$strAnyColumn = '�far�do kolone';
$strAnyDatabase = '�far�do databaz�';
$strAnyHost = '�far�do host';
$strAnyTable = '�far�do tabel�';
$strAnyUser = '�far�do p�rdorues';
$strAscending = 'Ngjitje';
$strAtBeginningOfTable = 'N� fillim t� tabel�s';
$strAtEndOfTable = 'N� fund t� tabel�s';
$strAttr = 'Pron�si';

$strBack = 'Mbrapa';
$strBeginCut = 'FILLIMI I CUT';
$strBeginRaw = 'FILLIMI I RAW';
$strBinary = 'Binar';
$strBinaryDoNotEdit = 'T� dh�na t� tipit binar - mos modifiko';
$strBookmarkDeleted = 'Bookmark u fshi.';
$strBookmarkLabel = 'Etiket�';
$strBookmarkQuery = 'Query SQL shtuar t� preferuarve';
$strBookmarkThis = 'Shtoja t� preferuarve k�t� query SQL';
$strBookmarkView = 'Vizualizo vet�m';
$strBrowse = 'Shfaq';
$strBzError = 'phpMyAdmin nuk �sht� n� gjendje t� kompresoj� dump-in p�r arsye t� ekstensionit Bz2 t� gabuar n� k�t� version t� php. Ju rekomandojm� patjet�r setimin e <code>$cfg[\'BZipDump\']</code> tek file juaj i konfigurimit t� phpMyAdmin n� <code>FALSE</code>. N�qoft�se d�shironi t� p�rdorni patjet�r specifikat e kompresimit Bz2, duhet t� rifreskoni php n� versionin e fundit. Hidhini nj� sy php bug report %s p�r informacione t� holl�sishme.';
$strBzip = '"kompresuar me bzip2"';

$strCannotLogin = 'E pamundur kryerja e login tek server-i MySQL';
$strCantLoadMySQL = 'nuk arrij t� ngarkoj ekstensionin MySQL,<br />kontrollo konfigurimin e PHP.';
$strCantLoadRecodeIconv = 'I pamundur ngarkimi i ekstensionit iconv apo recode t� nevoitsh�m p�r konvertimin e karaktereve, konfiguroni php p�r t� lejuar p�rdorimin e k�tyre ekstensioneve ose disaktivoni konvertimin e set t� karaktereve n� phpMyAdmin.';
$strCantRenameIdxToPrimary = 'I pamundur riem�rtimi i treguesit n� PRIMAR!';
$strCantUseRecodeIconv = 'I pamundur p�rdorimi i funksioneve iconv apo libiconv apo recode_string p�r shkak se ekstensioni duhet t� ngarkohet. Kontrolloni konfigurimin e php.';
$strCardinality = '';
$strCarriage = 'Kthimi n� fillim: \\r';
$strChange = 'Modifiko';
$strChangeDisplay = 'Zgjidh fush�n q� d�shiron t� shoh�sh';
$strChangePassword = 'Ndrysho password';
$strCharsetOfFile = 'Set karakteresh t� file:';
$strCheckAll = 'Seleksionoi t� gjith�';
$strCheckDbPriv = 'Kontrollo t� drejtat e databaz�';
$strCheckTable = 'Kontrollo tabel�n';
$strChoosePage = 'Ju lutem zgjidhni faqen q� d�shironi t� modifikoni';
$strColComFeat = 'Vizualizimi i komenteve t� kollonave';
$strColumn = 'Kollona';
$strColumnNames = 'Emrat e kollonave';
$strColumnPrivileges = 'Privilegjet relative t� kollonave';
$strCommand = 'Komanda';
$strComments = 'Komente';
$strCompleteInserts = 'T� shtuarat komplet';
$strCompression = 'Kompresim';
$strConfigFileError = 'phpMyAdmin nuk arrin t� lexoj� file e konfigurimit!<br />Kjo mund t� ndodh� kur php gjen nj� parse error n� t� apo kur php nuk arrin ta gjej� k�t� file.<br />Ju lutem ngarkoheni direkt file e konfigurimit duke p�rdorur link-un e m�posht�m dhe lexoni mesazhin(et) e gabimeve php q� merrni. N� shumic�n e rasteve mund t\'ju mungoj� nj� apostrof� apo nj� presje.<br />N�se faqja q� do t\'ju hapet �sht� bosh (e bardh�), at�here gjith�ka �sht� n� rregull.';
$strConfigureTableCoord = 'Ju lutem, konfiguroni koordinatat p�r tabel�n %s';
$strConfirm = 'I sigurt q� d�shiron ta b�sh?';
$strConnections = 'Lidhje';
$strCookiesRequired = 'Nga kjo pik� e tutje, cookies duhet t� jen� t� aktivuara.';
$strCopyTable = 'Kopjo tabel�n tek (databaz�<b>.</b>tabela):';
$strCopyTableOK = 'Tabela %s u kopjua tek %s.';
$strCouldNotKill = 'phpMyAdmin nuk �sht� n� gjendje t� p�rfundoj� thread %s. Ka mund�si t� ket� p�rfunduar m� par�.';
$strCreate = 'Krijo';
$strCreateIndex = 'Krijo nj� tregues tek &nbsp;%s&nbsp;columns';
$strCreateIndexTopic = 'Krijo nj� tregues t� ri';
$strCreateNewDatabase = 'Krijo nj� databaz� t� re';
$strCreateNewTable = 'Krijo nj� tabel� t� re tek databaz� %s';
$strCreatePage = 'Krijo nj� faqe t� re';
$strCreatePdfFeat = 'Krijimi i PDF-ve';
$strCriteria = 'Kriteri';

$strData = 'T� dh�na';
$strDataDict = 'Data Dictionary';
$strDataOnly = 'Vet�m t� dh�na';
$strDatabase = 'Databaz� ';
$strDatabaseHasBeenDropped = 'Databaza %s u eleminua.';
$strDatabaseWildcard = 'Database (wildcards e lejuara):';
$strDatabases = 'databaz�';
$strDatabasesStats = 'Statistikat e databaz�s';
$strDbPrivileges = 'Privilegje specifike t� databaz�s';
$strDefault = 'Paracaktuar';
$strDelete = 'Fshi';
$strDeleteAndFlush = 'Fshi p�rdoruesit dhe pastaj rilexo privilegjet.';
$strDeleteAndFlushDescr = 'Kjo �sht� rruga m� e past�r, por ngarkimi i privilegjeve mund t� zgjas� disa �aste m� shum�.';
$strDeleteFailed = 'Fshirja d�shtoi!';
$strDeleteUserMessage = 'Ke fshir� p�rdoruesin %s.';
$strDeleted = 'rreshti u fshi';
$strDeletedRows = 'rreshtat e fshir�:';
$strDeleting = 'N� fshirje e sip�r t� %s';
$strDescending = 'Zbrit�s';
$strDisabled = 'Disaktivuar';
$strDisplay = 'Vizualizo';
$strDisplayFeat = 'Vizualizo karakteristikat';
$strDisplayOrder = 'M�nyra e vizualizimit:';
$strDisplayPDF = 'Shfaq skem�n e PDF';
$strDoAQuery = 'Zbato "query nga shembull" (karakteri jolly: "%")';
$strDoYouReally = 'Konfermo: ';
$strDocu = 'Dokumentet';
$strDrop = 'Elemino';
$strDropDB = 'Elemino databaz�n %s';
$strDropTable = 'Elemino tabel�n';
$strDropUsersDb = 'Elemino databazat q� kan� em�r t� nj�jt� me p�rdoruesit.';
$strDumpXRows = 'Dump i %s rreshta duke filluar nga rreshti %s.';
$strDumpingData = 'Dump i t� dh�nave p�r tabel�n';
$strDynamic = 'dinamik';

$strEdit = 'Modifiko';
$strEditPDFPages = 'Modifiko Faqe PDF';
$strEditPrivileges = 'Modifiko Privilegjet';
$strEffective = 'Efektiv';
$strEmpty = 'Zbraz';
$strEmptyResultSet = 'MySQL ka kthyer nj� t� p�rbashk�t boshe (p.sh. zero rreshta).';
$strEnabled = 'Aktivuar';
$strEnd = 'Fund';
$strEndCut = 'FUNDI I CUT';
$strEndRaw = 'FUNDI I RAW';
$strEnglishPrivileges = 'Sh�nim: emrat e privilegjeve t� MySQL jan� n� Anglisht';
$strError = 'Gabim';
$strExplain = 'Shpjego SQL';
$strExport = 'Eksporto';
$strExportToXML = 'Eksporto n� formatin XML';
$strExtendedInserts = 'T� shtuara t� zgjeruara';
$strExtra = 'Extra';

$strFailedAttempts = 'P�rpjekje t� d�shtuara';
$strField = 'Fush�';
$strFieldHasBeenDropped = 'Fusha %s u eleminua';
$strFields = 'Fusha';
$strFieldsEmpty = ' Numratori i fushave �sht� bosh! ';
$strFieldsEnclosedBy = 'Fush� e p�rb�r� nga';
$strFieldsEscapedBy = 'Fush� e kufizuar nga';
$strFieldsTerminatedBy = 'Fush� e mbaruar nga';
$strFileCouldNotBeRead = 'File nuk mund t� lexohet';
$strFixed = 'fiks';
$strFlushPrivilegesNote = 'Sh�nim: phpMyAdmin lexon privilegjet e p�rdoruesve direkt nga tabela e privilegjeve t� MySQL. P�rmbajtja e k�saj tabele mund t� ndryshoj� nga privilegjet e p�rdorur nga serveri n�se jan� kryer ndryshime manuale. N� k�t� rast, duhet t� %srifreskoni privilegjet%s para se t� vazhdoni.';
$strFlushTable = 'Rifillo ("FLUSH") tabel�n';
$strFormEmpty = 'Mungon nj� vler� n� form!';
$strFormat = 'Formati';
$strFullText = 'Teksti i plot�';
$strFunction = 'Funksion';

$strGenBy = 'Gjeneruar nga';
$strGenTime = 'Gjeneruar m�';
$strGeneralRelationFeat = 'Karakteristikat e p�rgjithshme t� relacionit';
$strGlobalPrivileges = 'Privilegje globale';
$strGlobalValue = 'Vler� Globale';
$strGo = 'Zbato';
$strGrantOption = 'Grant';
$strGrants = 'Lejo';
$strGzip = '"kompresuar me gzip"';

$strHasBeenAltered = 'u modifikua.';
$strHasBeenCreated = 'u krijua.';
$strHaveToShow = 'Zgjidh t� pakt�n nj� kolon� p�r ta vizualizuar';
$strHome = 'Home';
$strHomepageOfficial = 'Home page zyrtare e phpMyAdmin';
$strHomepageSourceforge = 'Home page e phpMyAdmin tek sourceforge.net';
$strHost = 'Host';
$strHostEmpty = 'Emri i host �sht� bosh!';

$strId = 'ID';
$strIdxFulltext = 'Teksti komplet';
$strIfYouWish = 'P�r t� ngarkuar t� dh�nat vet�m p�r disa kollona t� tabel�s, specifiko list�n e fushave (t� ndara me presje).';
$strIgnore = 'Injoro';
$strIgnoringFile = 'File %s u injorua';
$strImportDocSQL = 'Importo files docSQL';
$strImportFiles = 'Importo files';
$strImportFinished = 'Importimi p�rfundoi';
$strInUse = 'n� p�rdorim';
$strIndex = 'Treguesi';
$strIndexHasBeenDropped = 'Treguesi %s u eleminua';
$strIndexName = 'Emri i treguesit&nbsp;:';
$strIndexType = 'Tipi i treguesit&nbsp;:';
$strIndexes = 'Tregues';
$strInsecureMySQL = 'File i konfigurimit n� p�rdorim p�rmban zgjedhje (root pa asnj� password) q� korrispondojn� me t� drejtat e account MySQL t� paracaktuar. Nj� server MySQL funksionues me k�to zgjedhje �sht� i pambrojtur ndaj sulmeve, dhe ju duhet patjet�r t� korrigjoni k�t� vrim� n� siguri.';
$strInsert = 'Shto';
$strInsertAsNewRow = 'Shto nj� rresht t� ri';
$strInsertNewRow = 'Shto nj� rresht t� ri';
$strInsertTextfiles = 'Shto nj� file teksti n� tabel�';
$strInsertedRows = 'Rreshta t� shtuar:';
$strInstructions = 'Instruksione';
$strInvalidName = '"%s" �sht� nj� fjal� e rezervuar; nuk mund ta p�rdor�sh si em�r p�r databaz�/tabel�/fush�.';

$strJustDelete = 'Vet�m fshi p�rdoruesit nga tabelat e privilegjeve.';
$strJustDeleteDescr = 'P�rdoruesit e &quot;fshir�&quot; do t� ken� akoma mund�si t� futen n� server si zakonisht derisa privilegjet t� ngarkohen p�rs�ri.';

$strKeepPass = 'Mos ndrysho password';
$strKeyname = 'Emri i ky�it';
$strKill = 'Hiq';

$strLaTeX = 'LaTeX';
$strLandscape = 'Horizontale';
$strLength = 'Gjat�sia';
$strLengthSet = 'Gjat�sia/Set*';
$strLimitNumRows = 'record p�r faqe';
$strLineFeed = 'Fundi i rreshtit: \\n';
$strLines = 'Record';
$strLinesTerminatedBy = 'Rreshta q� mbarojn� me';
$strLinkNotFound = 'Link nuk u gjet';
$strLinksTo = 'Lidhje me';
$strLocalhost = 'Lokal';
$strLocationTextfile = 'Pozicioni i file';
$strLoginInformation = 'Informacione mbi Login';
$strLogPassword = 'Password:';
$strLogUsername = 'Emri i p�rdoruesit:';
$strLogin = 'Lidh';
$strLogout = 'Shk�put';

$strMissingBracket = 'Mungojn� thonj�za';
$strModifications = 'Ndryshimet u shp�tuan';
$strModify = 'Modifiko';
$strModifyIndexTopic = 'Modifiko nj� tregues';
$strMoreStatusVars = 'M� shum� t� ndryshueshme t� gjendjes';
$strMoveTable = 'Sposto tabel�n n� (databaz�<b>.</b>tabela):';
$strMoveTableOK = 'Tabela %s u spostua tek %s.';
$strMySQLCharset = 'Set karakteresh MySQL';
$strMySQLReloaded = 'MySQL u rifillua.';
$strMySQLSaid = 'Mesazh nga MySQL: ';
$strMySQLServerProcess = 'MySQL %pma_s1% n� ekzekutim tek %pma_s2% si %pma_s3%';
$strMySQLShowProcess = 'Vizualizo proceset n� ekzekutim';
$strMySQLShowStatus = 'Vizualizo informacionet e runtime t� MySQL';
$strMySQLShowVars = 'Vizualizo t� ndryshueshmet e sistemit t� MySQL';

$strName = 'Emri';
$strNext = 'N� vazhdim';
$strNo = ' Jo ';
$strNoDatabases = 'Asnj� databaz�';
$strNoDescription = 'asnj� P�rshkrim';
$strNoDropDatabases = 'Komandat "DROP DATABASE" jan� disaktivuar.';
$strNoExplain = 'Mos Shpjego SQL';
$strNoFrames = 'phpMyAdmin funksionon m� mir� me browser q� suportojn� frames';
$strNoIndex = 'Asnj� tregues i p�rcaktuar!';
$strNoIndexPartsDefined = 'Asnj� pjes� e treguesit �sht� p�rcaktuar!';
$strNoModification = 'Asnj� ndryshim';
$strNoPassword = 'Asnj� password';
$strNoPhp = 'pa kod PHP';
$strNoPrivileges = 'Asnj� privilegj';
$strNoQuery = 'Asnj� query SQL!';
$strNoRights = 'Nuk ke t� drejta t� mjaftueshme p�r t� kryer k�t� operacion!';
$strNoTablesFound = 'Nuk gjenden tabela n� databaz�.';
$strNoUsersFound = 'Nuk u gjet asnj� p�rdorues.';
$strNoUsersSelected = 'Nuk �sht� seleksionuar asnj� p�rdorues.';
$strNoValidateSQL = 'Mos vleft�so SQL';
$strNone = 'Askush';
$strNotNumber = 'Ky nuk �sht� nj� num�r!';
$strNotOK = 'jo OK';
$strNotSet = '<b>%s</b> tabela nuk u gjet ose nuk �sht� p�rcaktuar tek %s';
$strNotValidNumber = ' nuk �sht� nj� rresht i vlefsh�m!';
$strNull = 'Null';
$strNumSearchResultsInTable = '%s korrispondon(jn�) tek tabela <i>%s</i>';
$strNumSearchResultsTotal = '<b>Gjithsej:</b> <i>%s</i> korrispondues(�)';
$strNumTables = 'Tabela';

$strOK = 'OK';
$strOftenQuotation = 'Zakonisht nga dopjo thonjza. ME D�SHIR� tregon q� vet�m fushat <I>char</I> dhe <I>varchar</I> duhet t� delimitohen nga karakteri i treguar.';
$strOperations = 'Operacione';
$strOptimizeTable = 'Optimizo tabel�n';
$strOptionalControls = 'Me d�shir�. Ky karakter kontrollon si t� shkruash apo lexosh karakteret special�.';
$strOptionally = 'ME D�SHIR�';
$strOptions = 'Mund�si';
$strOr = 'Ose';
$strOverhead = 'Mbi limit';

$strPHP40203 = '�sht� n� p�rdorim PHP 4.2.3, q� p�rmban nj� bug serioz me stringat multi-byte strings (mbstring). Shiko raportin 19404 t� bug PHP. Ky version i PHP nuk rekomandohet p�r tu p�rdorur me phpMyAdmin.';
$strPHPVersion = 'Versioni i PHP';
$strPageNumber = 'Numri i faqes:';
$strPartialText = 'Tekst i pjes�sh�m';
$strPassword = 'Password';
$strPasswordChanged = 'Password p�r p�rdoruesin %s u ndryshua me sukses.';
$strPasswordEmpty = 'Password �sht� bosh!';
$strPasswordNotSame = 'Password nuk korrispondon!';
$strPdfDbSchema = 'Skema e databaz� "%s" - Faqja %s';
$strPdfInvalidPageNum = 'Numri i faqes s� PDF i pap�rcaktuar!';
$strPdfInvalidTblName = 'Tabela "%s" nuk ekziston!';
$strPdfNoTables = 'Asnj� tabel�';
$strPerHour = 'n� or�';
$strPhp = 'Krijo kodin PHP';
$strPmaDocumentation = 'Dokumente t� phpMyAdmin';
$strPmaUriError = 'Direktiva <tt>$cfg[\'PmaAbsoluteUri\']</tt> DUHET t� p�rcaktohet tek file i konfigurimit!';
$strPortrait = 'Vertikal';
$strPos1 = 'Fillim';
$strPrevious = 'Paraardh�si';
$strPrimary = 'Primar';
$strPrimaryKey = 'Ky� primar';
$strPrimaryKeyHasBeenDropped = 'Ky�i primar u eleminua';
$strPrimaryKeyName = 'Emri i ky�it primar duhet t� jet�... PRIMARY!';
$strPrimaryKeyWarning = '("PRIMARY" <b>duhet</b> t� jet� emri i, dhe <b>vet�m i</b>, nj� ky�i primar!)';
$strPrint = 'Printo';
$strPrintView = 'Vizualizo p�r printim';
$strPrivDescAllPrivileges = 'P�rfshin t� gjitha t� drejtat me p�rjashtim t� GRANT.';
$strPrivDescAlter = 'Lejon ndryshimin e struktur�s s� tabelave ekzistuese.';
$strPrivDescCreateDb = 'Lejon krijimin e tabelave t� reja dhe databazave t� reja.';
$strPrivDescCreateTbl = 'Lejon krijimin e tabelave t� reja.';
$strPrivDescCreateTmpTable = 'Lejon krijimin e tabelave t� p�rkoh�shme.';
$strPrivDescDelete = 'Lejon fshirjen e t� dh�nave.';
$strPrivDescDropDb = 'Lejon eleminimin e databazave dhe tabelave.';
$strPrivDescDropTbl = 'Lejon eleminimin e tabelave.';
$strPrivDescExecute = 'Lejon ekzekutimin e procedurave t� regjistruara; Nuk ka efekt n� k�t� version t� MySQL.';
$strPrivDescFile = 'Lejon importimin e t� dh�nave nga dhe eksportimin e t� dh�nave n� files.';
$strPrivDescGrant = 'Lejon t� shtosh p�rdorues dhe privilegje pa ringarkuar tabelat e privilegjeve.';
$strPrivDescIndex = 'Lejon krijimin dhe eleminimin e treguesve.';
$strPrivDescInsert = 'Lejon futjen dhe mbishkrimin e t� dh�nave.';
$strPrivDescLockTables = 'Lejon bllokimin e tabelave p�r thread e momentit.';
$strPrivDescMaxConnections = 'Kufizon numrin e lidhjeve t� reja q� nj� p�rdorues mund t� hap� n� nj� or�.';
$strPrivDescMaxQuestions = 'Kufizon numrin e k�rkesave q� nj� p�rdorues mund ti d�rgoj� server-it n� nj� or�.';
$strPrivDescMaxUpdates = 'Kufizon numrin e komandave q� mund t� ndryshojn� nj� tabel� apo databaz� q� nj� p�rdorues mund t� zbatoj� n� nj� or�.';
$strPrivDescProcess3 = 'Lejon vrasjen e proceseve t� p�rdoruesve t� tjer�.';
$strPrivDescProcess4 = 'Lejon shikimin e queries komplete tek lista e proceseve.';
$strPrivDescReferences = 'Nuk ka asnj� efekt tek ky version i MySQL.';
$strPrivDescReload = 'Lejon ringarkimin e parametrave t� server-it dhe risetimin e cache t� server/ve.';
$strPrivDescReplClient = 'I jep t� drejt�n nj� p�rdoruesi t� pyes� se ku gjenden slaves / masters.';
$strPrivDescReplSlave = 'Nevoitet p�r replikimin e slaves.';
$strPrivDescSelect = 'Lejon leximin e t� dh�nave.';
$strPrivDescShowDb = 'Mund�son hyrjen tek lista komplete e databazave.';
$strPrivDescShutdown = 'Lejon fikjen e server-it.';
$strPrivDescSuper = 'Lejon lidhje t� tjera, edhe po t� jet� arritur numri maksimal i lidhjeve; I nevojsh�m p�r shum� operacione administrimi si p�rcaktimi i t� ndryshueshmeve globale apo fshirja e threads t� p�rdoruesve t� tjer�.';
$strPrivDescUpdate = 'Lejon ndryshimin e t� dh�nave.';
$strPrivDescUsage = 'Asnj� privilegj.';
$strPrivileges = 'Privilegje';
$strPrivilegesReloaded = 'Privilegjet u ringarkuan me sukses.';
$strProcesslist = 'Lista e Proceseve';
$strProperties = 'Pron�si';
$strPutColNames = 'Vendos emrat e kollonave tek rreshti i par�';

$strQBE = 'Query nga shembull';
$strQBEDel = 'Fshi';
$strQBEIns = 'Shto';
$strQueryOnDb = 'SQL-query tek databaz� <b>%s</b>:';
$strQueryStatistics = '<b>Statistikat e Query</b>: Q� nga nisja e tij, server-it i jan� d�rguar %s queries.';
$strQueryType = 'Lloji i query';

$strReType = 'Rifut';
$strReceived = 'Marr�';
$strRecords = 'Record';
$strReferentialIntegrity = 'Kontrollo integritetin e informacioneve:';
$strRelationNotWorking = 'Karakteristikat shtes� jan� disaktivuar p�r sa i takon funksionimit me tabelat e link-uara. P�r t� zbuluar p�rse, klikoni %sk�tu%s.';
$strRelationView = 'Shiko relacionin';
$strRelationalSchema = 'Skema relazionale';
$strReloadFailed = 'Rinisja e MySQL d�shtoi.';
$strReloadMySQL = 'Rinis MySQL';
$strReloadingThePrivileges = 'Duke rilexuar privilegjet';
$strRememberReload = 'Kujtohu t� rinis�sh MySQL.';
$strRemoveSelectedUsers = 'Heq p�rdoruesit e zgjedhur';
$strRenameTable = 'Riem�rto tabel�n n�';
$strRenameTableOK = 'Tabela %s u riem�rtua %s';
$strRepairTable = 'Riparo tabel�n';
$strReplace = 'Z�v�nd�so';
$strReplaceTable = 'Z�v�nd�so t� dh�nat e tabel�s me file';
$strReset = 'Rinis';
$strResourceLimits = 'Limitet e rezervave';
$strRevoke = 'Hiq';
$strRevokeAndDelete = 'Hiqja t� gjitha t� drejtat aktive p�rdoruesve dhe pastaj eleminoi.';
$strRevokeAndDeleteDescr = 'P�rdoruesit DO T� MUND T� P�RDORIN sidoqoft� privilegjin deri at�here kur privilegjet t� ringarkohen.';
$strRevokeGrant = 'Hiq t� drejtat';
$strRevokeGrantMessage = 'Ke hequr privilegjet e t� drejtave p�r %s';
$strRevokeMessage = 'Ke anulluar privilegjet p�r %s';
$strRevokePriv = 'Anullo privilegjet';
$strRowLength = 'Gjat�sia e rreshtit';
$strRowSize = 'Dimensioni i rreshtit';
$strRows = 'rreshta';
$strRowsFrom = 'rreshta duke filluar nga';
$strRowsModeHorizontal = ' horizontal ';
$strRowsModeOptions = ' n� modalitetin %s dhe p�rs�rit headers mbas %s qeli ';
$strRowsModeVertical = ' vertikal ';
$strRowsStatistic = 'Statistikat e rreshtave';
$strRunQuery = 'D�rgo Query';
$strRunSQLQuery = 'Zbato query SQL tek databaz� %s';
$strRunning = 'n� ekzekutim tek %s';

$strSQL = 'SQL';
$strSQLParserBugMessage = 'Ka mund�si q� ka nj� bug tek parser SQL. Ju lutem, kontrolloni query tuaj me kujdes, dhe kontrolloni q� presjet t� jen� ku duhet dhe jo t� gabuara. Nj� shkak tjet�r i mundsh�m i gabimit mund t� jet� q� po mundoheni t� uploadoni nj� file binar jasht� nj� zone teksti t� kufizuar me presje. Mund edhe t� provoni query tuaj MySQL nga interfaqja e shkruar e komandave. Gabimi i m�posht�m i kthyer nga server-i MySQL, n�se ekziston nj� i till�, mund tju ndihmoj� n� diagnostikimin e problemit. N�se ka akoma probleme, apo n.q.s. parser-i SQL i phpMyAdmin gabon kur p�rkundrazi nga interfaqja e komandave t� thjeshta nuk rezultojn� probleme, ju lutem zvog�loni query tuaj SQL n� hyrje n� query e vetme q� shkakton probleme, dhe d�rgoni nj� bug raportim me t� dh�nat rezultuese nga seksioni CUT i m�posht�m:';
$strSQLParserUserError = 'Mesa duket ekziston nj� gabim tek query juaj SQL e futur. Gabimi i server-it MySQL i treguar m� posht�, n�se ekziston, mund t\'ju ndihmoj� n� diagnostikimin e problemit';
$strSQLQuery = 'query SQL';
$strSQLResult = 'Rezultati SQL';
$strSQPBugInvalidIdentifer = 'Identifikues i pavlefsh�m';
$strSQPBugUnclosedQuote = 'Thonj�za t� pambyllura';
$strSQPBugUnknownPunctuation = 'String� Punctuation e panjohur';
$strSave = 'Shp�to';
$strScaleFactorSmall = 'Faktori i shkall�s �sht� shum� i vog�l p�r t� plot�suar skem�n n� faqe';
$strSearch = 'K�rko';
$strSearchFormTitle = 'K�rko n� databaz�';
$strSearchInTables = 'Tek tabela(at):';
$strSearchNeedle = 'Fjala(�) apo vlera(at) p�r t\'u k�rkuar (karakteri Jolly: "%"):';
$strSearchOption1 = 't� pakt�n nj�r�n nga fjal�t';
$strSearchOption2 = 't� gjitha fjal�t';
$strSearchOption3 = 'fraza precize';
$strSearchOption4 = 'si ekspresion i rregullt';
$strSearchResultsFor = 'K�rko rezultatet p�r "<i>%s</i>" %s:';
$strSearchType = 'Gjej:';
$strSelect = 'Seleksiono';
$strSelectADb = 'T� lutem, seleksiono nj� databaz�';
$strSelectAll = 'Seleksiono Gjith�ka';
$strSelectFields = 'Seleksiono fushat (t� pakt�n nj�):';
$strSelectNumRows = 'tek query';
$strSelectTables = 'Seleksiono Tabelat';
$strSend = 'Shp�toje me em�r...';
$strSent = 'D�rguar';
$strServer = 'Server %s';
$strServerChoice = 'Zgjedhja e server';
$strServerStatus = 'Informacione mbi Runtime';
$strServerStatusUptime = 'Ky server server MySQL po punon q� prej %s. U nis m� %s.';
$strServerTabProcesslist = 'Proceset';
$strServerTabVariables = 'T� ndryshueshmet';
$strServerTrafficNotes = '<b>Trafiku i server-it</b>: K�to tabela do t� shfaqin statistikat e trafikut t� rrjetit p�r k�t� server MySQL q� nga momenti i nisjes s� tij.';
$strServerVars = 'T� ndryshueshmet dhe parametrat e Server-it';
$strServerVersion = 'Versioni i MySQL';
$strSessionValue = 'Vlera seanc�s';
$strSetEnumVal = 'N.q.s. fusha �sht� "enum" apo "set", shtoni t� dh�nat duke p�rdorur formatin: \'a\',\'b\',\'c\'...<br />N�se megjithat� do t\'u duhet t� vini backslashes ("\") apo single quote ("\'") para k�tyre vlerave, backslash-ojini (p�r shembull \'\\\\xyz\' o \'a\\\'b\').';
$strShow = 'Shfaq';
$strShowAll = 'Shfaqi t� gjith�';
$strShowColor = 'Shfaq ngjyr�n';
$strShowCols = 'Shfaq kollonat';
$strShowDatadictAs = 'Formati i Data Dictionary';
$strShowGrid = 'Shfaq rrjet�n';
$strShowPHPInfo = 'Trego info mbi PHP';
$strShowTableDimension = 'Trego dimensionin e tabelave';
$strShowTables = 'Shfaq tabelat';
$strShowThisQuery = 'Tregoje p�rs�ri k�t� query';
$strShowingRecords = 'Vizualizimi i record ';
$strSingly = '(nj� nga nj�)';
$strSize = 'Dimensioni';
$strSort = 'rreshtimi';
$strSpaceUsage = 'Hap�sira e p�rdorur';
$strSplitWordsWithSpace = 'Fjal�t jan� t� ndara nga nj� hapsir� (" ").';
$strStatement = 'Instruksione';
$strStatus = 'Gjendja';
$strStrucCSV = 't� dh�na CSV';
$strStrucData = 'Struktura dhe t� dh�na';
$strStrucDrop = 'Shto \'drop table\'';
$strStrucExcelCSV = 'CSV p�r t� dh�na Ms Excel';
$strStrucOnly = 'Vet�m struktura';
$strStructPropose = 'Propozo struktur�n e tabel�s';
$strStructure = 'Struktura';
$strSubmit = 'D�rgoje';
$strSuccess = 'Query u zbatua me sukses';
$strSum = 'Gjithsej';

$strTable = 'Tabela';
$strTableComments = 'Komente mbi tabel�n';
$strTableEmpty = 'Emri i tabel�s �sht� bosh!';
$strTableHasBeenDropped = 'Tabela %s u eleminua';
$strTableHasBeenEmptied = 'Tabela %s u zbraz';
$strTableHasBeenFlushed = 'Tabela %s u rifreskua';
$strTableMaintenance = 'Administrimi i tabel�s';
$strTableOfContents = 'Tabela e p�rmbajtjes';
$strTableStructure = 'Struktura e tabel�s';
$strTableType = 'Tipi i tabel�s';
$strTables = '%s tabela(at)';
$strTblPrivileges = 'T� drejta relative me tabelat';
$strTextAreaLength = ' P�r shkak t� gjat�sis� saj,<br /> kjo fush� nuk mund t� modifikohet ';
$strTheContent = 'P�rmbajtja e file u shtua.';
$strTheContents = 'P�rmbajtja e file z�v�nd�son rreshtat e tabel�s me t� nj�jtin ky� primar apo ky� t� vet�m.';
$strTheTerminator = 'Karakteri p�rfundues i fushave.';
$strThisHost = 'K�t� Host';
$strThisNotDirectory = 'Kjo nuk �sht� nj� directory';
$strThreadSuccessfullyKilled = 'Thread %s u p�rfundua me sukses.';
$strTime = 'Koh�';
$strTotal = 'Gjithsej';
$strTotalUC = 'Gjithsej';
$strTraffic = 'Trafiku';
$strType = 'Tipi';

$strUncheckAll = 'Deseleksionoi t� gjith�';
$strUnique = 'I vet�m';
$strUnselectAll = 'Deseleksiono gjith�ka';
$strUpdatePrivMessage = 'Ke rifreskuar lejet p�r %s.';
$strUpdateProfile = 'Rifresko profilin:';
$strUpdateProfileMessage = 'Profili u rifreskua.';
$strUpdateQuery = 'Rifresko Query';
$strUsage = 'P�rdorimi';
$strUseBackquotes = 'P�rdor backquotes me emrat e tabelave dhe fushave';
$strUseTables = 'P�rdor tabelat';
$strUser = 'P�rdorues';
$strUserAlreadyExists = 'P�rdoruesi %s ekziston!';
$strUserEmpty = 'Emri i p�rdoruesit �sht� bosh!';
$strUserName = 'Emri i p�rdoruesit';
$strUserNotFound = 'P�rdoruesi i seleksionuar nuk u gjet tek tabela e privilegjeve.';
$strUserOverview = 'Pamja e p�rgjithshme e p�rdoruesit';
$strUsers = 'P�rdorues';
$strUsersDeleted = 'P�rdoruesit e zgjedhur u hoq�n me sukses.';
$strUseTextField = 'P�rdor fush� teksti';

$strValidateSQL = 'Vleft�so SQL';
$strValidatorError = 'Miratuesi SQL nuk arrin t� niset. Ju lutem kontrolloni instalimin e ekstensioneve t� duhura php ashtu si p�rshkruhet tek %sdokumentimi%s.';
$strValue = 'Vler�';
$strVar = 'E ndryshueshme';
$strViewDump = 'Vizualizo dump (skema) e tabel�s';
$strViewDumpDB = 'Vizualizo dump (skema) e databaz�';

$strWebServerUploadDirectory = 'directory e upload t� server-it web';
$strWebServerUploadDirectoryError = 'Directory q� keni zgjedhur p�r upload nuk arrin t� gjehet';
$strWelcome = 'Mir�sevini tek %s';
$strWithChecked = 'N.q.s. t� seleksionuar:';
$strWritingCommentNotPossible = 'I pamundur shkrimi i komentit';
$strWritingRelationNotPossible = 'I pamundur shkrimi i Relacionit';
$strWrongUser = 'Emri i p�rdoruesit apo password i gabuar. Ndalohet hyrja.';

$strYes = ' Po ';

$strZeroRemovesTheLimit = 'Sh�nim: Vendosja e k�tyre opcioneve n� 0 (zero) sinjifikon asnj� limit.';
$strZip = '"kompresuar me zip"';

// To translate

$strDBGModule = 'Module';  //to translate
$strDBGLine = 'Line';  //to translate
$strDBGHits = 'Hits';  //to translate
$strDBGTimePerHitMs = 'Time/Hit, ms';  //to translate
$strDBGTotalTimeMs = 'Total time, ms';  //to translate
$strDBGMinTimeMs = 'Min time, ms';  //to translate
$strDBGMaxTimeMs = 'Max time, ms';  //to translate
$strDBGContextID = 'Context ID';  //to translate
$strDBGContext = 'Context';  //to translate
$strCantLoad = 'cannot load %s extension,<br />please check PHP Configuration';  //to translate
$strDefaultValueHelp = 'For default values, please enter just a single value, without backslash escaping or quotes, using this format: a';  //to translate
$strCheckPrivs = 'Check Privileges';  //to translate
$strCheckPrivsLong = 'Check privileges for database &quot;%s&quot;.';  //to translate
$strDatabasesStatsHeavyTraffic = 'Note: Enabling the Database statistics here might cause heavy traffic between the webserver and the MySQL one.';  //to translate
$strDatabasesStatsDisable = 'Disable Statistics';  //to translate
$strDatabasesStatsEnable = 'Enable Statistics';  //to translate
$strJumpToDB = 'Jump to database &quot;%s&quot;.';  //to translate
$strDropSelectedDatabases = 'Drop Selected Databases';  //to translate
$strNoDatabasesSelected = 'No databases selected.';  //to translate
$strDatabasesDropped = '%s databases have been dropped successfully.';  //to translate
$strGlobal = 'global';  //to translate
$strDbSpecific = 'database-specific';  //to translate
$strUsersHavingAccessToDb = 'Users having access to &quot;%s&quot;';  //to translate
$strChangeCopyUser = 'Change Login Information / Copy User';  //to translate
$strChangeCopyMode = 'Create a new user with the same privileges and ...';  //to translate
$strChangeCopyModeCopy = '... keep the old one.';  //to translate
$strChangeCopyModeJustDelete = ' ... delete the old one from the user tables.';  //to translate
$strChangeCopyModeRevoke = ' ... revoke all active privileges from the old one and delete it afterwards.';  //to translate
$strChangeCopyModeDeleteAndReload = ' ... delete the old one from the user tables and reload the privileges afterwards.';  //to translate
$strWildcard = 'wildcard';  //to translate
$strRowsModeFlippedHorizontal = 'horizontal (rotated headers)';//to translate
$strQueryTime = 'Query took %01.4f sec';//to translate
$strDumpComments = 'Include column comments as inline SQL-comments';//to translate
$strDBComment = 'Database comment: ';//to translate
$strQueryFrame = 'Query window';//to translate
$strQueryFrameDebug = 'Debugging information';//to translate
$strQueryFrameDebugBox = 'Active variables for the query form:\nDB: %s\nTable: %s\nServer: %s\n\nCurrent variables for the query form:\nDB: %s\nTable: %s\nServer: %s\n\nOpener location: %s\nFrameset location: %s.';//to translate
$strQuerySQLHistory = 'SQL-history';//to translate
$strMIME_MIMEtype = 'MIME-type';//to translate
$strMIME_transformation = 'Browser transformation';//to translate
$strMIME_transformation_options = 'Transformation options';//to translate
$strMIME_transformation_options_note = 'Please enter the values for transformation options using this format: \'a\',\'b\',\'c\'...<br />If you ever need to put a backslash ("\") or a single quote ("\'") amongst those values, backslashes it (for example \'\\\\xyz\' or \'a\\\'b\').';//to translate
$strMIME_transformation_note = 'For a list of available transformation options and their MIME-type transformations, click on %stransformation descriptions%s';//to translate
$strMIME_available_mime = 'Available MIME-types';//to translate
$strMIME_available_transform = 'Available transformations';//to translate
$strMIME_without = 'MIME-types printed in italics do not have a seperate transformation function';//to translate
$strMIME_description = 'Description';//to translate
$strMIME_nodescription = 'No Description is available for this transformation.<br />Please ask the author, what %s does.';//to translate
$strMIME_file = 'Filename';//to translate
$strTransformation_image_jpeg__plain = 'Takes an imagefile and outputs a link for it. First options argument is a possible prepended string like http://...';//to translate
$strTransformation_text_plain__formatted = 'Preserves original formatting of the field. No Escaping is done.';//to translate
$strTransformation_text_plain__unformatted = 'Displays HTML code as HTML entities. No HTML formatting is shown.';//to translate
$strTransformation_image_jpeg__link = 'Displays a link to this image (direct blob download, i.e.).';//to translate
$strTransformation_image_jpeg__inline = 'Displays an image directly in the table (uses wrapper, direct blob download, i.e.).';//to translate
$strInnodbStat = 'InnoDB Status';  //to translate
$updComTab = 'Please see Documentation on how to update your Column_comments Table';  //to translate
?>
