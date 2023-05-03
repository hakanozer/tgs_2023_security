package com.works.services;

import com.works.props.Card;
import com.works.repositories.CardRepository;
import lombok.RequiredArgsConstructor;
import org.springframework.stereotype.Service;

import java.util.List;

@Service
@RequiredArgsConstructor
public class CartService {

    final TinkEncDec tinkEncDec;
    final CardRepository cardRepository;

    public List<Card> cardList() {
        return cardRepository.findAll();
    }

    public Card saveCard( Card card ) {
        String stCardNumber = tinkEncDec.encrypt(card.getNumber(), card.getExtraKey());
        card.setNumber(stCardNumber);
        card.setExtraKey(null);
        cardRepository.save(card);
        return card;
    }

    public Card openCard( Card card ) {
        String encStCard = tinkEncDec.decrypt( card.getNumber(), card.getExtraKey() );
        card.setNumber( encStCard );
        return card;
    }


}
