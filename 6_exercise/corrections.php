// models/user.php
// γραμμή 6 θες κενό αριστερά από το =
// στην 13 και γενικά πουθενά μην αφήνεις κενά γύρω από το ->
// στην 18 έχεις δύο κενά δεξιά από το = αντί για ένα
// στην 42 το } είναι πιο indented απ' ό,τι πρέπει
// πρέπει να είναι στο ίδιο επίπεδο με το if το οποίο κλείνει
// όπως στην 60 που είναι σωστό
// https://github.com/pkakelas/NTUA_web_development_seminar/blob/master/6_exercise/models/encryption.php
// εδώ στην 17 θες κενά γύρω από το =>
// ο λόγος που στο -> δεν βάζουμε κενά ενώ στο => τυπικά βάζουμε είναι διότι το => ορίζει αντιστοιχία κλειδιού/τιμής σε ένα χάρτη
// ενώ το -> δίνει πρόσβαση σε ιδιότητα αντικειμένου
// και τυπικά όλα τα βέλη που δίνουν τέτοιου είδους πρόσβαση δεν έχουν κενά
// π.χ. το "." σε Java και C++
// ή το "->" στη C/C++ και στην PHP
// ενώ το => σε CoffeeScript που δίνει αντιστοιχεία ανάμεσα σε ορισμό συνάρτησης και υλοποίηση, έχει κενά
// γενικά τα βέλη που μιλούν για αντιστοιχία περιβάλλονται από κενά
// ενώ οι τελεστές πρόσβασης σε ιδιότητες αντικειμένων όχι
// αντίθετα, η απλή τελεία στην PHP θα πρέπει να περιβάλλεται από κενά διότι είναι τελεστής συνένωσης
// π.χ. στην 21 εδώ
// encryption.php
// δρα ανάμεσα σε δύο strings σαν πρόσθεση
// οπότε αντίστοιχα όπως το αριθμητικό + θα πρέπει να περιβάλλεται από κενά, έτσι και το . της PHP
// (αντίθετα από το . της Java που λειτουργεί σαν το -> της PHP)
// sessions.php
// εδώ στην 3 έχεις ένα κενό πριν το ?>
// και εδώ
// readlist.php
// στην 5 έχεις ένα κενό που δεν χρειάζεται πριν τις () του array
// επειδή το array δρα σαν constructor, το αντιμετωπίζουμε σαν να ήταν συνάρτηση
// οπότε θα πρέπει να το γράψεις όπως σωστά γράφεις το opendir της 4
// χωρίς κενό ανάμεσα στο όνομα της συνάρτησης και την πρώτη παρένθεση
// στην γραμμή 11 θα πρέπει να διορθώσεις το ίδιο
// στη γραμμή 9 έχεις ένα παραπάνω space πριν το }
// download.php
// εδώ γίνεται χαμός
// οι 9 και 12 δεν είναι indented
// στη γραμμή 6 έχεις ξεχάσει τα κενά γύρω από το -
// και μετά το ,
// ας δούμε έναν καλύτερο τρόπο να γράψουμε το download.php
// νομίζω ότι παραβιάζουμε το DRY principle
// οι γραμμές 7...36 είναι όλο copy/paste
// πώς σου φαίνεται κι εσένα;
// θυμίζω DRY = Don't Repeat Yourself
// λοιπόν στο ανανεωμένο download.php controller
// οι γραμμές 37 και 38 έχουν διαφορετικό indentation
// ενώ θα έπρεπε να έχουν το ίδιο
// στις γραμμές 7...36 παραβιάζεις το DRY
// να ένας καλύτερος τρόπος να το κάνεις:
// $extension_to_type = array(
// 'exe' => 'application/octet-stream',
// 'png' => 'image/png',
// ...
// );
// if (isset($extension_to_type[$file_ext])) {
// header('Content-type: ' . $extension_to_type[$file_ext]);
// }
// με το σωστό indentation φυσικά
// και φρόντισε η . να μην συμπεριλαμβάνεται στο $file_ext
// στην γραμμή 38 δεν έχεις κενά γύρω από την .
// ωραία η διόρθωση στο πρόβλημα ασφάλειας
// το πρόβλημα που είχες λέγεται File inclusion vulnerability
// https://en.wikipedia.org/wiki/File_inclusion_vulnerability
// file_upload_functions.php
// εδώ στην 9 έχεις κενό πριν το ( του ορισμού της συνάρτησης
// στην 10 λείπουν κενά μετά τα ,
// στην 11 το ίδιο
// και επίσης λείπουν κενά γύρω από το -
// το όνομα της συνάρτησης file_ext δεν είναι σαφές τι κάνει
// δεν κάνει σαφές το τι κάνει
// θα το έλεγα valid_file_extension
// εδώ:
// https://github.com/pkakelas/NTUA_web_development_seminar/blob/master/6_exercise/controllers/file_uploader.php
// το file_exists(...) !== true γράφεται καλύτερα !file_exists(...)
// και πιο κάτω το file_ext == false αντίστοιχα
// εδώ:
// γραμμή 11 indentation
// https://github.com/pkakelas/NTUA_web_development_seminar/blob/master/6_exercise/controllers/register.php#L19
// εδώ στη γραμμή 19 δεν χρειάζεται το == true
// και στην 12 έχεις κενό πριν το (
// που δεν χρειάζεται
// αυτό:
// $arrlength = count($problems);
// if ($arrlength !== 0) {
// γράφεται καλύτερα έτσι:
// if (count($problems)) {
// και διαβάζεται "αν μέτρησες προβλήματα..."
// εδώ
// https://github.com/pkakelas/NTUA_web_development_seminar/blob/master/6_exercise/controllers/user_validation_functions.php
// στον ορισμό της συνάρτησης σβήσε το κενό πριν το (
// στην 9 μην αφήνεις τόσα κενά πριν το (
// μόνο ένα
// στην 12 άσε κενά γύρω από τον τελεστή 
// εδώ
// list.php#L17
// στην 17 κάνεις opendir που είναι λειτουργία του model
// το for στη γραμμή 20 γράφεται καλύτερα ως foreach
// όσο για το encryption, φαίνεται καλό σε γενικές γραμμές
// μπράβο
// Αν και αυτό που έχεις φτιάξει δεν σπάει, θα σου πρότεινα να χρησιμοποιήσεις την openssl_random_pseudo_bytes για να παράξεις τυχαία αλάτια, και γενικότερα όταν χρειάζεσαι κρυπτογραφικά ισχυρή τυχαίτητα
// (ενώ για απλή τυχαιότητα, το mt_rand είναι ΟΚ)
// επίσης θα σου πρότεινα τα salts σου να είναι ελαφρώς μεγαλύτερα
// αν και το openssl ίσως αποτύχει σε windows
// οπότε σε αυτή την περίπτωση θα αναγκαστείς να χρησιμοποιήσεις mt_rand
// γενικά προτείνεται τα salts να είναι της τάξης των 32 χαρακτήρων
// αλλά αυτό που έχεις κάνει είναι μια χαρά
// μπορείς να το κρατήσεις και όπως είναι
// διόρθωσε αυτά τα θέματα και μετά ας προχωρήσουμε σε πιο ριζικές αλλαγές στη δομή
// όπως γενικά έχεις τώρα τον κώδικά σου, είναι αρκετά καλός ο κώδικάς σου
// είμαι ικανοποιημένος 

