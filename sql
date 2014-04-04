-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Erstellungszeit: 02. Apr 2014 um 18:51
-- Server Version: 5.5.27
-- PHP-Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Datenbank: `gsk`
--
-- --------------------------------------------------------
--
-- Tabellenstruktur für Tabelle `etiketten`
--

CREATE TABLE IF NOT EXISTS `etiketten` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `_SAP_C050_ID` text NOT NULL,
  `_SAP_WF_Request_ID` text NOT NULL,
  `_MD_Ok_ID` text NOT NULL,
  `_Description_ID` text NOT NULL,
  `_Country_ID` text NOT NULL,
  `_Dimension_ID` text NOT NULL,
  `_Film_ID` text NOT NULL,
  `_Varnish_ID` text NOT NULL,
  `_Drawing_ID` text NOT NULL,
  `_Pharma_Code_ID` text NOT NULL,
  `_Visual_Code_ID` text NOT NULL,
  `_Priority_ID` text NOT NULL,
  `_Comment_ID` text NOT NULL,
  `_NPLCC_Contact_ID` text NOT NULL,
  `_PCA_Contact_ID` text NOT NULL,
  `_MLCC_Contact_ID` text NOT NULL,
  `_CR_Code_ID` text NOT NULL,
  `Date_CR_Initiated_ID` text NOT NULL,
  `_Code_CO_ID` text NOT NULL,
  `Date_CO_Initiated_ID` text NOT NULL,
  `Date_DRD_Targeted_ID` text NOT NULL,
  `Date_DRD_Achieved_ID` text NOT NULL,
  `_Actual_Status_ID` text NOT NULL,
  `Date_SD_Closed_ID` text NOT NULL,
  `_MDM_Contact_ID` text NOT NULL,
  `Date_SDC_ID` text NOT NULL,
  `Date_Activate_Site_BOM_ID` text NOT NULL,
  `_Remarks_ID` text NOT NULL,
  `_Remarks2_ID` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Daten für Tabelle `etiketten`
--

INSERT INTO `etiketten` (`ID`, `_SAP_C050_ID`, `_SAP_WF_Request_ID`, `_MD_Ok_ID`, `_Description_ID`, `_Country_ID`, `_Dimension_ID`, `_Film_ID`, `_Varnish_ID`, `_Drawing_ID`, `_Pharma_Code_ID`, `_Visual_Code_ID`, `_Priority_ID`, `_Comment_ID`, `_NPLCC_Contact_ID`, `_PCA_Contact_ID`, `_MLCC_Contact_ID`, `_CR_Code_ID`, `Date_CR_Initiated_ID`, `_Code_CO_ID`, `Date_CO_Initiated_ID`, `Date_DRD_Targeted_ID`, `Date_DRD_Achieved_ID`, `_Actual_Status_ID`, `Date_SD_Closed_ID`, `_MDM_Contact_ID`, `Date_SDC_ID`, `Date_Activate_Site_BOM_ID`, `_Remarks_ID`, `_Remarks2_ID`) VALUES
(1, 'SAP', 'Request', 'MD', 'A Description', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `inhaltdaten`
--

CREATE TABLE IF NOT EXISTS `inhaltdaten` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Verfasser` text NOT NULL,
  `AenderungsDatum` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Inhalt` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `kalenderdaten`
--

CREATE TABLE IF NOT EXISTS `kalenderdaten` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Verfasser` text NOT NULL,
  `AenderungsDatum` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Inhaltsdatum` date NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
