# Changelog

## 0.0.5 - 2017-05-15

 - Regenerated from the OpenAPI spec
   - Documents became attachments
   - Support for custom properties in some places
 - Opened up the "protected API" of the Client a bit (by extending the Jane base Resource type)
   - Makes it easier to implement e.g. caching in a subclass of the client, because you can now access the parent serializer

## php8-upgrade-without-jane - 2023-03-29

- Our Jane implementation is old and no longer works. It also can't be upgraded without a major rewrite
   - Move the few classes we use from Jane runtime to commited code here
   - Remove Jane and all dependency libraries
- Change namespacing to be a bit closer to AskNicely