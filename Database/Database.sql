CREATE DATABASE  IF NOT EXISTS `library_project_test` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `library_project_test`;
-- MySQL dump 10.13  Distrib 5.7.12, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: library_project_test
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.16-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `account`
--

DROP TABLE IF EXISTS `account`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `account` (
  `Student_Reg` varchar(12) NOT NULL,
  `Password` varchar(20) NOT NULL,
  PRIMARY KEY (`Student_Reg`),
  CONSTRAINT `account_ibfk_1` FOREIGN KEY (`Student_Reg`) REFERENCES `student` (`Student_Reg`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `account`
--

LOCK TABLES `account` WRITE;
/*!40000 ALTER TABLE `account` DISABLE KEYS */;
INSERT INTO `account` VALUES ('13pwcse1040','1040'),('13PWCSE1053','13PWCSE1083'),('13PWCSE1058','13PWCSE1058'),('13PWCSE1064','13PWCSE1064'),('13pwcse1068','12345'),('13PWCSE1071','13PWCSE1071'),('13PWCSE1076','13PWCSE1076'),('13pwcse1078','1234'),('13PWCSE1080','13PWCSE1080'),('13PWCSE1083','suliman'),('13PWCSE1085','13PWCSE1085'),('13PWCSE1092','13PWCSE1092'),('13PWCSE1094','13PWCSE1094'),('13pwcse1117','12345'),('13pwind0224','1234'),('14pwcse1174','1234');
/*!40000 ALTER TABLE `account` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `book`
--

DROP TABLE IF EXISTS `book`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `book` (
  `Book_Id` int(11) NOT NULL,
  `Title` varchar(300) DEFAULT NULL,
  `ISBN` varchar(13) DEFAULT NULL,
  `Author` varchar(50) DEFAULT NULL,
  `Publisher` varchar(50) DEFAULT NULL,
  `Publication_Year` varchar(4) DEFAULT NULL,
  `Book_Edition` varchar(3) DEFAULT NULL,
  `category` varchar(25) NOT NULL,
  `Book_Copy` int(5) DEFAULT NULL,
  `Description` text,
  `Preface` text,
  `Contents` text,
  `Book_Cover` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`Book_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `book`
--

LOCK TABLES `book` WRITE;
/*!40000 ALTER TABLE `book` DISABLE KEYS */;
INSERT INTO `book` VALUES (3,'Structured Programming with C++',' 978-87-403-0','Kjell BÃ¤ckman','bookboon','2007','Ist','Programming',8,'Structured Programming with C++ is intended as course material for the course Structured Programming with C/C++ at university level. It can also be used as self-learning material.\r\n\r\nEach chapter contains theoretical parts and programming examples. At the end of each chapter there is a bunch of exercises for your practice. At the end of the book you will find solutions to the exercises.\r\n','Structured Programming with C++ is intended as course material for the course Structured Programming with C/C++ at university level. It can also be used as self-learning material.\r\n\r\nEach chapter contains theoretical parts and programming examples. At the end of each chapter there is a bunch of exercises for your practice. At the end of the book you will find solutions to the exercises.\r\n','Introduction to Programming\r\nWhat Does It Mean to Program\r\nCoding\r\nCompiling and linking\r\nThe First Steps with Visual C++\r\nVariables\r\nIntroduction\r\nWhy Variables\r\nDeclaring Variables\r\nAssignment\r\nInitiating Variables\r\nConstants\r\nMore about Assignment of Values\r\nThe main function\r\nInput and Output\r\nAn Entry Program\r\nFormatted Output\r\nInvoice Program\r\nTime Conversion Program\r\nType Conversion\r\nThe Random Number Generator\r\nGame Program\r\nSummary\r\nExercises\r\n','../Uploaded_Photos/ddddddddd.jpg'),(5,'Object Oriented Programming using Java','978-87-7681-5','Simon Kendal','bookboon','2006','Ist','Programming',7,'This book will explain the Object Oriented approach to programming and through the use of small exercises, for which feedback is provided, develop some practical skills as well. At the end of the book one larger case study will be used to illustrate the application of the techniques. This will culminate in the development of a complete Java program which can be downloaded with this book. Topics covered include : Abstraction, Inheritance, Polymorphism Object Oriented Software Analysis and Design','This book aims to instil the reader with an understanding of the Object Oriented approach to programming and aims to develop some practical skills along the way. These practical skills will be developed by small exercises that the reader will be invited to undertake and the feedback that will be provided.\r\nAt the end of the book one larger case study will be described â€“ this will be used to illustrate the application of the techniques explored in the earlier chapters.','An Introduction to Object Orientated Programming\r\nA Brief History of Computing\r\nDifferent Programming Paradigms\r\nWhy use the Object Orientation Paradigm?\r\nObject Oriented Principles\r\nWhat Exactly is Object Oriented Programming?\r\nThe Benefits of the Object Oriented Programming Approach\r\nSummary\r\nThe Unified Modelling Language (UML)\r\nAn Introduction to UML\r\nUML Class diagrams\r\nUML Syntax\r\nUML Package Diagrams\r\nUML Object Diagrams\r\nUML Sequence Diagrams\r\nSummary\r\n','../Uploaded_Photos/aaaaaa.jpg'),(7,'Database Design and Implementation A practical introduction using Oracle SQL','978-87-403-10','Howard Gould','bookboon','2009','Ist','Programming',7,'his book uses a simple step by step approach to explain the essential relational database design modelling techniques, and shows how Oracle SQL can be used to implement a database. There are numerous practical exercises with feedback.\r\n\r\nKey topics include conceptual modelling using the crowâ€™s feet notation and the Unified Modelling Language (UML), logical and physical modelling, normalisation, the structured query language (SQL) and simple application development using APEX forms and reports.','This book has been written to provide a practical introduction to relational database design and database development for students studying computing-related courses and anyone else who needs to work with relational databases, either as users, designers or developers. Similarly, people who are commissioning a database may benefit from an understanding of this content.','Introduction to database development\r\nConceptual data modelling\r\nThe Entity Relationship Diagram (ERD)\r\nEntity types\r\nProducing the ERD\r\nEntity attributes\r\nEntity selection and validation\r\nEntity definitions\r\nValidating the model\r\nEntity Relationships\r\nIntroduction\r\nRelationships\r\nRelationship cardinality\r\nRelationship optionality\r\nComplex relationships\r\nIntroduction\r\nAssociative relationships\r\nLink entity identifier\r\nRecursive relationships\r\nSub types\r\nExclusive relationships\r\nSummary\r\n','../Uploaded_Photos/148408117147332.jpg'),(8,'Digital Image Processing: Part I','978-87-7681-5','Huiyu Zhou , Jiahua Wu , Jianguo Zhang','bookboon','2005','Ist','Image Processing',7,'This book (vol.1 and vol.2) introduces the fundamental theories of modern digital image processing including intensity transformations, filtering in the frequency and spatial domain, restoration, colour processing, morphological operations, and segmentation. It aims to help the students, scientists, and practitioners to understand the concepts through illustrations and examples','igital image processing is an important research area. The techniques developed in this area so far require to be summarized in an appropriate way. In this book, the fundamental theories of these techniques will be introduced. Particularly, their applications in image denoising, restoration, and segmentation will be introduced. The entire book consists of four chapters, which will be subsequently introduced.','Introduction\r\nDigital image processing\r\nPurpose of digital image processing\r\nApplication areas that use digital image processing\r\nComponents of an image processing system\r\nVisual perception\r\nImage acquisition\r\nImage sampling and quantization\r\nBasic relationship between pixels\r\nSummary\r\nReferences\r\nProblems\r\nIntensity transformations and spatial filtering\r\nPreliminaries\r\nBasic Intensity Transformation Functions\r\nHistogram Processing\r\nFundamentals of Spatial Filtering\r\nSmoothing Spatial Filters\r\nSharpening filters\r\n','../Uploaded_Photos/imp.jpg'),(9,'Digital Image Processing: Part II',' 978-87-7681-','Huiyu Zhou , Jiahua Wu , Jianguo Zhang','bookboon','2009','Ist','Image Processing',7,'This book (vol.1 and vol.2) introduces the fundamental theories of modern digital image processing including intensity transformations, filtering in the frequency and spatial domain, restoration, colour processing, morphological operations, and segmentation. It aims to help the students, scientists, and practitioners to understand the concepts through illustrations and examples','Digital image processing is an important research area. The techniques developed in this area so far require to be summarized in an appropriate way. In this book, the fundamental theories of these techniques will be introduced. Particularly, their applications in the image enhancement are briefly summarized. The entire book consists of three chapters, which will be subsequently introduced.','Colour Image Processing\r\nColour Fundamentals\r\nColour Space\r\nColour Image Processing\r\nSmoothing and sharpening\r\nImage segmentation\r\nColour Image Compression\r\nSummary\r\nReferences\r\nProblems\r\nMorphological Image Processing\r\nMathematical morphology\r\nDilation and Erosion\r\nOpening and closing\r\nHit-or-miss\r\nThinning and thicken\r\nSkeleton\r\nPruning\r\nMorphological reconstruction\r\nSummary\r\nReferences and further reading\r\nProblems\r\nImage Segmentation\r\nIntroduction\r\nImage pre-processing â€“ correcting image defects\r\nThresholding\r\n','../Uploaded_Photos/imp222.jpg'),(15,'Introduction to Electronic Engineering','978-87-7681-5','Valery Vodovozov','bookboon','2009','Ist','Electronics',7,'This work introduces a reader to the basics of electronic engineering. The book is recommended for those who study electronics. Here, students may get their first knowledge of electronic concepts and basic components. Emphasis is on the devices used in day-to-day consumer electronic products. Therefore, semiconductor components diodes, transistors, and thyristors are discussed in the first step. Next, the most common electronic circuits, such as analogue, differential and operation amplifiers.','Electronics is a science about the devices and processes that use electromagnetic energy conversion to transfer, process, and store energy, signals and data in energy, control, and computer systems. This science plays an important role in the world progress. Implementation of electronic devices in various spheres of human activity largely contributes to the successful development of complex scientific and technical problems, productivity increase of physical and mental labour.','Introduction\r\nSemiconductor Devices\r\nSemiconductors\r\nDiodes\r\nTransistors\r\nThyristors\r\nElectronic Circuits\r\nCircuit Composition\r\nAmplifiers\r\nSupplies and References\r\nSwitching Circuits\r\nThis website uses cookies to improve user experience. By using our website you consent to all cookies in accordance with EU regulation.  I agree\r\n','../Uploaded_Photos/EEE.jpg'),(18,'Essential Engineering Mathematics','978-87-7681-7','Michael Batty','bookboon','2008','Ist','Mathematics',7,'This textbook covers topics such as functions, single variable calculus, multivariate calculus, differential equations and complex functions. The necessary linear algebra for multivariate calculus is also outlined. More advanced topics which have been omitted, but which you will certainly come across, are partial differential equations, Fourier transforms and Laplace transforms.','This book is partly based on lectures I gave at NUI Galway and Trinity College Dublin between 1998 and 2000. It is by no means a comprehensive guide to all the mathematics an engineer might encounter during the course of his or her degree. The aim is more to highlight and explain some areas commonly found difficult, such as calculus, and to ease the transition from school level to university level mathematics, where sometimes the subject matter is similar, but the emphasis is usually different. ','Preliminaries\r\nNumber Systems: The Integers, Rationals and Reals\r\nWorking with the Real Numbers\r\nComplex Numbers\r\nVectors and Matrices\r\nVectors\r\nMatrices and Determinants\r\nSystems of Linear Equations and Row Reduction\r\nBases\r\nEigenvalues and Eigenvectors\r\nFunctions and Limits\r\nFunctions\r\nLimits\r\nContinuity\r\nCalculus of One Variable Part 1: Differentiation\r\nDerivatives\r\nThe Chain Rule\r\nSome Standard Derivatives\r\nDierentiating Inverse Functions\r\nImplicit Differentiation\r\nLogarithmic Differentiation\r\nHigher Derivatives','../Uploaded_Photos/EMM.jpg'),(20,'Concepts in Electric Circuits',':978-87-76814','Dr. Wasif Naeem','bookboon','2009','Ist','Electronics',7,'This book covers fundamental aspects of electric circuits that form the core of many engineering disciplines. In particular, basic circuit elements and their characteristics are presented when connected in an electric network. In addition, techniques to analyse and solve electric circuits are explained in a simple manner and examples are shown to demonstrate each strategy. DC as well as AC circuit analysis is provided with a brief account of filters in the end.','This book on the subject of electric circuits forms part of an interesting initiative taken by Ventus Publishing. The material presented throughout the book includes rudimentary learning concepts many of which are mandatory for various engineering disciplines including chemical and mechanical. Hence there is potentially a wide range of audience who could be benefitted.','Introduction\r\nContents of the Book\r\nCircuit Elements and Sources\r\nIntroduction\r\nCurrent\r\nVoltage or Potential Difference\r\nCircuit Loads\r\nSign Convention\r\nPassive Circuit Elements\r\nDC Sources\r\nPower\r\nEnergy\r\nCircuit Theorems\r\nIntroduction\r\nDefinitions and Terminologies\r\nKirchoffâ€™s Laws\r\nElectric Circuits Analysis\r\nSuperposition Theorem\r\nThÃ©veninâ€™s Theorem\r\nNortonâ€™s Theorem\r\nSource Transformation\r\nMaximum Power Transfer Theorem\r\nAdditional Common Circuit Configurations\r\nMesh and Nodal Analysis by Inspection','../Uploaded_Photos/EEE.jpg'),(21,'Introduction to Complex Numbers','9788740311105','Christopher C. Tisdell','bookboon','2006','Ist','Mathematics',7,'his ebook makes learning \"complex\" numbers easy through an interactive, fun and personalized approach. Features include: live YouTube video streams and closed captions that translate to 90 languages!\r\n\r\nComplex numbers \"break all the rules\" of traditional mathematics by allowing us to take a square root of a negative number. This \"radical\" approach has fundamentally changed the capabilities of science and engineering to enhance our world through such applications as: signal processing.','Complex numbers \"break all the rules\" of traditional mathematics by allowing us to take a square root of a negative number. This \"radical\" approach has fundamentally changed the capabilities of science and engineering to enhance our world through such applications as: signal processing, control theory, electromagnetism, fluid dynamics, quantum mechanics, cartography, and vibration analysis. A particularly beautiful connection between art and complex numbers lies in fractals.','What is a complex number?\r\nVideo 1: Complex numbers are AWESOME\r\nBasic operations involving complex numbers\r\nVideo 2: How to add/subtract two complex numbers\r\nVideo 3: How to multiply a real number with a complex number\r\nVideo 4: How to multiply complex numbers together\r\nVideo 5: How to divide complex numbers\r\nVideo 6: Complex numbers: Quadratic formula\r\nWhat is the complex conjugate?\r\nVideo 7: What is the complex conjugate?\r\nVideo 8: Calculations with the complex conjugate\r\nVideo 9: How to show a number ','../Uploaded_Photos/CV2.jpg'),(22,'Engineering Fluid Mechanics','9788740301114','Prof. T.T. Al-Shemmeri','bookboon','2007','Ist','Mechanical',7,'Fluid Mechanics is an essential subject in the study of the behaviour of fluids equally when at rest and when in motion whether a house hold application such as the mains water supply, the natural gas supply or industrial such as the design of the body of an automotive car, airplane, train or the provision of electricity from a hydropower plant.','The book tackles the many laws and principles in a very clear and easy way describing the pertinent parameters that control the particular situation. The book is complimented by many worked examples, tutorial problems to help students get further practice in problem solving, a typical examination paper, and finally presents a case study of a typical hydropower plant.','Fluid Statics\r\nFluid Properties\r\nPascalâ€™s Law\r\nFluid-Static Law\r\nPressure Measurement\r\nCentre of pressure & the Metacentre\r\nResultant Force and Centre of Pressure on a Curved Surface in a Static Fluid\r\nBuoyancy\r\nStability of floating bodies\r\nTutorial problems\r\nInternal Fluid Flow\r\nDefinitions\r\nConservation of Mass\r\nConservation of Energy\r\nFlow Measurement\r\nFlow Regimes\r\nDarcy Formula\r\nThe Friction factor and Moody diagram\r\nFlow Obstruction Losses\r\nFluid Power\r\nFluid Momentum\r\nTutorial Problems','../Uploaded_Photos/EF2.jpg'),(24,'Electrical Power','9788740307528','W. J. R. H. Pooler','bookboon','2006','3rd','Electronics',7,'The book defines the units of electrical quantities from first principles. Methods are demonstrated for calculating voltage, current, power, impedances and magnetic forces in dc and ac circuits and in machines and other electrical plant. The vector representation of ac quantities is explained. Typical arrangements of electrical power networks are described. Methods for calculating fault currents and for the automatic isolation of faulty equipment are described.','The book defines the units of electrical quantities from first principles. Methods are demonstrated for calculating voltage, current, power, impedances and magnetic forces in dc and ac circuits and in machines and other electrical plant. The vector representation of ac quantities is explained. Typical arrangements of electrical power networks are described. Methods for calculating fault currents and for the automatic isolation of faulty equipment are described.','Summary\r\nElectromagnetism and Electrostatics\r\nInduced EMF\r\nDC Circuits\r\nAlternating Current (AC)\r\nResistance, Inductance and Capacitance on AC\r\nAC Circuits\r\nMagnetic Properties of Materials\r\nDC Motors and Generators\r\nAC Synchronous Machines\r\nAC Induction Motors\r\nInsulation\r\nTransformers\r\nRectifi ers\r\nPower Lines\r\nNeutral Earthing\r\nSwitchgear\r\nInstruments\r\nProtection\r\nPower Systems\r\nGenerator Response to System Faults\r\nCalculation of Fault Currents\r\nSymetrical Components\r\nCommissioning Electrical Plant\r\nProgram Manual','../Uploaded_Photos/EOP2.jpg'),(25,'Heat Transfer',' 978877681432','Chris Long , Naser Sayma','bookboon','2008','Ist','Mechanical',7,'This book explains the basic modes of heat transfer namely conduction, convection and radiation. Fundamental mathematical models representing the heat transfer modes are introduced and application engineering problems are discussed. The principles of heat exchangers operation are covered as well.','Energy is defined as the capacity of a substance to do work. It is a property of the substance and it can be transferred by interaction of a system and its surroundings. The student would have encountered these interactions during the study of Thermodynamics. However, Thermodynamics deals with the end states of the processes and provides no information on the physical mechanisms that caused the process to take place. Heat Transfer is an example of such a process.','Introduction\r\nHeat Transfer Modes\r\nSystem of Units\r\nConduction\r\nConvection\r\nRadiation\r\nSummary\r\nMultiple Choice assessment\r\nConduction\r\nThe General Conduction Equation\r\nOne-Dimensional Steady-State Conduction in Radial Geometries:\r\nFins and Extended Surfaces\r\nSummary\r\nMultiple Choice Assessment\r\nConvection\r\nThe convection equation\r\nFlow equations and boundary layer\r\nDimensional analysis\r\nForced Convection relations\r\nNatural convection\r\nSummary\r\nMultiple Choice Assessment\r\nRadiation\r\nIntroduction\r\nRadiative Properties','../Uploaded_Photos/HT2.jpg'),(26,'Control Engineering An introduction with the use of Matlab','9788740304732','Derek P. Atherton','bookboon','2011','2nd','Image Processing',7,'he book covers the basic aspects of linear single loop feedback control theory. Explanations of the mathematical concepts used in classical control such as root loci, frequency response and stability methods are explained by making use of MATLAB plots but omitting the detailed mathematics found in many textbooks. There is a chapter on PID control and two chapters provide brief coverage of state variable methods','It is almost four years since the first edition of this book so it seemed appropriate to reread it carefully again and make any suitable changes. Also during the intervening period I have added two further bookboon books one on â€˜An Introduction to Nonlinearity in Control Systemsâ€™ and another very recently on â€˜Control Engineering Problems with Solutionsâ€™.','Introduction\r\nWhat is Control Engineering?\r\nContents of the Book\r\nReferences\r\nMathematical Model Representations of Linear Dynamical Systems\r\nIntroduction\r\nThe Laplace Transform and Transfer Functions\r\nState space representations\r\nMathematical Models in MATLAB\r\nInterconnecting Models in MATLAB\r\nReference\r\nTransfer Functions and Their Responses\r\nIntroduction\r\nStep Responses of Some Specific Transfer Functions\r\nResponse to a Sinusoid\r\nFrequency Responses and Their Plotting\r\nIntroduction\r\nBode Diagram\r\nNyquist Plot','../Uploaded_Photos/CE.jpg'),(28,'Introduction to Vectors YouTube classes with Dr Chris Tisdell',' 978874030823','Christopher C. Tisdell','bookboon','2006','Ist','Mathematics',7,'\"Introduction to Vectors\" takes learning to a new level by combining written notes with online video. Each lesson is linked with a YouTube video from award-winning teacher and best-selling author Dr Chris Tisdell, where he explains the material in an inspiring and engaging way. Vectors provide a fascinating tool to describe motion and forces in physics and engineering. They also provide a simple framework for understanding geometry.','This workbook is designed to be used in conjunction with the authorâ€™s free online video tutorials. Inside this workbook each chapter is divided into learning modules (subsections), each having its own dedicated video tutorial.\r\n\r\nView the online video via the hyperlink located at the top of the page of each learning module, with workbook and paper or tablet at the ready. Or click on the Introduction to Vectors playlist where all the videos for the workbook are located in chronological order:\r\n','The basics of vectors\r\nGeometry of vectors\r\nBut, what is a vector?\r\nHow big are vectors?\r\nDetermine the vector from one point to another point\r\nVectors in Three Dimensions\r\nParallel vectors and collinear points example\r\nVectors and collinear points example\r\nDetermine the point that lies on vector: an example\r\nLines and vectors\r\nLines and vectors\r\nLines in R3\r\nLines: Cartesian to parametric form\r\nLines: Parametric and Cartesian forms given two points\r\nLines: Convert Parametric to Cartesian\r\nCartesian to paramet','../Uploaded_Photos/V.jpg'),(29,'Introduction to Power Electronics','9788776816254','Valery Vodovozov','bookboon','2009','1','Electronics',7,'Power Electronics is the technology associated with efficient conversion, control and conditioning of electric power from its available input into the desired electrical output form. The field of the book is concerned of electrical power processing using electronic devices the key component of which is a switching power converter.','Power Electronics is the technology associated with efficient conversion, control and conditioning of electric power from its available input into the desired electrical output form. The field of the book is concerned of electrical power processing using electronic devices the key component of which is a switching power converter.\r\n\r\nPower electronics has found an important place in modern technology being a core of power and energy control. Almost all the new electrical and electromechanical equi','Power Electronic Converters\r\nAC/DC Converters â€“ Rectifiers\r\nDC/AC Converters â€“ Inverters\r\nAC/AC Converters â€“ Changers\r\nDC/DC Converters â€“ Choppers\r\nPower Electronic Controls\r\nPhase Modulation\r\nBlock Modulation\r\nPulse-Width Modulation\r\nSpace Vector Modulation\r\nIndex','../Uploaded_Photos/EP.jpg'),(30,'A First Course in Fluid Mechanics for Engineers','9788740300697','Buddhi N. Hewakandamby','bookboon','2010','Ist','Mechanical',7,'A good knowledge of Fluid mechanics is essential for Chemical, Mechanical and Civil engineers. As a result it is taught at a very early stage in degree courses on those disciplines.\r\n\r\nA First Course in Fluid Mechanics covers the basics of the engineering fluid mechanics without delving into deeper more mathematical concepts.','Building from most basic concepts such as physical properties of fluids, it covers the topics in fluid statics and dynamics. Hydrostatic pressure, buoyancy and forces on immersed bodies are discussed under fluid statics.\r\n\r\nUnder fluid dynamics, Bernoulliâ€™s principle is introduced. Furthermore, the nature of fluid flows is discussed in engineering context. Laminar and turbulent flows in pipes are explained in detail.\r\n','Physics of Fluids\r\nIntroduction\r\nNature of fluids\r\nFluid as a continuum\r\nProperties of fluids\r\nFluid Mechanics\r\nReferences\r\nFluid Statics\r\nIntroduction\r\nPressure\r\nPressure at a point\r\nPressure variation in a static fluid\r\nPressure and head\r\nUse of hydraulic pressure\r\nBuoyancy\r\nForce on immersed plates\r\nReferences\r\nDimensional analysis\r\nIntroduction\r\nDimensional homogeneity\r\nBuckinghamâ€™ Pi theorem\r\nUses of dimensional analysis','../Uploaded_Photos/EF22.jpg'),(31,'Electromagnetism for Electronic Engineers',' 978877681465','Richard Carter','bookboon','2000','Ist','Electronics',7,'This introduction to electromagnetic theory emphasises on applications in electronic engineering. The book explores the relationship between fundamental principles and the idealisations of electric circuit theory. Attention is drawn to the effects of parasitic capacitance and inductance, to electromagnetic screening and to the effects of propagation delay. The text includes numerical and approximate methods for calculating resistance capacitance and inductance.','Electromagnetism is fundamental to the whole of electrical and electronic engineering. It provides the basis for understanding the uses of electricity and for the design of the whole spectrum of devices from the largest turbo-alternators to the smallest microcircuits. This subject is a vital part of the education of electronic engineers. Without it they are limited to understanding electronic circuits in terms of the idealizations of circuit theory.','Electrostatics in free space\r\nThe inverse square law of force between two electric charges\r\nThe electric field\r\nGaussâ€™ theorem\r\nThe differential form of Gaussâ€™ theorem\r\nElectrostatic potential\r\nCalculation of potential in simple cases\r\nCalculation of the electric field from the potential\r\nConducting materials in electrostatic fields\r\nThe method of images\r\nLaplaceâ€™s and Poissonâ€™s equations\r\nThe finite difference method\r\nSummary\r\nDielectric materials and capacitance\r\nInsulating materials in electric fields','../Uploaded_Photos/EEE22.jpg'),(32,'Chemical Thermodynamics','9788776814977','Leo Lue','bookboon','2001','Ist','Mechanical',7,'This study guide deals with the application of thermodynamics to the description of the properties of materials. It covers the qualitative behavior of single and multicomponent mixtures, including vapor-liquid, liquid-liquid, and solid-liquid phase equilibria. It also explains the use of activity coefficient models and equations of state for the quantitative prediction of phase behavior and chemical reaction equilibria.','This study guide deals with the application of thermodynamics to the description of the properties of materials. It covers the qualitative behavior of single and multicomponent mixtures, including vapor-liquid, liquid-liquid, and solid-liquid phase equilibria. It also explains the use of activity coefficient models and equations of state for the quantitative prediction of phase behavior and chemical reaction equilibria. ','ntroduction\r\nBasic concepts\r\nBrief review of thermodynamics\r\nThe fundamental equation of thermodynamics\r\nThe calculus of thermodynamics\r\nOpen systems\r\nLegendre transforms and free energies\r\nSingle component systems\r\nGeneral phase behavior\r\nConditions for phase equilibrium\r\nThe Clapeyron equation\r\nMulticomponent systems\r\nThermodynamics of multicomponent systems\r\nBinary mixtures\r\nTernary mixtures','../Uploaded_Photos/CT.jpg'),(33,'Building Information Modeling',' 978874031109','Yusuf Arayici','bookboon','2006','Ist','Mathematics',7,'Building Information Modelling (BIM) is often misinterpreted by practitioners and researchers as REVIT or ArchiCAD since these tools are introduced as BIM by the software vendors. Yet, BIM is much more than a software tool. It is actually more about process and people than it is about technology. The e-book provides a detailed and complete perception for BIM to conceive it correctly by practitioners and researchers. It covers technology.','Building Information Modelling (BIM) is often misinterpreted by practitioners and researchers as REVIT or ArchiCAD since these tools are introduced as BIM by the software vendors. Yet, BIM is much more than a software tool. It is actually more about process and people than it is about technology. The e-book provides a detailed and complete perception for BIM to conceive it correctly by practitioners and researchers. It covers technology.','ntroduction to BIM\r\nIntroduction\r\nThe construction industry and its challenges\r\nOrigins of BIM\r\nSo what is building information modelling?\r\nOverview of requirements for UK government level 2 BIM\r\nConclusion\r\nReferences\r\nBIM Tools and Technologies\r\nIntroduction\r\nCAD technologies\r\nParametric modelling technologies\r\nBIM Tools\r\nReview Of Major BIM Tools In The Aec Industry\r\nBIM Library\r\nInteroperability\r\nFree BIM Tools\r\nReferences','../Uploaded_Photos/BI.jpg'),(34,'Industrial Automation','9788740300048','IDC Technologies','bookboon','2009','Ist','Electronics',7,'This highly popular Engineering Pocket Guide is crammed full of up-to-date, handy hints and technical information for engineers and technicians.\r\n\r\nIt has been designed to serve as quick and easy reference books that can be kept conveniently on your desk, in your pocket or in your briefcase.','This highly popular Engineering Pocket Guide is crammed full of up-to-date, handy hints and technical information for engineers and technicians.\r\n\r\nIt has been designed to serve as quick and easy reference books that can be kept conveniently on your desk, in your pocket or in your briefcase.','Introduction\r\nI&C Drawings and Documentation\r\nIntroduction to Plant Design\r\nProcess diagrams\r\nInstrumentation documentation\r\nElectrical documentation\r\nProcess control\r\nBasic Control Concepts\r\nPrinciples of Control Systems\r\nControl modes in closed loop control\r\nTuning of Closed Loop Control\r\nCascade Control\r\nInitialization of a cascade system\r\nFeed forward Control\r\nManual feedforward control\r\nAutomatic feedforward\r\nTime matching as feedforward control\r\nOvercoming Process dead time','../Uploaded_Photos/IA.jpg'),(35,'Concise Hydraulics','9788776813963','Prof. Dawei Han','bookboon','2011','Ist','Mechanical',7,'This is an introductory book on hydraulics that covers the fundamental theories (continuity, energy and momentum equations), hydrostatics, pipe flow, physical modelling (dimensional analysis and similarity), open channel flow, uniform flow, channel design, critical flow, rapidly varied flow, hydraulic jump, hydraulic structures, gradually varied flow, computation of flow profile, unsteady flow and hydraulic machinery (pump and turbine). ','Hydraulics is a branch of scientific and engineering discipline that deals with the mechanical properties of fluids, mainly water. It is widely applied in many civil and environmental engineering systems (water resources management, flood defence, harbour and port, bridge, building, environment protection, hydropower, irrigation, ecosystem, etc). This is an introductory book on hydraulics and written for undergraduate students in civil and environmental engineering, environmental science.','Fundamentals\r\nProperties of Fluids\r\nFlow Description\r\nFundamental Laws of Physics\r\nHydrostatics\r\nPressure\r\nManometer\r\nPressure Force on Plane Surface\r\nPressure Force on Curved Surface\r\nFlotation\r\nEnergy Equation\r\nBasic Formula\r\nApplications\r\nMomentum Equation\r\nThe Principle\r\nApplications','../Uploaded_Photos/CH.jpg'),(45,'hIVVFW','1424255','SGDGD','DGVDSG','1424','1','category2',10,'SBSVZSFG','SDFGS','BSGSGH','../Uploaded_Photos/HBUH.jpg');
/*!40000 ALTER TABLE `book` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `borrow`
--

DROP TABLE IF EXISTS `borrow`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `borrow` (
  `Student_Reg` varchar(12) NOT NULL,
  `Book_Id` int(11) NOT NULL,
  `Issue_Date` date DEFAULT NULL,
  `Return_Date` date DEFAULT NULL,
  `Fine` int(11) DEFAULT '0',
  `Fine_Reason` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`Student_Reg`,`Book_Id`),
  KEY `Book_Id` (`Book_Id`),
  CONSTRAINT `borrow_ibfk_1` FOREIGN KEY (`Student_Reg`) REFERENCES `student` (`Student_Reg`),
  CONSTRAINT `borrow_ibfk_2` FOREIGN KEY (`Book_Id`) REFERENCES `book` (`Book_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `borrow`
--

LOCK TABLES `borrow` WRITE;
/*!40000 ALTER TABLE `borrow` DISABLE KEYS */;
INSERT INTO `borrow` VALUES ('13pwcse1068',3,'2017-01-17','2017-05-21',200,'Shlawali ye de.'),('13pwcse1068',5,'2017-01-17',NULL,0,NULL),('13pwcse1068',8,'2017-01-17','2017-01-17',100,'Missing Pages'),('13pwcse1117',3,'2017-04-23','2017-05-21',200,'Shlawali ye de.'),('13pwind0224',3,'2017-05-21','2017-05-21',200,'Shlawali ye de.'),('14pwcse1174',15,'2017-04-16','2017-04-16',0,'');
/*!40000 ALTER TABLE `borrow` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `student` (
  `Student_Reg` varchar(12) NOT NULL,
  `Student_Name` varchar(50) NOT NULL,
  `Section` varchar(1) DEFAULT NULL,
  `Semester` varchar(3) DEFAULT NULL,
  `Batch_Number` int(11) DEFAULT NULL,
  `Mobile` varchar(11) DEFAULT NULL,
  `Profile_Picture` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`Student_Reg`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `student`
--

LOCK TABLES `student` WRITE;
/*!40000 ALTER TABLE `student` DISABLE KEYS */;
INSERT INTO `student` VALUES ('13pwcse1040','Habib','A','8th',16,'123456789','../Uploaded_Photos/habib.JPG'),('13PWCSE1053','Sadam Hussain','A','7th',15,'1111111','../Uploaded_Photos/1.jpg'),('13PWCSE1058','M.Faisal','A','7th',15,'1111111','../Uploaded_Photos/12642740_764366110336286_633106551016461258_n.jpg'),('13PWCSE1064','Yasir Muhmood','A','7th',15,'11111',''),('13pwcse1068','Azaz','A','7th',15,'0333333333','../Uploaded_Photos/azaz.JPG'),('13PWCSE1071','M.Adnan','A','7th',15,'11111','../Uploaded_Photos/15822758_1881732792055875_5898855664206294104_n.jpg'),('13PWCSE1076','Adnan Sikandar','A','7th',15,'222222','../Uploaded_Photos/15697655_1394336117257224_5705234797706822500_n.jpg'),('13pwcse1078','Irfan','A','8th',15,'03125969595','../Uploaded_Photos/ii.JPG'),('13PWCSE1080','H.Ahmad','A','7th',15,'333333',''),('13PWCSE1083','Muhammad Suliman','A','7th',15,'12345678901','../Uploaded_Photos/Software Zone (2).jpg'),('13PWCSE1085','Salman Khan','A','7th',15,'4444','../Uploaded_Photos/15826341_1729370610712596_8852926029560864263_n.jpg'),('13PWCSE1092','Hamza','A','7th',15,'3333','../Uploaded_Photos/15822758_1881732792055875_5898855664206294104_n.jpg'),('13PWCSE1094','Sikandar Bin Mukaram','A','7th',15,'4444','../Uploaded_Photos/15241215_1188745321202322_5640335852241807560_n.jpg'),('13pwcse1117','Fahad Pirzada','C','8th',15,'03139857111','../Uploaded_Photos/mafia-model.jpg'),('13pwind0224','Irfan','A','8th',13,'+9231212312','../Uploaded_Photos/ii.JPG'),('14pwcse1174','Bakth Munir','A','6th',16,'03469550359','../Uploaded_Photos/mafia-model.jpg');
/*!40000 ALTER TABLE `student` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'library_project_test'
--

--
-- Dumping routines for database 'library_project_test'
--
/*!50003 DROP PROCEDURE IF EXISTS `Add_Book` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_unicode_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `Add_Book`(IN `B_Id` INT, IN `B_Title` VARCHAR(300), IN `B_ISBN` VARCHAR(50), IN `B_Author` VARCHAR(50), IN `B_Publisher` VARCHAR(50), IN `Pub_Year` VARCHAR(4), IN `B_Edition` VARCHAR(3), IN `B_Copy` INT(5), IN `B_Description` TEXT, IN `B_Preface` TEXT, IN `B_Contents` TEXT, IN `B_Cover` VARCHAR(200), IN `B_Cat` VARCHAR(25))
BEGIN

		INSERT INTO Book

        VALUES(B_Id, B_Title, B_ISBN, B_Author,B_Publisher, Pub_Year, B_Edition,B_Cat, B_Copy, B_Description, B_Preface, B_Contents, B_Cover);

END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `Add_Fine` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_VALUE_ON_ZERO' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `Add_Fine`(`St_Reg` VARCHAR(12), `B_Id` INT, `Fine_Amount` INT, `F_Reason` VARCHAR(100), `Book_Cond_New` VARCHAR(5))
BEGIN
	  SET @REG = St_Reg;
      SET @BOOKID = B_Id;
      SET @FINE   = Fine_Amount;
      SET @FINE_REASON = F_Reason;
      SET @BOOK_CONDITION = Book_Cond_New;
      
      UPDATE Borrow SET Fine = @FINE, Fine_Reason= @FINE_REASON WHERE Student_Reg = @REG AND Book_id = @BOOKID;
      
            UPDATE Book SET  Book_Condition = @BOOK_CONDITION WHERE Book_Id = @BOOKID;
      
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `Add_Student` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_unicode_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `Add_Student`(IN `Student_Reg` VARCHAR(12), IN `Student_Name` VARCHAR(50), IN `Section` VARCHAR(3), IN `Semester` VARCHAR(3), IN `Batch_Number` INT(11), IN `Mobile` VARCHAR(11), IN `Profile_Picture` VARCHAR(200), IN `Pass` VARCHAR(20))
BEGIN



	INSERT INTO Student VALUES (Student_Reg,Student_Name, Section, Semester, Batch_Number, Mobile , Profile_Picture);



	INSERT INTO account VALUES (Student_Reg, Pass) ;

END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `Get_Book_Details` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_unicode_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `Get_Book_Details`(IN `B_ID` INT)
BEGIN



SET @B_ID = B_ID;



SET @Q ='SELECT * FROM book WHERE Book_id=?';



PREPARE stmt FROM @Q;

EXECUTE stmt using @B_ID;

DEALLOCATE PREPARE stmt; 



END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `Get_Student_Details` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_unicode_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `Get_Student_Details`(IN `St_Reg` VARCHAR(12))
BEGIN

SET @Student_ID = St_Reg;



SET @Q ='SELECT * FROM student WHERE Student_Reg=?';



PREPARE Stmt FROM @Q;

EXECUTE Stmt using @Student_ID;

DEALLOCATE PREPARE stmt; 

END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `Issue_Book` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_unicode_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `Issue_Book`(IN `Student_Reg` VARCHAR(12), IN `Book_Id` INT, IN `B_Copy` INT)
BEGIN

	  SET @REG = Student_Reg;

      SET @BOOKID = Book_Id;

      SET @BOOKCOPY = B_Copy-1 ;

      SET @IDATE = DATE(NOW()) ;

      

	  INSERT INTO Borrow VALUE(@REG, @BOOKID,@IDATE, NULL,0, NULL);

      

      UPDATE book set Book_Copy = @BOOKCOPY WHERE Book_Id = @BOOKID ;

      

END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `Return_Book` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_unicode_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `Return_Book`(IN `Student_Reg` VARCHAR(12), IN `B_Id` INT(11), IN `B_Fine` INT(11), IN `B_Fine_Reason` VARCHAR(100), IN `B_Copy` INT)
BEGIN

	  SET @REG = Student_Reg;

      SET @BOOKID = B_Id;

      SET @FINE = B_Fine ;

      SET @FINE_REASON = B_Fine_Reason ;

      SET @BOOKCOPY = B_Copy ;

      

	  UPDATE Borrow SET 

      Return_Date = DATE(NOW()),

      Fine = @FINE,

      Fine_Reason = @FINE_REASON WHERE Student_Reg = @REG AND Book_Id= @BOOKID;

      

      UPDATE book SET
      Book_Copy = @BOOKCOPY WHERE Book_Id= @BOOKID ;

END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-07-15 23:19:07
