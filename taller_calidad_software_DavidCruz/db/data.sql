use taller_calidad_software_david;

-- =========================================
-- Inserciones para tabla tipoproductos
-- =========================================
INSERT INTO tipoproductos (id, nombre, created_at, updated_at) VALUES
(1, 'Hamburguesas', NOW(), NOW()),
(2, 'Perros Calientes', NOW(), NOW()),
(3, 'Salchipapas', NOW(), NOW()),
(4, 'Arepas Rellenas', NOW(), NOW()),
(5, 'Empanadas', NOW(), NOW()),
(6, 'Papas Locas', NOW(), NOW()),
(7, 'Mazorcadas', NOW(), NOW()),
(8, 'Sandwiches', NOW(), NOW()),
(9, 'Bebidas', NOW(), NOW()),
(10, 'Adiciones', NOW(), NOW());

-- =========================================
-- Inserciones para tabla productos
-- =========================================
INSERT INTO productos (nombre, stock, precio, tipo_producto_id, created_at, updated_at) VALUES
('Hamburguesa Clásica', 25, 16000.00, 1, NOW(), NOW()),
('Hamburguesa BBQ', 20, 19000.00, 1, NOW(), NOW()),
('Perro Americano', 30, 14000.00, 2, NOW(), NOW()),
('Perro Mixto', 20, 16000.00, 2, NOW(), NOW()),
('Salchipapa Especial', 15, 17000.00, 3, NOW(), NOW()),
('Arepa Rellena de Pollo', 25, 12000.00, 4, NOW(), NOW()),
('Empanadas de Carne (6 und)', 40, 8000.00, 5, NOW(), NOW()),
('Papas Locas con Pollo', 18, 15000.00, 6, NOW(), NOW()),
('Mazorcada Mixta', 15, 18000.00, 7, NOW(), NOW()),
('Gaseosa 400ml', 50, 4000.00, 9, NOW(), NOW());
