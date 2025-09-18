# Changelog

## 0.0.5 - 2017-05-15

 - Regenerated from the OpenAPI spec
   - Documents became attachments
   - Support for custom properties in some places
 - Opened up the "protected API" of the Client a bit (by extending the Jane base Resource type)
   - Makes it easier to implement e.g. caching in a subclass of the client, because you can now access the parent serializer

## 0.0.5 - 2023-03-29

- Remove Jane
   - Remove the old open-api library. This means we can no longer generate code (it didn't work anyway)
   - Remove jane-runtime too. But first moving the classes we were using into the src directory
   - Effectively, this library has Jane generated code in it, but is now locked static. If we need to do anything new with our JobAdder integration, we either need to expand on code manually, or regenerate the API with a new version of Jane.
- Make Symfony 4 and 5 friendly
   - Only one Symfony lib needed now - symfony/serializer. There was one deprecation for SerializerAwareNormalizer in 3.x. It is gone from 4.x. So all Normalizers have been manually corrected to suit.
- Rename Resource and Resources classes
  - Changed to EntityResource and EntityResources to avoid reserved word warnings in PHP
