<?php
/* $Id$ */

/**
 * Updated by "CaliMonk" <calimonk at gmx.net> on 2002/11/07.
 */

$charset = 'utf-8';
$allow_recoding = TRUE;
$text_dir = 'ltr';
$left_font_family = 'verdana, arial, helvetica, geneva, sans-serif';
$right_font_family = 'arial, helvetica, geneva, sans-serif';
$number_thousands_separator = '.';
$number_decimal_separator = ',';
// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
$byteUnits = array('Bytes', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB');

$day_of_week = array('Zo', 'Ma', 'Di', 'Wo', 'Do', 'Vr', 'Za');
$month = array('Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%d %B %Y om %H:%M';
$timespanfmt = '%s dagen, %s uren, %s minuten and %s seconden';

$strAPrimaryKey = 'Een primaire sleutel is toegevoegd aan %s';
$strAbortedClients = 'Afgehaakte';
$strAbsolutePathToDocSqlDir = 'Geef een absoluut pad op de webserver aan naar de docSQL directory';
$strAccessDenied = 'Toegang geweigerd ';
$strAction = 'Actie';
$strAddDeleteColumn = 'Toevoegen/Verwijderen Veld Kolommen';
$strAddDeleteRow = 'Toevoegen/Verwijderen Criteria Rij';
$strAddNewField = 'Nieuw veld toevoegen';
$strAddPriv = 'Voeg nieuwe rechten toe';
$strAddPrivMessage = 'U heeft nieuwe rechten toegevoegd.';
$strAddPrivilegesOnDb = 'Voeg privileges toe aan de volgende database';
$strAddPrivilegesOnTbl = 'Voeg privileges toe aan de volgende tabel';
$strAddSearchConditions = 'Zoek condities toevoegen (het "where" gedeelte van de query):';
$strAddToIndex = 'Voeg &nbsp;%s&nbsp; kolom(men) toe aan index';
$strAddUser = 'Voeg een nieuwe gebruiker toe';
$strAddUserMessage = 'U heeft een nieuwe gebruiker toegevoegd.';
$strAddedColumnComment = 'Voeg commentaar toe aan de kolom';
$strAddedColumnRelation = 'Voeg een relatie toe aan de kolom';
$strAdministration = 'Administratie';
$strAffectedRows = 'Getroffen rijen:';
$strAfter = 'Na %s';
$strAfterInsertBack = 'Terug';
$strAfterInsertNewInsert = 'Voeg een nieuw record toe';
$strAll = 'Alle';
$strAllTableSameWidth = 'Alle tabellen weergeven met dezelfde breedte?';
$strAlterOrderBy = 'Wijzig het \"Sorteren op/Order by\" van de tabel';
$strAnIndex = 'Een index is toegevoegd aan %s';
$strAnalyzeTable = 'Analyseer tabel';
$strAnd = 'En';
$strAny = 'Elke'; //! Willekeurige?
$strAnyColumn = 'Een willekeurige kolom';
$strAnyDatabase = 'Een willekeurige database';
$strAnyHost = 'Een willekeurige host';
$strAnyTable = 'Een willekeurige tabel';
$strAnyUser = 'Een willekeurige gebruiker';
$strAscending = 'Oplopend';
$strAtBeginningOfTable = 'Aan het begin van de tabel';
$strAtEndOfTable = 'Aan het eind van de tabel';
$strAttr = 'Attributen';

$strBack = 'Terug';
$strBeginCut = 'Begin KNIP';
$strBeginRaw = 'Begin RAW';
$strBinary = ' Binair ';
$strBinaryDoNotEdit = ' Binair - niet aanpassen ';
$strBookmarkDeleted = 'De boekenlegger (Bookmark) is verwijderd.';
$strBookmarkLabel = 'Label';
$strBookmarkQuery = 'Opgeslagen SQL-query';
$strBookmarkThis = 'Sla deze SQL-query op';
$strBookmarkView = 'Alleen bekijken';
$strBrowse = 'Verkennen';
$strBzError = 'phpMyAdmin is er niet in geslaagd om de dump te comprimeren doordat de Bz2 extensie in deze php versie niet functioneert. Het wordt sterk aangeraden om de instelling <code>$cfg[\'BZipDump\']</code> in uw phpMyAdmin configuratie bestand op <code>FALSE</code> te zetten. Als u Bz2 compressie wilt gebruiken zult u moeten upgraden naar een latere php versie. Zie php bug report %s voor meer informatie.';
$strBzip = '"ge-bzipt"';

$strCannotLogin = 'Kan niet inloggen op de MySQL server';
$strCantLoad = 'Kan de %s extentie niet laden,<br />Controleer de PHP Configuratie';
$strCantLoadMySQL = 'kan de MySQL extensie niet laden,<br />controleer de PHP configuratie.';
$strCantLoadRecodeIconv = 'Kan iconv of recode extenties niet laden die nodig zijn voor de Karakterset conversie, configureer php om deze extensies toe te laten of schakel Karakterset conversie uit in phpMyAdmin';
$strCantRenameIdxToPrimary = 'Kan index niet naar PRIMARY hernoemen';
$strCantUseRecodeIconv = 'Kan iconv, libiconv en recode_string functies niet gebruiken zolang de extensies geladen moeten worden. Controleer de php configuratie.';
$strCardinality = 'Kardinaliteit';
$strCarriage = 'Harde return: \\r';
$strChange = 'Veranderen';
$strChangeDisplay = 'Kies weer te geven veld';
$strChangePassword = 'Wijzig paswoord';
$strCharsetOfFile = 'Karakter set van het bestand:';
$strCheckAll = 'Selecteer alles';
$strCheckDbPriv = 'Controleer database rechten';
$strCheckTable = 'Controleer tabel';
$strChoosePage = 'Kies een pagina om aan te passen';
$strColComFeat = 'Toon kolom commentaar';
$strColumn = 'Kolom';
$strColumnNames = 'Kolom namen';
$strColumnPrivileges = 'Kolom-specifieke privileges';
$strCommand = 'Commando';
$strComments = 'Commentaar';
$strCompleteInserts = 'Invoegen voltooid';
$strCompression = 'Compressie';
$strConfigFileError = 'phpMyAdmin kon het configuratie bestand niet lezen! <br />Dit kan gebeuren als php een parse error in dit bestand aantreft of dit bestand helemaal niet gevonden kan worden.<br />Roep het configuratie bestand direct aan met de snelkoppeling hieronder en lees de php foutmelding(en). In de meeste gevallen ontbreekt er ergens bijvoorbeeld een quote.<br /> Wanneer er een blanco pagina wordt weergegeven zijn er geen problemen.';
$strConfigureTableCoord = 'Configureer de coördinaten voor de tabel %s';
$strConfirm = 'Weet u zeker dat u dit wilt?';
$strConnections = 'Connecties';
$strCookiesRequired = 'Cookies moeten aan staan voorbij dit punt.';
$strCopyTable = 'Kopieer tabel naar (database<b>.</b>tabel):';
$strCopyTableOK = 'Tabel %s is gekopieerd naar %s.';
$strCouldNotKill = 'phpMyAdmin is er niet in geslaagd om de %s te sluiten.Waarschijnlijk is het al gesloten.';
$strCreate = 'Aanmaken';
$strCreateIndex = 'Creëer een index op kolommen&nbsp;%s&nbsp;';
$strCreateIndexTopic = 'Creëer een nieuwe index';
$strCreateNewDatabase = 'Nieuwe database aanmaken';
$strCreateNewTable = 'Nieuwe tabel aanmaken in database %s';
$strCreatePage = 'Creëer een nieuwe pagina';
$strCreatePdfFeat = 'Aanmaken van PDF bestanden';
$strCriteria = 'Criteria';

$strDBGContext = 'Context';
$strDBGContextID = 'Context ID';
$strDBGHits = 'Hits';
$strDBGLine = 'Regel';
$strDBGMaxTimeMs = 'Max tijd, ms';
$strDBGMinTimeMs = 'Min tijd, ms';
$strDBGModule = 'Module';
$strDBGTimePerHitMs = 'Tijd/Hit, ms';
$strDBGTotalTimeMs = 'Totaal tijd, ms';
$strData = 'Data';
$strDataDict = 'Data Woordenboek';
$strDataOnly = 'Alleen data';
$strDatabase = 'Database ';
$strDatabaseHasBeenDropped = 'Database %s is vervallen.';
$strDatabaseWildcard = 'Database (wildcards toegestaan):';
$strDatabases = 'databases';
$strDatabasesStats = 'Database statistieken';
$strDbPrivileges = 'Database-specifieke privileges';
$strDefault = 'Standaardwaarde';
$strDelete = 'Verwijderen';
$strDeleteAndFlush = 'Verwijder de gebruikers en vernieuw de privileges daarna.';
$strDeleteAndFlushDescr = 'Dit is de nette manier, maar het vernieuwen van de privileges kan even duren.';
$strDeleteFailed = 'Verwijderen mislukt!';
$strDeleteUserMessage = 'U heeft de gebruiker %s verwijderd.';
$strDeleted = 'De rij is verwijderd';
$strDeletedRows = 'Verwijder rijen:';
$strDeleting = 'Verwijderen van %s';
$strDescending = 'Aflopend';
$strDisabled = 'Uitgeschakeld';
$strDisplay = 'Laat zien';
$strDisplayFeat = 'Toon Opties';
$strDisplayOrder = 'Weergave volgorde:';
$strDisplayPDF = 'Geef het PDF schema weer';
$strDoAQuery = 'Voer een query op basis van een vergelijking uit (wildcard: "%")';
$strDoYouReally = 'Weet u zeker dat u dit wilt ';
$strDocu = 'Documentatie';
$strDrop = 'Verwijderen';
$strDropDB = 'Verwijder database %s';
$strDropTable = 'Verwijder tabel';
$strDropUsersDb = 'Verwijder de databasen die dezelfde naam hebben als de gebruikers.';
$strDumpXRows = '%s rijen aan het dumpen, start bij rij %s.';
$strDumpingData = 'Gegevens worden uitgevoerd voor tabel';
$strDynamic = 'dynamisch';

$strEdit = 'Wijzigen';
$strEditPDFPages = 'PDF Pagina\'s aanpassen';
$strEditPrivileges = 'Wijzig rechten';
$strEffective = 'Effectief';
$strEmpty = 'Legen';
$strEmptyResultSet = 'MySQL gaf een lege resultaat set terug (0 rijen).';
$strEnabled = 'Ingeschakeld';
$strEnd = 'Einde';
$strEndCut = 'Einde KNIP';
$strEndRaw = 'Einde RAW';
$strEnglishPrivileges = ' Aantekening: de namen van de MySQL rechten zijn uitgelegd in het Engels ';
$strError = 'Fout';
$strExplain = 'Verklaar SQL';
$strExport = 'Exporteer';
$strExportToXML = 'Exporteer naar XML formaat';
$strExtendedInserts = 'Uitgebreide invoegingen';
$strExtra = 'Extra';

$strFailedAttempts = 'Mislukte pogingen';
$strField = 'Veld';
$strFieldHasBeenDropped = 'Veld %s is vervallen';
$strFields = 'Velden';
$strFieldsEmpty = ' Het velden aantal is leeg! ';
$strFieldsEnclosedBy = 'Velden ingesloten door';
$strFieldsEscapedBy = 'Velden ontsnapt door';
$strFieldsTerminatedBy = 'Velden beëindigd door';
$strFileCouldNotBeRead = 'Bestand kon niet worden gelezen';
$strFixed = 'vast';
$strFlushPrivilegesNote = 'Opmerking: phpMyAdmin krijgt de rechten voor de gebruikers uit de MySQL privileges tabel. De content van deze tabel kan verschillen met de rechten van de server als er handmatig aanpassingen zijn aangebracht. Mocht dit het geval zijn dan moet men %sde privilege table vernieuwen%s voordat men verder gaat.';
$strFlushTable = 'Schoon de tabel ("FLUSH")';
$strFormEmpty = 'Er ontbreekt een waarde in het formulier!';
$strFormat = 'Formatteren';
$strFullText = 'Volledige teksten';
$strFunction = 'Functie';

$strGenBy = 'Gegenereerd door';
$strGenTime = 'Generatie Tijd';
$strGeneralRelationFeat = 'Basis relatie opties';
$strGlobalPrivileges = 'Globale privileges';
$strGlobalValue = 'Globale waarde';
$strGo = 'Start';
$strGrantOption = 'Toekennen';
$strGrants = 'Toekennen';
$strGzip = '"ge-gzipt"';

$strHasBeenAltered = 'is veranderd.';
$strHasBeenCreated = 'is aangemaakt.';
$strHaveToShow = 'Er moet ten minste 1 weer te geven kolom worden gekozen';
$strHome = 'Home';
$strHomepageOfficial = 'Officiële phpMyAdmin Website';
$strHomepageSourceforge = 'Sourceforge phpMyAdmin Download Pagina';
$strHost = 'Host';
$strHostEmpty = 'De hostnaam is leeg!';

$strId = 'ID';
$strIdxFulltext = 'Volledige tekst';
$strIfYouWish = 'Indien u slechts enkele van de tabelkolommen wilt laden, voer dan een door komma\'s gescheiden veldlijst in.';
$strIgnore = 'Negeer';
$strIgnoringFile = 'Negeer bestand %s';
$strImportDocSQL = 'Importeer docSQL Bestanden';
$strImportFiles = 'Importeren bestanden';
$strImportFinished = 'Importeren voltooid';
$strInUse = 'in gebruik';
$strIndex = 'Index';
$strIndexHasBeenDropped = 'Index %s is vervallen';
$strIndexName = 'Index naam&nbsp;:';
$strIndexType = 'Index type&nbsp;:';
$strIndexes = 'Indices';
$strInsecureMySQL = 'Uw configuratie bestand bevat instellingen (root zonder wachtwoord) die betrekking hebben tot de standaard MySQL account. Uw MySQL server draait met deze standaard waardes, en is open voor ongewilde toegang, het wordt dus aangeraden dit op te lossen.';
$strInsert = 'Invoegen';
$strInsertAsNewRow = 'Voeg toe als nieuwe rij';
$strInsertNewRow = 'Nieuwe rij invoegen';
$strInsertTextfiles = 'Invoegen tekstbestanden in tabel';
$strInsertedRows = 'Ingevoegde rijen:';
$strInstructions = 'Instructies';
$strInvalidName = '"%s" is een gereserveerd woord, u kunt het niet gebruiken voor een database/tabel/veld naam.';

$strJustDelete = 'Verwijder gewoon de gebruikers van de privileges tabel.';
$strJustDeleteDescr = 'De &quot;verwijderde&quot; gebruikers zullen de server kunnen gebruiken zoals altijd zolang de privileges nog niet zijn vernieuwd.';

$strKeepPass = 'Wijzig het wachtwoord niet';
$strKeyname = 'Sleutelnaam';
$strKill = 'stop proces';

$strLaTeX = 'LaTeX';
$strLandscape = 'Landschap';
$strLength = 'Lengte';
$strLengthSet = 'Lengte/Waardes*';
$strLimitNumRows = 'records per pagina';
$strLineFeed = 'Regelopschuiving: \\n';
$strLines = 'Regels';
$strLinesTerminatedBy = 'Regels beëindigd door';
$strLinkNotFound = 'Link niet gevonden';
$strLinksTo = 'Gelinked naar';
$strLocalhost = 'Local';
$strLocationTextfile = 'Locatie van het tekstbestand';
$strLogPassword = 'Wachtwoord:';
$strLogUsername = 'Gebruikers naam:';
$strLogin = 'Inloggen';
$strLoginInformation = 'Login Informatie';
$strLogout = 'Uitloggen';

$strMissingBracket = 'Er ontbreekt een bracket';
$strModifications = 'Wijzigingen opgeslagen.';
$strModify = 'Aanpassen';
$strModifyIndexTopic = 'Wijzig een index';
$strMoreStatusVars = 'Meer status variabelen';
$strMoveTable = 'Verplaats tabel naar (database<b>.</b>tabel):';
$strMoveTableOK = 'Tabel %s is verplaatst naar %s.';
$strMySQLCharset = 'MySQL Karakterset';
$strMySQLReloaded = 'MySQL opnieuw geladen.';
$strMySQLSaid = 'MySQL retourneerde: ';
$strMySQLServerProcess = 'MySQL %pma_s1% draait op %pma_s2% als %pma_s3%';
$strMySQLShowProcess = 'Laat processen zien';
$strMySQLShowStatus = 'MySQL runtime informatie';
$strMySQLShowVars = 'MySQL systeemvariabelen';

$strName = 'Naam';
$strNext = 'Volgende';
$strNo = 'Nee';
$strNoDatabases = 'Geen databases';
$strNoDescription = 'Geen beschrijving aanwezig';
$strNoDropDatabases = '"DROP DATABASE" opdrachten zijn niet mogelijk.';
$strNoExplain = 'Uitleg SQL overslaan';
$strNoFrames = 'phpMyAdmin is werkt gebruiksvriendelijker met een browser die <b>frames</b> aan kan.';
$strNoIndex = 'Geen index gedefinieerd!';
$strNoIndexPartsDefined = 'Geen index delen gedefinieerd!';
$strNoModification = 'Geen verandering';
$strNoPassword = 'Geen wachtwoord';
$strNoPhp = 'zonder PHP Code';
$strNoPrivileges = 'Geen rechten';
$strNoQuery = 'Geen SQL query!';
$strNoRights = 'U heeft niet genoeg rechten om hier te zijn!';
$strNoTablesFound = 'Geen tabellen gevonden in de database.';
$strNoUsersFound = 'Geen gebruiker(s) gevonden.';
$strNoUsersSelected = 'Geen gebruikers geselecteerd';
$strNoValidateSQL = 'SQL validatie overslaan';
$strNone = 'Geen';
$strNotNumber = 'Dit is geen cijfer!';
$strNotOK = 'Niet Goed';
$strNotSet = '<b>%s</b> tabel niet gevonden of niet ingesteld in %s';
$strNotValidNumber = ' geen geldig rijnummer!';
$strNull = 'Null';
$strNumSearchResultsInTable = '%s overeenkomst(en) in de tabel<i>%s</i>';
$strNumSearchResultsTotal = '<b>Totaal:</b> <i>%s</i> overeenkomst(en)';
$strNumTables = 'Tabellen';

$strOK = 'Correct';
$strOftenQuotation = 'Meestal aanhalingstekens. OPTIONEEL betekent dat alleen char en varchar velden omsloten worden met het "omsloten met"-karakter.';
$strOperations = 'Handelingen';
$strOptimizeTable = 'Optimaliseer tabel';
$strOptionalControls = 'Optioneel. Geeft aan hoe speciale karakters geschreven of gelezen moeten worden.'; // 'Optional. Controls how to write or read special characters.';
$strOptionally = 'OPTIONEEL';
$strOptions = 'Opties';
$strOr = 'Of';
$strOverhead = 'Overhead';

$strPHP40203 = 'U gebruikt PHP 4.2.3, deze versie bevat een grote fout in de multi-byte strings (mbstring). Voor meer informatie zie PHP bug report 19404. Het wordt sterk afgeraden deze versie van PHP te gebruiken met phpMyAdmin.';
$strPHPVersion = 'PHP Versie';
$strPageNumber = 'Pagina nummer:';
$strPartialText = 'Gedeeltelijke teksten';
$strPassword = 'Wachtwoord';
$strPasswordChanged = 'Het wachtwoord voor %s is met success veranderd.';
$strPasswordEmpty = 'Het wachtwoord is leeg!';
$strPasswordNotSame = 'De wachtwoorden zijn niet gelijk!';
$strPdfDbSchema = 'Schema van de "%s" database - Pagina %s';
$strPdfInvalidPageNum = 'Ongedefinieerd PDF pagina nummer!';
$strPdfInvalidTblName = 'De tabel "%s" bestaat niet!';
$strPdfNoTables = 'Geen Tabellen';
$strPerHour = 'per uur';
$strPhp = 'Creëer PHP Code';
$strPmaDocumentation = 'phpMyAdmin Documentatie';
$strPmaUriError = 'De <tt>$cfg[\'PmaAbsoluteUri\']</tt> richtlijn MOET gezet zijn in het configuratie bestand!';
$strPortrait = 'Portret';
$strPos1 = 'Begin';
$strPrevious = 'Vorige';
$strPrimary = 'Primaire sleutel';
$strPrimaryKey = 'Primaire sleutel';
$strPrimaryKeyHasBeenDropped = 'De primaire sleutel is vervallen';
$strPrimaryKeyName = 'De naam van de primaire sleutel moet PRIMARY zijn!';
$strPrimaryKeyWarning = '("PRIMARY" <b>moet</b> de naam van en <b>alleen van</b> een primaire sleutel zijn!)';
$strPrint = 'Afdrukken';
$strPrintView = 'Printopmaak';
$strPrivDescAllPrivileges = 'Bevat alle privileges behalve GRANT.';
$strPrivDescAlter = 'Maakt het mogelijk de structuur van bestaande tabellen aan te passen.';
$strPrivDescCreateDb = 'Maakt het mogelijk om nieuwe databases en tabellen te maken.';
$strPrivDescCreateTbl = 'Maakt het mogelijk nieuwe tabellen te maken.';
$strPrivDescCreateTmpTable = 'Maakt het mogelijk om tijdelijke tabellen te maken.';
$strPrivDescDelete = 'Maakt het mogelijk om data te verwijderen.';
$strPrivDescDropDb = 'Maakt het mogelijk om databases en tabellen te verwijderen.';
$strPrivDescDropTbl = 'Maakt het mogelijk tabellen te verwijderen.';
$strPrivDescExecute = 'Maakt het mogelijk om opgeslagen procedures uit te voeren; Heeft geen effect in deze MySQL versie.';
$strPrivDescFile = 'Maakt het mogelijk om data te importeren en te exporteren van en naar bestanden.';
$strPrivDescGrant = 'Maakt het mogelijk dat gebruikers en privileges toe te voegen zonder de privileges tabel opnieuw op te vragen.';
$strPrivDescIndex = 'Maakt het mogelijk om indexen te creeeren en te verwijderen.';
$strPrivDescInsert = 'Maakt het mogelijk om data in te voegen en te vervangen.';
$strPrivDescLockTables = 'Maakt het mogelijk tabellen op slot te zetten voor de huidige thread.';
$strPrivDescMaxConnections = 'Limits the number of new connections the user may open per hour.';
$strPrivDescMaxQuestions = 'Limits the number of queries the user may send to the server per hour.';
$strPrivDescMaxUpdates = 'Limits the number of commands that change any table or database the user may execute per hour.';
$strPrivDescProcess3 = 'Maakt het mogelijk processen te stoppen voor andere gebruikers.';
$strPrivDescProcess4 = 'Maakt het mogelijk om complete queries in de process lijst te zien.';
$strPrivDescReferences = 'Heeft geen effect in deze MySQL versie.';
$strPrivDescReload = 'Maakt het mogelijk om de server instellingen opnieuw op te vragen en de cache van de server leeg te maken.';
$strPrivDescReplClient = 'Geeft het recht aan de gebruiker om te vragen waar de slaves (slaven) / masters (meesters) zijn.';
$strPrivDescReplSlave = 'Nodig om slaven de repliceren.';
$strPrivDescSelect = 'Maakt het lezen van data mogelijk.';
$strPrivDescShowDb = 'Geeft toegang tot de complete lijst van databases.';
$strPrivDescShutdown = 'Maakt het mogelijk de server te stoppen.';
$strPrivDescSuper = 'Maakt het mogelijk verbinding te maken, zelfs als het maximaal aantal verbindingen als is bereikt; Dit is vereist voor de meeste administratieve opties zoals het instellen van globale variabelen of het stoppen van threads van andere gebruikers.';
$strPrivDescUpdate = 'Maakt het mogelijk data aan te passen.';
$strPrivDescUsage = 'Geen privileges.';
$strPrivileges = 'Rechten';
$strPrivilegesReloaded = 'De privileges zijn met success vernieuwd';
$strProcesslist = 'Process lijst';
$strProperties = 'Eigenschappen';
$strPutColNames = 'Plaats veldnamen in de eerste rij';

$strQBE = 'Query opbouwen';
$strQBEDel = 'Verwijder';
$strQBEIns = 'Toevoegen';
$strQueryOnDb = 'SQL-query op database <b>%s</b>:';
$strQueryStatistics = '<b>Query statistieken</b>: Sinds het opstarten zijn er, %s queries gestuurd naar de server.';
$strQueryType = 'Query type';

$strReType = 'Type opnieuw';
$strReceived = 'Ontvangen';
$strRecords = 'Records';
$strReferentialIntegrity = 'Controleer referentiële integriteit';
$strRelationNotWorking = 'Extra opties om met tabellen te werken die gelinked zijn, zijn uitgeschakeld. Om te weten te komen waarom klik %shier%s.';
$strRelationView = 'Relatie overzicht';
$strRelationalSchema = 'Relationeel schema';
$strReloadFailed = 'Opnieuw laden van MySQL mislukt.';
$strReloadMySQL = 'MySQL opnieuw laden.';
$strReloadingThePrivileges = 'Bezig de privileges te vernieuwen';
$strRememberReload = 'Vergeet niet de server opnieuw te starten.';
$strRemoveSelectedUsers = 'Verwijder de geselecteerde gebruikers';
$strRenameTable = 'Tabel hernoemen naar';
$strRenameTableOK = 'Tabel %s is hernoemt naar %s';
$strRepairTable = 'Repareer tabel';
$strReplace = 'Vervangen';
$strReplaceTable = 'Vervang tabelgegevens met het bestand';
$strReset = 'Opnieuw';
$strResourceLimits = 'Resource limitaties';
$strRevoke = 'Ongedaan maken';
$strRevokeAndDelete = 'Trek alle actieve privileges in van alle gebruikers en verwijder ze daarna.';
$strRevokeAndDeleteDescr = 'De gebruikers zullen nog steeds het USAGE (gebruik) privilege hebben zolang de privileges nog niet zijn vernieuwd.';
$strRevokeGrant = 'Trek Grant recht in';
$strRevokeGrantMessage = 'U heeft het Grant recht ingetrokken voor %s';
$strRevokeMessage = 'U heeft de rechten ingetrokken voor %s';
$strRevokePriv = 'Trek rechten in';
$strRowLength = 'Lengte van de rij';
$strRowSize = ' Grootte van de rij';
$strRows = 'Rijen';
$strRowsFrom = 'rijen beginnend bij';
$strRowsModeHorizontal = 'horizontaal';
$strRowsModeOptions = 'in %s modus en herhaal kopregels na %s cellen';
$strRowsModeVertical = 'verticaal';
$strRowsStatistic = 'Rij statistiek';
$strRunQuery = 'Query uitvoeren';
$strRunSQLQuery = 'Draai SQL query/queries op database %s';
$strRunning = 'wordt uitgevoerd op %s';

$strSQL = 'SQL';
$strSQLParserBugMessage = 'Er is een kans dat u een fout heeft aangetroffen in de SQL parser. Let er goed op, dat de query op de correcte plaatsen quotes heeft. Een ander mogelijkheid voor deze foutmelding kan zijn dat u het ge-quote text gedeelte in bineary mode heeft. U kunt ook uw query proberen in de command line van MySQL. De MySQL server foutmelding hieronder, mocht die aanwezig zijn, kan ook helpen met het opsporen van fouten. Blijft u problemen houden of als de parser fouten geeft terwijl het goed gaat in de command line van MySQL, probeer dan de SQL query in te korten en een bug report met het stukje data te sturen van het CUT gedeelte hieronder:';
$strSQLParserUserError = 'Er schijnt een fout te zijn in uw SQL query. Mocht de MySQL server een error hebben terug gegeven, probeer dan of uw hiermee uw fout kunt oplossen.';
$strSQLQuery = 'SQL-query';
$strSQLResult = 'SQL resultaat';
$strSQPBugInvalidIdentifer = 'Ongeldige Identifer';
$strSQPBugUnclosedQuote = 'Quote niet afgesloten';
$strSQPBugUnknownPunctuation = 'Onbekende Punctuatie String';
$strSave = 'Opslaan';
$strScaleFactorSmall = 'De schaal factor is te klein om het schema op een pagina te zetten';
$strSearch = 'Zoeken';
$strSearchFormTitle = 'Zoeken in de database';
$strSearchInTables = 'In de tabel(len):';
$strSearchNeedle = 'Woord(en) of waarde(s) waarnaar gezocht moet worden (wildcard: "%"):';
$strSearchOption1 = 'ten minste een van de woorden';
$strSearchOption2 = 'alle woorden';
$strSearchOption3 = 'de exacte zin';
$strSearchOption4 = 'als een reguliere expressie';
$strSearchResultsFor = 'Zoek resultaten voor "<i>%s</i>" %s:';
$strSearchType = 'Zoek:';
$strSelect = 'Selecteren';
$strSelectADb = 'Selecteer A.U.B. een database';
$strSelectAll = 'Selecteer alles';
$strSelectFields = 'Selecteer velden (tenminste 1):';
$strSelectNumRows = 'in query';
$strSelectTables = 'Selecteer tabellen';
$strSend = 'verzenden';
$strSent = 'Verzonden';
$strServer = 'Server %s';
$strServerChoice = 'Server keuze';
$strServerStatus = 'Runtime Informatie';
$strServerStatusUptime = 'Deze MySQL server draait inmiddels %s. Hij is gestart op %s.';
$strServerTabProcesslist = 'Processen';
$strServerTabVariables = 'Variabelen';
$strServerTrafficNotes = '<b>Server verkeer</b>: Deze tabellen geven statistieken weer van het verkeer van deze MySQL server vanaf het moment dat hij is gestart';
$strServerVars = 'Server variabelen en instellingen';
$strServerVersion = 'Server versie';
$strSessionValue = 'Sessie variabelen';
$strSetEnumVal = 'Als het veldtype "enum" of "set" is, voer dan de waardes in volgens dit formaat: \'a\',\'b\',\'c\'...<br />Als u ooit een backslash moet plaatsen ("\") of een enkel aanhalingsteken ("\'") bij deze waardes, backslash het (voorbeeld \'\\\\xyz\' of \'a\\\'b\').';
$strShow = 'Toon';
$strShowAll = 'Toon alles';
$strShowColor = 'Toon kleur';
$strShowCols = 'Toon kolommen';
$strShowDatadictAs = 'Data Dictionary Formaat';
$strShowGrid = 'Toon grid';
$strShowPHPInfo = 'Laat informatie over PHP zien';
$strShowTableDimension = 'Geef de dimensies van de tabellen weer';
$strShowTables = 'Toon tabellen';
$strShowThisQuery = ' Laat deze query hier zien ';
$strShowingRecords = 'Toon Records';
$strSingly = '(apart)';
$strSize = 'Grootte';
$strSort = 'Sorteren';
$strSpaceUsage = 'Ruimte gebruik';
$strSplitWordsWithSpace = 'Woorden worden gesplit door een spatie karakter (" ").';
$strStatement = 'Opdrachten';
$strStatus = 'Status';
$strStrucCSV = 'CSV gegevens';
$strStrucData = 'Structuur en gegevens';
$strStrucDrop = '\'drop table\' toevoegen';
$strStrucExcelCSV = 'CSV voor MS Excel data';
$strStrucOnly = 'Alleen structuur';
$strStructPropose = 'Tabel structuur voorstellen';
$strStructure = 'Structuur';
$strSubmit = 'Verzenden';
$strSuccess = 'Uw SQL-query is succesvol uitgevoerd.';
$strSum = 'Som';

$strTable = 'Tabel';
$strTableComments = 'Tabel opmerkingen';
$strTableEmpty = 'De tabel naam is leeg!';
$strTableHasBeenDropped = 'Tabel %s is vervallen';
$strTableHasBeenEmptied = 'Tabel %s is leeg gemaakt';
$strTableHasBeenFlushed = 'Tabel %s is geschoond';
$strTableMaintenance = 'Tabel onderhoud';
$strTableOfContents = 'Inhoudsopgave';
$strTableStructure = 'Tabel structuur voor tabel';
$strTableType = 'Tabel type';
$strTables = '%s tabel(len)';
$strTblPrivileges = 'Tabel-specifieke privileges';
$strTextAreaLength = ' Vanwege z\'n lengte,<br /> is dit veld misschien niet te wijzigen ';
$strTheContent = 'De inhoud van uw bestand is ingevoegd.';
$strTheContents = 'De inhoud van het bestand vervangt de inhoud van de geselecteerde tabel voor rijen met een identieke primaire of unieke sleutel.';
$strTheTerminator = 'De afsluiter van de velden.';
$strThisHost = 'Deze Host';
$strThisNotDirectory = 'Dit was geen directory';
$strThreadSuccessfullyKilled = 'Thread %s is met success afgesloten.';
$strTime = 'Tijd';
$strTotal = 'totaal';
$strTotalUC = 'Totaal';
$strTraffic = 'Verkeer';
$strType = 'Type';

$strUncheckAll = 'Deselecteer alles';
$strUnique = 'Unieke waarde';
$strUnselectAll = 'Deselecteer alles';
$strUpdatePrivMessage = 'U heeft de rechten aangepast voor %s.';
$strUpdateProfile = 'Pas profiel aan:';
$strUpdateProfileMessage = 'Het profiel is aangepast.';
$strUpdateQuery = 'Wijzig Query';
$strUsage = 'Gebruik';
$strUseBackquotes = 'Gebruik backquotes (`) bij tabellen en velden\' namen';
$strUseTables = 'Gebruik tabellen';
$strUseTextField = 'Gebruik tekstveld';
$strUser = 'Gebruiker';
$strUserAlreadyExists = 'De gebruiker %s bestaat al!';
$strUserEmpty = 'De gebruikersnaam is leeg!';
$strUserName = 'Gebruikersnaam';
$strUserNotFound = 'De geselecteerde gebruiker werd niet aangetroffen in de privileges tabel';
$strUserOverview = 'Gebruikers Overzicht';
$strUsers = 'Gebruikers';
$strUsersDeleted = 'De geselecteerde gebruikers zijn met succes verwijderd.';

$strValidateSQL = 'Valideer SQL';
$strValidatorError = 'De SQL validatie kon niet worden geinitialiseerd. Controleer of u de nodige php extensies heeft geinstalleerd zoals beschreven in de %sdocumentatie%s.';
$strValue = 'Waarde';
$strVar = 'Variabelen';
$strViewDump = 'Bekijk een dump (schema) van tabel';
$strViewDumpDB = 'Bekijk een dump (schema) van database';

$strWebServerUploadDirectory = 'web-server upload directory';
$strWebServerUploadDirectoryError = 'De directory die u heeft ingesteld om te uploaden kan niet worden bereikt.';
$strWelcome = 'Welkom op %s';
$strWithChecked = 'Met geselecteerd:';
$strWritingCommentNotPossible = 'Het toevoegen van commentaar is niet mogelijk';
$strWritingRelationNotPossible = 'Toevoegen van een relatie is niet mogelijk';
$strWrongUser = 'Verkeerde gebruikersnaam/wachtwoord. Toegang geweigerd.';

$strYes = 'Ja';

$strZeroRemovesTheLimit = 'Opmerking: Het instellen van deze waarden op 0 (nul) verwijderd het limiet.';
$strZip = '"Gezipt"';
// To translate

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
