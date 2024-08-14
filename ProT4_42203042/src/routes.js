import { Router } from "express";
import { persona, libro } from "./controller.js";


export const router = Router()

router.get('/personas', persona.getAll);
router.get('/libros', libro.getAll);

router.post('/persona', persona.add);
router.post('/libro', libro.add);

router.delete('/persona', persona.delete);
router.delete('/libro', libro.delete);

router.put('/persona', persona.update);
router.put('/libro', libro.update);

router.get("/persona/:id", persona.getById);
router.get("/libro/:id", libro.getById);
