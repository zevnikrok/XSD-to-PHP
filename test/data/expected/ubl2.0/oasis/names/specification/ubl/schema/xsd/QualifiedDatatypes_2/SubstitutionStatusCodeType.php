<?php
namespace oasis\names\specification\ubl\schema\xsd\QualifiedDatatypes_2;

use un\unece\uncefact\data\specification\UnqualifiedDataTypesSchemaModule\_2;
/**
 * @xmlNamespace urn:oasis:names:specification:ubl:schema:xsd:QualifiedDatatypes-2
 * @xmlType CodeType
 * @xmlName SubstitutionStatusCodeType
 * @xmlDictionaryEntryName Substitution Status_ Code. Type
 * @xmlVersion 2.0
 * @xmlDefinition The set of values that indicate the status of an OrderItem in relation to substitution, denoting an acceptable substitute in the Order, an original for which an alternative is offered in the Order Confirmation, or an original for which an actual replacement is advised in the Despatch Advice.
 * @xmlRepresentationTerm Code
 * @xmlQualifierTerm Substitution Status
 */
class SubstitutionStatusCodeType
	extends _2\CodeType
	{

	
	/**
	 * @Name Substitution Status_ Code List. Identifier
	 * @Definition 
	 * @PrimitiveType String
	 * @xmlType attribute
	 * @xmlNamespace 
	 * @xmlMinOccurs 
	 * @xmlMaxOccurs 
	 * @xmlName listID
	 * @var xsd:normalizedString
	 */
	public $listID;
	/**
	 * @Name Substitution Status_ Code List. Agency. Identifier
	 * @Definition 
	 * @PrimitiveType String
	 * @xmlType attribute
	 * @xmlNamespace 
	 * @xmlMinOccurs 
	 * @xmlMaxOccurs 
	 * @xmlName listAgencyID
	 * @var xsd:normalizedString
	 */
	public $listAgencyID;
	/**
	 * @Name Substitution Status_ Code List. Agency Name. Text
	 * @Definition 
	 * @PrimitiveType String
	 * @xmlType attribute
	 * @xmlNamespace 
	 * @xmlMinOccurs 
	 * @xmlMaxOccurs 
	 * @xmlName listAgencyName
	 * @var xsd:string
	 */
	public $listAgencyName;
	/**
	 * @Name Substitution Status_ Code List. Name. Text
	 * @Definition 
	 * @PrimitiveType String
	 * @xmlType attribute
	 * @xmlNamespace 
	 * @xmlMinOccurs 
	 * @xmlMaxOccurs 
	 * @xmlName listName
	 * @var xsd:string
	 */
	public $listName;
	/**
	 * @Name Substitution Status_ Code List. Version. Identifier
	 * @Definition 
	 * @PrimitiveType String
	 * @xmlType attribute
	 * @xmlNamespace 
	 * @xmlMinOccurs 
	 * @xmlMaxOccurs 
	 * @xmlName listVersionID
	 * @var xsd:normalizedString
	 */
	public $listVersionID;
	/**
	 * @Name Substitution Status_ Code. Name. Text
	 * @Definition 
	 * @PrimitiveType String
	 * @xmlType attribute
	 * @xmlNamespace 
	 * @xmlMinOccurs 
	 * @xmlMaxOccurs 
	 * @xmlName name
	 * @var xsd:string
	 */
	public $name;
	/**
	 * @Name Substitution Status_ Language. Identifier
	 * @Definition 
	 * @PrimitiveType String
	 * @xmlType attribute
	 * @xmlNamespace 
	 * @xmlMinOccurs 
	 * @xmlMaxOccurs 
	 * @xmlName languageID
	 * @var xsd:language
	 */
	public $languageID;
	/**
	 * @Name Substitution Status_ Code List. Uniform Resource. Identifier
	 * @Definition 
	 * @PrimitiveType String
	 * @xmlType attribute
	 * @xmlNamespace 
	 * @xmlMinOccurs 
	 * @xmlMaxOccurs 
	 * @xmlName listURI
	 * @var xsd:anyURI
	 */
	public $listURI;
	/**
	 * @Name Substitution Status_ Code List Scheme. Uniform Resource. Identifier
	 * @Definition 
	 * @PrimitiveType String
	 * @xmlType attribute
	 * @xmlNamespace 
	 * @xmlMinOccurs 
	 * @xmlMaxOccurs 
	 * @xmlName listSchemeURI
	 * @var xsd:anyURI
	 */
	public $listSchemeURI;


} // end class SubstitutionStatusCodeType