//	Εδώ:
//	https://github.com/pkakelas/NTUA_web_development_seminar/blob/master/4th%2C%205th%20exercise/controllers/file_uploader.php#L7
//	Ο controller είναι λάθος να γνωρίζει για το view. Όμως στο συγκεκριμένο σημείο κάνεις htmlspecialchars το οποίο δίνει
//	 γνώση σχετική με την παρουσίαση στον controller. Ο controller δεν πρέπει να γνωρίζει αν χρησιμοποιείς HTML εσύ.
//	Θα μπορούσαν κάλλιστα τα views να παράγουν PDF.
//	Ο controller δεν θα πρέπει να ξέρει γι' αυτό.
//	Άρα το htmlspecialchars δεν έχει θέση στον controller αλλά στο view.
//	Ακριβώς από πάνω έχεις ένα addslashes.
//	Ο controller είναι λάθος να γνωρίζει για το model.
//	Ο controller δεν πρέπει να γνωρίζει αν χρησιμοποιείς MySQL εσύ.
//	Ο controller πρέπει να γνωρίζει μόνο το API των views και των models.
//	Όχι το //πώς// δουλεύουν εσωτερικά.
//	Δηλαδή πρέπει να γνωρίζει μόνο για την ύπαρξη των views και models, τα ονόματά τους, και τι παραμέτρους αναμένουν.
//	Αλλά όχι αν το view παράγει το περιεχόμενο χρησιμοποιώντας HTML.
//	Και ούτε αν το model αποθηκεύει τα δεδομένα χρησιμοποιώντας MySQL.
//	Θα μπορούσε κάλλιστα να χρησιμοποιεί αρχεία, ή PostgreSQL, ή SQLite ή MSSQL ή ακόμη κάποιο εξωτερικό API για αποθήκευση δεδομένων π.χ. βάζοντάς τα στο amazon.
//	Συνεπώς το addslashes δεν έχει θέση στον controller αλλά στο model.
//	Εδώ έχεις λάθος coding style, ξέχασες τα κενά:
//	https://github.com/pkakelas/NTUA_web_development_seminar/blob/master/4th%2C%205th%20exercise/controllers/file_uploader.php#L13
//	Παρακάτω:
//	https://github.com/pkakelas/NTUA_web_development_seminar/blob/master/4th%2C%205th%20exercise/controllers/file_uploader.php#L25
//	Εδώ ελέγχεις αν το $result είναι true.
//	Όμως θα μπορούσες να ελέγξεις και αν η έκφραση "το $result είναι true" είναι αληθής.
//	Γράφοντας if (($result == true) == true)
//	όμως αυτό είναι σαν να ελέγχεις ότι η έκφραση "($result == true) == true" είναι αλθής
//	αληθής//
//	δηλαδή θα μπορούσες να γράψεις
//	if (true == (($result == true) == true))
//	όμως όλα αυτά είναι πλεονασμός
//	το if τρέχει το σώμα αν η έκφραση είναι αληθής
//	γι' αυτό θα γράφεις
//	if ($result)
//	λάθη coding style έχεις τριγύρω σε πολλά σημεία
//	π.χ. χρειάζεται να βάλεις κενά γύρω από τον τελεστη == σε διάφορα σημεία
//	διορθωσέ τα
//	https://github.com/pkakelas/NTUA_web_development_seminar/blob/master/4th%2C%205th%20exercise/views/list.php#L19
//	το readdir είναι δουλειά του model, όχι του view
// https://github.com/pkakelas/NTUA_web_development_seminar/blob/master/4th%2C%205th%20exercise/views/register_problems.php#L14
// ο έλεγχος εγκυρότητας δεδομένων είναι δουλειά του controller, όχι του view
// εδώ:
//	https://github.com/pkakelas/NTUA_web_development_seminar/blob/master/4th%2C%205th%20exercise/views/sign_in_true.php#L10
//	το echo "foo"; γράφεται καλύτερα ως ?>foo 
//	https://github.com/pkakelas/NTUA_web_development_seminar/blob/master/4th%2C%205th%20exercise/controllers/register.php#L24
//	ο τρόπος κρυπτογράφησης είναι θέμα model, όχι controller
//	επίσης το md5 θεωρείται πια ξεπερασμένο
//	δες εδώ για το πώς να το διορθώσεις
//	http://php.net/manual/en/faq.passwords.php
//	η προτροπή που κάνουμε στο σεμινάριο για χρήση md5 είναι λάθος
//	υπάρχουν πιο ταιριαστοί αλγόριθμοι για hashing που μπορείς να διαβάσεις στο παραπάνω link
//	θα σου πρότεινα να χρησιμοποιήσεις crypt με δικό σου αλάτι (είτε στατικό είτε, καλύτερα, τυχαίο ανά χρήστη)
//	https://github.com/pkakelas/NTUA_web_development_seminar/blob/master/4th%2C%205th%20exercise/models/user_queries.php
//	εδώ οι συναρτήσεις σου έχουν στο όνομά τους τη λέξη "sql"
//	κάτι που κάνει τους controllers να γνωρίζουν για τον τρόπο που δουλεύουν τα models
//	το ίδιο και το όνομα του αρχείου που λέγεται "user_queries"
//	αυτό είναι λάθος
//	ο controller θα πρέπει να έχει μηδενική γνώση όσο αφορά την υλοποίηση των models
//	μία λεπτομέρεια υλοποίησης των models από αυτές τις οποίες πρέπει να αγνοεί ο controller είναι η χρήση (ή μη) sql
//	https://github.com/pkakelas/NTUA_web_development_seminar/blob/master/4th%2C%205th%20exercise/controllers/download.php#L7//
//	εδώ τυπώνεις το string header αντί να στέλνεις ένα header
//	δεν ξέρω τι σκεφτόσουν...
//	επίσης έχεις πρόβλημα ασφάλειας
//	download.php?name=../Documents and Settings/Dimitris/secret.txt
//	τον πούλο
//	διόρθωσέ το
//	διόρθωσε επίσης όλα τα coding style λάθη
//	κενά, indentation κλπ.
//	ο κώδικάς σου είναι βρώμικος
//	μη γράφεις έτσι
//	επίσης:
//	https://github.com/pkakelas/NTUA_web_development_seminar/blob/master/4th%2C%205th%20exercise/controllers/file_upload_functions.php#L4
//	δομές όπως η:
//			if (file_exists($tmp_name)) {
//				return true;
//			}
//			else { 
//				return false;
//			}
//	γράφονται καλύτερα ως:
//	return file_exists($tmp_name);
//	αντίστοιχα:
//			if(in_array($file_ext,$allowed_ext)) {
//				return true;
//			}
//			else {
//				return false;
//			}
//	return in_array($file_ext, $allowed_ext);
//	προφανώς θες να επιστρέψεις την αληθοτιμή της παράστασης
//	αυτό που γράφεις τώρα είναι πλεονασμός
//	λες:
//	αν η παράσταση ισούται με αλήθεια τότε επίστρεψε αλήθεια
//	αν ισούται με ψεύδος τότε επίστρεψε ψεύδος
//	ε χαίρω πολύ
//	επίστρεψε απλώς την αληθοτιμή της παράστασης

