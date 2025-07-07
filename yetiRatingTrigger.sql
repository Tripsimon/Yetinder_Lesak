BEGIN
  DECLARE total_positive INT;
  DECLARE total_negative INT;

  SELECT COUNT(*) INTO total_positive
  FROM yeti_rating
  WHERE yeti_id = NEW.yeti_id AND rating = 1;

  SELECT COUNT(*) INTO total_negative
  FROM yeti_rating
  WHERE yeti_id = NEW.yeti_id AND rating = 0;

  UPDATE yeti
  SET current_rating = total_positive - total_negative
  WHERE id = NEW.yeti_id;
END