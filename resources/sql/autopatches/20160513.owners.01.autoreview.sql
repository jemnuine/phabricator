ALTER TABLE {$NAMESPACE}_owners.owners_package
  ADD autoReview VARCHAR(32) NOT NULL COLLATE {$COLLATE_TEXT};
