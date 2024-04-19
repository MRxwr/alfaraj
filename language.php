<?php
if ( isset($_POST["lang"]) ){
	
	if ( $_POST["lang"] == "ENG" ){
		setcookie("CREATEkwLANG","ENG",(86400*30) + time(), "/");
		header("LOCATION: index.php");
	}else{
		setcookie("CREATEkwLANG","AR",(86400*30) + time(), "/");
		header("LOCATION: index.php");
	}
}
if ( isset($_COOKIE["CREATEkwLANG"]) AND $_COOKIE["CREATEkwLANG"] == "ENG" ){
	$LinkText = "URL";
	$directionHTML = "ltl";
	$home = "Home";
	$aboutUs = "About us";
	$services = "Services";
	$servicesTitle = "Services & Legal Representation";
	$clients = "Credits";
	$mediaCenter = "Media Center";
	$contact = "Contact";
	$consultation = "Consultation";
	$language = "Select Language";
	$ReadMore = "Read More";
	$ALFarajGroup = "AL Faraj Group";
	$IIG = "International Integrated Group";
	$ECA = "European Court Of Arbitraon";
	$InspectionShipping = "AL Faraj For Inspection & Shipping";
	$about = "ABOUT";
	$TrainingCourses = "TRAINING COURSES";
	$InsuranceConsultancy = "Marine and insurance consultancy";
	$ShipsPreview = "Ship Survey & Inspection";
	$ShipSaleLeasing = "Ship sale and leasing";
	$MaritimeMediation = "Maritime Mediation";
	$MaritimeTransportCharts = "Maritime services contracts and maritime transport charts";
	$InsuranceForDisputes = "Marine Insurance & Damages disputes resolution";
	$MaritimeArbitration = "Maritime arbitration";
	$CustomsClearance = "Customs clearance";
	$Training = "Training";
	$ConsultingLegal = "Consulting Legal";
	$ConsultingArbitration = "Consulting Arbitration";
	$ConsultingAdministrative = "Consulting Administrative";
	$ServicesProvided = "Authorized services provided through the company";
	$MarineStudies = "Marine studies";
	$EducationalSciences = "Educational Sciences";
	$PublicRelations = "Public Relations and Media";
	$Insurance = "Insurance";
	$ACS = "Administrative, commercial and secretarial sciences";
	$ForeignPolicy = "Foreign Policy";
	$CoursesArbitration = "Courses in the field of arbitration";
	$LegalPrograms = "Legal programs";
	$EngineeringTechnical = "Engineering and technical programs";
	$HSPSciences = "Human, social and psychological sciences";
	$EFSciences = "Economic and Financial Sciences";
	$OSS = "Occupational safety and security";
	$MarineAirNavigation = "Marine and Air Navigation";
	$EnvironmentalSciences = "Environmental Sciences";
	$Training2 = "Spreading legal and arbitration culture among members of society in general and between legal persons in particular through holding training courses.";
	$LegalConsulting = "Preparing and providing legal advice and auditing contracts and agreements through experts in various fields.";
	$ArbitrationConsulting = "We provide all advice related to settling disputes amicably, whether through arbitration or mediation through accredited arbitrators under the supervision of the European Court of Arbitration.";
	$ManagementConsulting = "It provides a range of administrative and training services to companies, and perhaps the most important of these services is to identify the training needs of companies and other professional administrative services at the hands of the most powerful management experts in the Arab world.";

	$ThankYou = "Thank you";
	$RegistrationConfirmed = "Your registration has been confirmed please check your email";
	$StartingDate = "Starting Date";
	$EndingDate = "Ending Date";
	$CandidateInformation = "CANDIDATE INFORMATION";
	$Name = "Name";
	$Nationality = "Nationality";
	$Email = "Email";
	$PhoneNumber = "Phone Number";
	$Qualification = "Qualification";
	$Address = "Address";
	
	$Failure = "Failure";
	$RegistrationFailure = "Your registration was failure please try again";
	$RetryPayment = "Retry Payment";

	$News = "News";
	$PublishedDate = "Published Date";

	$COURSES = "Training Activities";
	$ByIns = "by";
	$LecturesNum = "Lectures";

	$SiteMap = "SITEMAP";
	$OurPartners = "CREDITS";
	$ContactUs = "CONTACT US";
	$ContactWithUs = "CONNECT WITH US";
	$AddLn1 = "Kuwait city - Abdulaziz Hamad Alsaqer st,"; 
	$AddLn2 = "Altujjar tower";
	$AddLn3 = "floor 8 - office 14";
	$Copyright = "Copyright © *|2021|* *|alfaraj group|*, All rights reserved. Powered By";
	$TomohInstitute = "Al-Farag Group of Companies";
	$WhoAreWe = "Who Are We";
	$consulatationBooking = "To book a consulatation session please fill the following";
	
	$SelectDate = "Select Date";
	$SelectTime = "Select Time";
	$ConsultationDuration = "Please note that the consultation duration starts with 30 minutes";
	$BookNow = "Book now";
	
	$AboutALFarajGroup = "Al-Farag Group of Companies";
	
	$AboutThisCourse = "About this course";
	
	$PAYMENTINFORMATION = "PAYMENT INFORMATION";
	$TC = "Terms & Conditions";
	$AgreeTC = "I agree to the terms & conditions of AL Faraj Group.";
	$PaymentMethods = "Payment Methods";
	$Total = "Total";
	$RegisterNow = "Register Now";
	$PAYMENTINFORMATION = "PAYMENT INFORMATION";
	
	$PARTNERS = "PARTNERS";
	$MeetOurPartners = "Accreditations and success partners";
	
	$LatestNews = "Latest News";
	$Published = "Published";
	$ViewDetails = "View Details";
	$GETINTOUCH = "GET IN TOUCH";
	$Assistance = "Need Assistance? Reach us anytime";
	$AnyQueson = "Any Queson's ?";
	$Subject = "Subject";
	$YourMessageHere = "Your message here...";
	$Submit = "Submit";
	$Instructer = "Instructer";
	$ServiceOne = "The branch of the European Court of Arbitration in the State of Kuwait offers training courses in the field of arbitration and mediation, which are considered alternative dispute settlement methods for specialists and professionals practicing in the countries of the Arab world, with the aim of developing the culture of arbitration, preparing distinguished arbitrators and qualifying them legally and technically, with the obligation to fulfill all the conditions and qualifications necessary for them to ascend the arbitration platform So that he becomes a fair arbitrator who is aware of all the detailed issues of each dispute and the legal implications of it for the parties to arbitration and his knowledge of the rights and obligations he owes, so it was necessary to pay attention to preparing and qualifying them in addition to refining the arbitral talents and raising the competencies to contribute to its preparation and legal qualification.";
	$ServiceTwo = "The branch of the European Court of Arbitration in the State of Kuwait provides mediation and arbitration services to clients, whether they are individuals, companies or institutions from all over the world, and through expert arbitrators accredited from the headquarters of the European Court of Arbitration and who are distinguished by competence and experience to deal with various international commercial, maritime, engineering and construction arbitration cases.";
	$ServiceThree = "The European Court of Arbitration branch in the State of Kuwait shall register the ordinary members and the arbitration members, after fulfilling the conditions specified by the headquarters of the court according to the type of membership";
	$ArbitrationText = "Arbitration";
	$RegisteringMembershipText = "Registering membership of the court";
	
	$Duration = "Duration";
	$Period = "Period";
	
	$ArbitrationBook = "Arbitration book in maritime disputes";
	$TheFirstBook = "The first book in this specialization in the Arab Gulf and approved by the Cooperation Council for the Arab States of the Gulf and the European Court of Arbitration";
	
	$BuyOurBook = "Buy Our Book";
	$BookType = "Book Type";
	
	$PrintedCopyPrice = "For the printed copy price applied in";
	$Kuwait = "Kuwait";
	$ShippingCharges = "only 3 kd shipping charges";
	
	$BuyNow = "Buy Now";
	$Buy = "Buy";
	
	$ElectronicCopy = "Electronic Copy";
	$PrintedCopy = "Printed Copy";
	
	
	$BlackstrCopy = "Registration of arbitrators, mediators and marine experts in accredited international entities";
	$HealthyCopy = "Providing arbitration services for maritime disputes and marine insurance of all kinds";
	$ElectricityCopy = "Electricity works";
	$DyeCopy = "Dye works";
	$CeramicCopy = "Ceramic works";
	$CeilingCopy = "Ceiling decoration works";
	$AluminumCopy = "Organizing training courses in the preparation of the maritime arbitrator and the international arbitrator";
	$WoodCopy = "Providing maritime technical and legal advice to government and private agencies and individuals.";
	$SigmaCopy = "Sigma works";
	$DoorsCopy = "Doors and design blacksmithing works";
	$ImplementationCopy = "Implementation of all types of finishes";
	$RestorationCopy = "Restoration works and adding floors";
	$AAAText = "Maritime Arbitration Unit";
	$SaleRentText="sale and rent";
	$GalleryText = "Gallery";
	$VideoGalleyText = "Video Gallery";
	$courtdescText ="The European Center for Arbitration and Mediation's European Court of Arbitration, based in Italy and France, is one of the world's oldest arbitration courts, having been formed in 1959 and working to promote arbitration and mediation ever since. It is a legal entity under the law of Alsace-Moselle, formed under the auspicious Council of Europe, the General Council of French Bas-Rennes, the City of Strasbourg, the Robert Schuman University in Strasbourg, the Faculty of Law and Political Science in Strasbourg, the Chamber of Commerce and Industry of Strasbourg, the Bas-Rennes, the Strasbourg Stock Exchange, the International Trade House Strasbourg and the Bar Association of Strasbourg. We are honored to represent this illustrious authority in Kuwait and the Gulf Cooperation Council, which is led by Counselor Dr. Abdul Amir Al-Faraj, the representative and head of the European Court of Arbitration Branch in Kuwait. The Kuwaiti court branch aims to provide services for settling disputes through arbitration and mediation by the world's most efficient arbitrators. On the other hand, we train and qualify persons to become members of the court's arbitrators through training courses hosted by the court's headquarters and our branch in the State of Kuwait.";
	$creditsTexttab="CEA";
	$TomohInstitute1="Al-Tomoh Institute for Private Training";
	$RealestateCopy="Real estate appraisal";
	$RealestatebCopy="Real estate brokerage";
	$Specialistdiplomatext="Specialist diploma";
	$Coursesandtrainingprogramstext="Courses and training programs";
	$Conferencesandexhibitionstext="Conferences and exhibitions";
	$Paneldiscussionsandworkshopstext="Panel discussions and workshops";
	$ImportantInformationtext=" Important Information !";
	$WhatsNewtext="Whats New";
	$AudioGalleyText = "Audio Gallery";
	$Audio = "Audio File";
	$NewspaperText = "Newspaper";
}else{
	$NewspaperText = "مقتطفات صحفية";
	$LinkText = "الرابط";
	$Audio = "الملف الصوتي";
	$AudioGalleyText = "ألبوم الصوتيات";
	$GalleryText = "معرض الصور";
	$VideoGalleyText = "معرض الفيديو";
	$directionHTML = "rtl";
	$home = "الرئيسية";
	$aboutUs = "عن الشركة";
	$services = "الخدمات";
	$servicesTitle = "الخدمات و التمثيل القانوني";
	$clients = "الاعتمادات";
	$mediaCenter = "المركز الاعلامي";
	$contact = "اتصل بنا";
	$consultation = "الإستشارة";
	$language = "إختر اللغة";
	$ReadMore ="اقرا المزيد";
	$ALFarajGroup = "مجموعة الفرج";
	$IIG = "شركة المجموعة الدولية المتكاملة الاستشارات";
	$ECA = "المحكمة الاوروبية للتحكيم";
	$InspectionShipping = "شركة الفرج لمعاينة السفن والشحن البحري";
	$about = "عن الشركة";
	$TrainingCourses = "الدورات التدريبية";
	$InsuranceConsultancy = "الإستشارات البحرية و   التأمينية";
	$ShipsPreview = "معاينة السفن";
	$ShipSaleLeasing = "بيع وتأجير السفن";
	$MaritimeMediation = "الوساطة البحرية";
	$MaritimeTransportCharts = "عقود الخدمات البحرية ومشارطات النقل البحري";
	$InsuranceForDisputes = "تسوية المنازعات التأمينية والمنازعات الناشئة عن تضرر البضاعة المنقولة بحراً";
	$MaritimeArbitration = "التحكيم البحري";
	$CustomsClearance = "التخليص الجمركي";
	$Training = "التدريب";
	$ConsultingLegal = "الاستشارات القانونية";
	$ConsultingArbitration = "الاستشارات التحكيمية";
	$ConsultingAdministrative = "الاستشارات الاداريه";
	$ServicesProvided = "الخدمات المصرح بها من خلال الشركة";
	$MarineStudies = "الدراسات البحرية";
	$EducationalSciences = "العلوم التربوية";
	$PublicRelations = "العلاقات العامة والاعلام";
	$Insurance = "التأمين";
	$ACS = "العلوم الادارية والتجارية والسكرتارية";
	$ForeignPolicy = "السياسة الخارجية";
	$CoursesArbitration = "دورات في مجال التحكيم";
	$LegalPrograms = "البرامج القانونية";
	$EngineeringTechnical = "البرامج الهندسية والفنية";
	$HSPSciences = "العلوم الانسانية والاجتماعية والنفسية";
	$EFSciences = "العلوم الاقتصادية والمالية";
	$OSS = "الأمن والسلامة المهنية";
	$MarineAirNavigation = "الملاحة البحرية والجوية";
	$EnvironmentalSciences = " العلوم البيئية";
	$Training2 = "نشر الثقافة القانونية والتحكيميه بين أفراد المجتمع بشكل عام وبين القانونيين بشكل خاص من حلال عقد دورات تدريبيه.";
	$LegalConsulting = "إعداد وتقديم الاستشارات القانونية والتدقيق على العقود والاتفاقيات من خلال خبراء في مختلف المجالات .";
	$ArbitrationConsulting = "نقدم جميع الاستشارات المتعلقه بتسويه المنازعات وديا سواء عن طريق التحكيم او الوساطه من خلال محكمين معتمدين تحت اشراف المحكمه الاوروبيه للتحكيم.";
	$ManagementConsulting = "نوفر مجموعة من الخدمات الاداريه والتدريبيه للشركات ولعل اهم هذه الخدمات هي تحديد الاحتياجات التدريبية للشركات وغيرها العديد من الخدمات الادارية الاحترافية على يد أقوى خبراء الإدارة في الوطن العربي.";

	$ThankYou = "شكرا لكم";
	$RegistrationConfirmed = "تم تأكيد تسجيلك يرجى التحقق من بريدك الإلكتروني";
	$StartingDate = "تاريخ البداية";
	$EndingDate = "تاريخ النهاية";
	$CandidateInformation = "معلومات المرشح";
	$Name = "الإسم";
	$Nationality = "الجنسية";
	$Email = "البريد الإلكتروني";
	$PhoneNumber = "رقم التليفون";
	$Qualification = "المؤهل";
	$Address = "العنوان";

	$Failure = "فشل";
	$RegistrationFailure = "التسجيل الخاص بك فشل الرجاء المحاولة مرة أخرى";
	$RetryPayment = "حاول مره اخرى";

	$News = "الاخبار";
	$PublishedDate = "تاريخ النشر";

	$COURSES = "الانشطة التدريبية";
	$ByIns = "المحاضر";
	$LecturesNum = "محاضرات";
	$SiteMap = "خريطة الموقع";
    $OurPartners = "الاعتمادات";
	$ContactUs = "اتصل بنا";
	$ContactWithUs = "تواصل معنا";
	$AddLn1 = "مدينة الكويت - شارع عبد العزيز حمد الصقر"; 
	$AddLn2 = "برج التجار";
	$AddLn3 = "دور ٨ - مكتب ١٤";
	$Copyright = "حقوق الطبع © *|2021|* *|مجموعة الفرج|*, جميع الحقوق محفوظه . مدعم من";
	$TomohInstitute = "مجموعة شركات الفرج";
	$WhoAreWe = "من نحن";
	$consulatationBooking = "لحجز جلسة استشارية يرجى ملء ما يلي";
    $SelectDate = "حدد التاريخ";
	$SelectTime = "حدد الوقت";
    $ConsultationDuration = "يرجى ملاحظة أن مدة الاستشارة تبدأ بـ 30 دقيقة";
    $BookNow = "احجز الآن";
    
   $AboutALFarajGroup = "مجموعة شركات الفرج";
    
    $AboutThisCourse = "حول هذه الدورة";
    
    $PAYMENTINFORMATION = "معلومات الدفع";
    $TC = "الشروط والأحكام";
    $AgreeTC = "أوافق على شروط وأحكام مجموعة الفرج.";
    $PaymentMethods = "طرق الدفع";
    $Total = "المجموع";
    $RegisterNow = "سجل الان";
    $PAYMENTINFORMATION = "معلومات الدفع";
    
    $PARTNERS = "الاعتمادات";
    $MeetOurPartners = "الاعتمادات و شركاء النجاح";
    $LatestNews = "أحدث الأخبار";
    $Published = "نشرت";
    $ViewDetails = "عرض التفاصيل";
    $GETINTOUCH = "ابقى على تواصل";
    $Assistance = "تحتاج الى مساعدة؟ تواصل معنا في أي وقت";
    $AnyQueson = "أي أسئلة؟";
    $Subject = "الموضوع";
    $YourMessageHere = "رسالتك هنا...";
    $Submit = "ارسال";
    $Instructer = "المحاضر";
	$ServiceOne = "يقدم فرع المحكمة الاوروبية للتحكيم بدولة الكويت دورات تدريبية  في مجال التحكيم والوساطة والتى تعتبر من وسائل تسوية المنازعات البديلة للمختصين والمهنيين الممارسين في دول الوطن العربي ، وذلك بهدف تنمية ثقافة التحكيم وإعداد محكمين متميزين وتأهيلهم قانونياً وفنياً، مع وجوب توافر كل الشروط والمؤهلات اللازمة لاعتلائهم منصة التحكيم، بحيث يصبح محكماً عادلاً عارفاً بجميع المسائل التفصيلية لكل نزاع والآثار القانونية المترتبة عليه بالنسبة لطرفي التحكيم ومعرفته بالحقوق والإلتزامات الواجبة عليه، لذا كان من الواجب الاهتمام بإعدادهم وتأهيلهم بالإضافة إلى صقل المواهب التحكيمية ورفع الكفاءات للمساهمة في إعداده وتأهيله قانونياً.";
	$ServiceTwo = "يقدم فرع المحكمة الاوروبية للتحكيم بدولة الكويت خدمات الوساطة والتحكيم للعملاء سواء كانوا افراد او شركات او مؤسسات من جميع أنحاء العالم  ومن خلال محكمين خبراء ومعتمدين من مقر المحكمة الاوروبية للتحكيم ويتميزون بالكفاءة والخبرة للتعامل مع مختلف قضايا التحكيم التجارية الدولية والبحرية والهندسية والانشائية.";
	$ServiceThree = "يقوم فرع المحكمة الاوروبية للتحكيم بدولة الكويت بقيد الاعضاء العاديين والاعضاء المحكمين وذلك بعد الاستيفاء للشروط المحددة من قبل مقرة المحكمة حسب نوع العضوية";
	$ArbitrationText = "التحكيم";
	$RegisteringMembershipText = "قيد العضوية";
	
	$Duration = "عدد المحاضرات";
    $Period = "الفترة";
    
    $ArbitrationBook = "كتاب التحكيم في المنازعات البحرية";
	$TheFirstBook = "الكتاب الاول في هذا التخصص في الخليج العربي والمعتمد من مجلس التعاون لدول الخليج العربي والمحكمة الاوروبية للتحكيم";
    
    $BuyOurBook = "اشتر كتابنا"; 
    $BookType = "نوع الكتاب";
    
    $PrintedCopyPrice = "بالنسبة لسعر النسخة المطبوعة المطبق في";
    $Kuwait = "الكويت";
    $ShippingCharges = "رسوم الشحن 3 دنانير فقط";  
    
    $BuyNow = "اشترِ الآن";
    $Buy = "اشترِ";
    
    $ElectronicCopy = "نسخة إلكترونية";
	$PrintedCopy = "نسخة مطبوعة";
	
	
$BlackstrCopy = "قيد المحكمين والوسطاء والخبراء البحريين في الكيانات الدولية المعتمدة";
	$HealthyCopy = "تقديم خدمات التحكيم للمنازعات البحرية والتأمين البحري بأنواعها";
	$ElectricityCopy = "اعمال كهرباء";
	$DyeCopy = "اعمال صبغ";
	$CeramicCopy = "اعمال سيراميك";
	$CeilingCopy = "اعمال ديكورات سقف";
	$AluminumCopy = "تنظيم دورات تدريبية في اعداد المحكم البحري والمحكم الدولي";
$WoodCopy = "تقديم الاستشارات الفنية والقانونية البحرية للجهات الحكومية والخاصة والأفراد";
	$SigmaCopy = "اعمال سيجما";
	$DoorsCopy = "اعمال حدادة أبواب وديزاين";
	$ImplementationCopy = "تنفيذ جميع أنواع التشطيبات ";
	$RestorationCopy = "اعمال الترميمات واضافة الادوار";
$AAAText = "وحدة التحكيم البحري";
	$SaleRentText="للبيع والايجار";
	$courtdescText ="تعتبر المحكمة الاوروبية للتحكيم التابعة للمركز الأوروبي للتحكيم والوساطه ومقرهما في ايطاليا وفرنسا من اعرق واقدم محاكم التحكيم على مستوى العالم حيث انشئت عام 1959  ومنذ ذلك الحين تعمل على تشجيع التحكيم والوساطة.
					وهي كيان قانوني ، بموجب قانون الألزاس-موزيل ، تم تشكيله تحت رعاية مجلس أوروبا والمجلس العام لباس رين الفرنسية ومدينة ستراسبورغ وجامعة روبرت شومان بستراسبورغ وكلية الحقوق والعلوم السياسية بستراسبورغ وغرفة تجارة وصناعة ستراسبورغ وباس رين وبورصة ستراسبورغ وبيت التجارة الدولي ستراسبورغ ونقابة المحامين في ستاسبورغ.
					نفتخر بتمثيل هذه الجهة العظيمة في دولة الكويت ومجلس التعاون الخليجي برئاسة المستشار الدكتور عبد الامير الفرج ممثل ورئيس فرع المحكمة الاوروبية للتحكيم بدولة الكويت. 
					يهدف فرع المحكمة في دولة الكويت الى تقديم خدمات الفصل في النزاعات عن طريق التحكيم والوساطة من خلال أكفأ المحكمين في العالم ومن جهة اخرى نقوم بتدريب وتاهيل الافراد من خلال دورات تدريبية تعقدها مقر المحكمة وفرعنا في دولة الكويت ليصبحوا اعضاء واعضاء محكمين في المحكمة وذلك بعد التدريب الكافي والتقييم.";
	$creditsTexttab="المحكمة الأوروبية";
	$TomohInstitute1="معهد الطموح للتدريب الأهلي";
	$RealestateCopy="التقييم العقاري";
	$RealestatebCopy="الوساطة العقارية";
	$Specialistdiplomatext="دبلوم تخصصي";
	$Coursesandtrainingprogramstext="الدورات والبرامج التدريبية";
	$Conferencesandexhibitionstext="المؤتمرات والمعارض";
	$Paneldiscussionsandworkshopstext="الحلقات النقاشية وورش العمل";
	$ImportantInformationtext=" معلومة تهمك !";
	$WhatsNewtext="ماهو جديدنا";
}

?>