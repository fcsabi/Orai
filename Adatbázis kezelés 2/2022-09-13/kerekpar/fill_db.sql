INSERT INTO kolcsonzok (nev, email, telefon, cim)
VALUES 
  ("Stephanie Walter","elit.pretium@protonmail.ca","1-246-733-1532","8576 Nullam Rd."),
  ("Zephania Sears","mauris@protonmail.ca","(162) 190-1325","325-2414 Dolor. Rd."),
  ("Stella Horn","libero@icloud.org","(938) 671-4547","Ap #868-6718 Nam Avenue"),
  ("Patrick Avila","malesuada@aol.com","1-368-985-9199","P.O. Box 512, 921 Condimentum. Ave"),
  ("Claudia George","erat.vivamus@icloud.com","1-592-622-0611","Ap #143-4802 Diam. Street");

INSERT INTO kerekparok (tipus, marka, meret, alvaz, fek)
VALUES
  ("erat.","ullamcorper","Donec",8008, true),
  ("elit,","Duis","id",7646, true),
  ("a","auctor","Donec",5239, false),
  ("Vivamus","orci,","ullamcorper",6046, false),
  ("nunc","ornare","tellus",4672, true);

INSERT INTO berlesek (kezdet, vege, dij)
VALUES
  ("2021-09-25 03:36:16","2021-12-02 17:14:38",988),
  ("2022-05-29 01:54:40","2021-10-28 00:09:43",100),
  ("2022-05-24 02:37:31","2022-06-15 23:25:46",910),
  ("2022-07-13 10:12:48","2022-10-11 19:54:11",387),
  ("2022-04-07 01:42:44","2022-11-15 02:28:26",797);

INSERT INTO berles kerekparok(berles id, kerepar id)
VALUES
(2,3),
(2,4),
(1,2),
(4,1),
(3,5);