//	Πρέπει να έχεις έναν controller για κάθε URL.
//	επίσης στα views και στα models μην χρησιμοποιείς $_POST, $_GET, $_SESSION
//	αυτά είναι δουλειά του controller
//	το view θα πρέπει απλά να τυπώνει HTML
//	και να καθορίζει ένα σύνολο μεταβλητών που περιμένει
//	κατά προτίμηση σε μορφή συνάρτησης
//	θα σου πρότεινα να φτιάξεις μία συνάρτηση για κάθε view
//	έτσι ώστε κάθε αρχείο-view να περιέχει μόνο τη δήλωση μίας συνάρτησης
//	η οποία παίρνει ορισμένες παραμέτρους και τυπώνει το αντίστοιχο HTML
//	στη συνέχεια ο controller αυτό που θα κάνει θα είναι να κάνει include το αντίστοιχο αρχείο view
//	και στη συνέχεια να καλέσει την αντίστοιχη συνάρτηση που όρισε το view αρχείο
//	επίσης τα png βάλτα σε ένα ξεχωριστό φάκελο
//	το ίδιο και το css
//	προσωπικά προτιμώ να έχω ένα φάκελο images
//	και ένα φάκελο css
//	αλλά μπορείς να τα έχεις και μαζί αν σε βολεύει σε ένα φάκελο static
//	πολλοί το συνηθίζουν αυτό
//	α, επίσης
//	ένα model μπορεί να κάνει include άλλα models αν τα χρειάζεται
//	και ένα view μπορεί να κάνει include άλλα views
//	όπως π.χ. τώρα κάνεις για το header και footer
//	στα models θα σου πρότεινα επίσης να ορίζεις μόνο συναρτήσεις
//	και να μην ΚΑΝΕΙΣ κάτι πριν κληθούν αυτές από τον controller
//	https://github.com/pkakelas/NTUA_web_development_seminar/blob/master/4th%2C%205th%20exercise/models/register_restrictions.php
//	αυτό π.χ. δεν έχει θέση στα models
//	θα έπρεπε να είναι σε controller
//	ο controller είναι υπεύθυνος για το input validation
//	και για το redirection
//	https://github.com/pkakelas/NTUA_web_development_seminar/blob/master/4th%2C%205th%20exercise/models/upload_query.php
//	αυτό είναι ένα σωστό model
//	στο return θα σου πρότεινα να κάνεις
//	return true
//	και
//	return false
//	αντίστοιχα
//	θυμίσου ότι η PHP υποστηρίζει boolean data type
//	http://php.net/boolean
//	https://github.com/pkakelas/NTUA_web_development_seminar/blob/master/4th%2C%205th%20exercise/models/user_sql_queries.php
//	εδώ έχεις συντακτικό λάθος
//	το sql_sign_in
//	δε φαίνεται να κλείνει }
//	εκτός αν δε βλέπω κάτι
//	Στο consistency σου δεν είσαι σωστός
//	στο user_sql_queries.php που σου έδειξα ας πούμε
//	γύρω από το = δε βάζεις κενά
//	βάλε
//	γύρω από το > το ίδιο
//	και το } στο τελευταίο if δεν είναι στοιχισμένο
//	δεν είναι τόσο δύσκολο και δείχνει ότι προσέχεις τον κώδικά σου
//	το κάνει πιο αναγνώσιμο
//	φρόντισε να γράφεις σωστά
//	είναι θέμα "καθαριότητας"
//	https://github.com/pkakelas/NTUA_web_development_seminar/blob/master/4th%2C%205th%20exercise/controllers/download.php
//	δεν είναι σοβαρός κώδικας αυτός
//	μη γράφεις έτσι
//	κατ' αρχάς ελέγχεις αν το όνομα του αρχείου περιέχει ".gif" φερ' ειπείν
//	ενώ δεν εννοείς καν αυτό
//	να γράφεις αυτό που σκέφτεσαι
//	Σκέφτεσαι "Ας δούμε την επέκταση του αρχείου.
//	Υπάρχει η εξής αντιστοιχία ανάμεσα σε επεκτάσεις και σε content-types.
//	Το jpg αντιστοιχεί σε image/jpg.
//	Το gif αντιστοιχεί σε image/gif."
//	κλπ.
//	Αυτή η σκέψη δεν υπάρχει στον κώδικά σου.
//	Ο κώδικάς σου σκέφτεται ως εξής:
//	Για να δούμε αν η λέξη ".gif" περιέχεται στο όνομα του αρχείου.
//	Περιέχετα;ι
//	Α ωραία.
//	Ας ορίσουμε το content-type.
//	Ε δεν είναι αυτό που εννοείς.
//	Θα σου έλεγα:
//	Βρες πρώτα την επέκταση.
//	Ακόμη καλύτερα φτιάξε μία συνάρτηση που να βρίσκει την επέκταση.
//	Μπορείς να το κάνεις χρησιμοποιώντας τις strrpos και substr.
//	Επίσης φτιάξε μία συνάρτηση που να παίρνει extension και να δίνει content type.
//	Η τελευταία ας χρησιμοποιήσει ένα dictionary ανάμεσα σε extensions και content types.
//	όσο για το exit στην 46 δεν βλέπω τι ρόλο βαράει
//	και σου πρότεινα την strrpos, όχι την strpos
//	https://github.com/pkakelas/NTUA_web_development_seminar/blob/master/4th%2C%205th%20exercise/controllers/register.php
//	αυτό είναι ένας καλός controller
//	εκτός από το ότι στη γραμμή 12 πάλι έχεις μπερδέψει το = με το ==
//	και δε δοκιμάζεις να δεις αν υπάρχει περίπτωση να αποτύχει
//	καλό είναι να δοκιμάζεις τον κώδικά σου όταν τον αλλάζεις
//	για να δεις αν έχεις κάνει τέτοια λάθη
//	γενικά να δοκιμάζεις περιπτώσεις επιτυχίας, αποτυχίας κλπ.
//	αυτά προς το παρόν
//	επίσης μιας και είδες το μάθημα ασφάλειας
//	διόρθωσε τα SQL injections σου
//	καθώς και τα XSS σου
//	τα model functions δεν θα πρέπει να ονομάζονται "sql_sign_in"
//	τα models δεν θα πρέπει να ονομάζονται "user_sql_queries.php"//
//	διότι ο controller που τα καλεί πρέπει να είναι storage-agnostic
//	δεν θα πρέπει να γνωρίζει ότι έχεις MySQL εσύ
//	αυτό είναι ευθύνη του model
//	και όχι του controller
//	άρα δεν θα πρέπει να το αποκαλύπτεις στο όνομα
//	θα πρέπει να κάνεις σωστό information hiding
//	https://en.wikipedia.org/wiki/Information_hiding
//	π.χ. αν αλλάξεις τρόπο αποθήκευσης από sql σε αρχεία
//	δεν θα ήθελες να χρειαστεί να αλλάξεις τους controllers
//	αλλά μόνο τα models
