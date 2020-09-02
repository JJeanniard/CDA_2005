use enonce_1;

delete from vehicules;

delete from personnes;

insert into personnes
value 
(null,'tata', 'toto', '34', 'rue neuve', '39570'),
(null,'tita', 'tito', '34bis', 'rue neuve', '58700'),
(null,'lilol', 'lolil', '2', 'rue du petit pond', '65700')
;

insert into personnes (nom, num_rue, rue, cp_ville) value
('toto', '26', 'rue moulin', '35000')
;

insert into vehicules value
('bd-138-fr', 'audi', '35', 1),
('gt-265-df', 'renault', '120000', 2)
;