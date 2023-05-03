package com.works.controllers;

import com.works.props.Card;
import com.works.services.CartService;
import lombok.RequiredArgsConstructor;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PostMapping;

@Controller
@RequiredArgsConstructor
public class CardNumberController {

    final CartService cartService;
    Card enCard = null;

    @GetMapping("/cardNumber")
    public String cardNumber(Model model) {
        model.addAttribute("carts", cartService.cardList());
        model.addAttribute("enCard", enCard);
        enCard = null;
        return "cardNumber";
    }

    @PostMapping("/cardSave")
    public String cardSave(Card card) {
        cartService.saveCard(card);
        return "redirect:/cardNumber";
    }

    @PostMapping("/openCard")
    public String openCard(Card card) {
        this.enCard = cartService.openCard(card);
        return "redirect:/cardNumber";
    }

}
