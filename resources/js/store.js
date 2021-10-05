import { createStore, combineReducers, applyMiddleware } from "redux";
import thunk from "redux-thunk";
import { composeWithDevTools } from "redux-devtools-extension";


import {
    LoginReducer,
    AuthSessionReducer
} from "./reducers/AuthReducer";

import { LoadingStateReducer } from "./reducers/GeneralAppReducers";

const reducer = combineReducers({
    authUser: LoginReducer,
    userTime: AuthSessionReducer,
    appLoading: LoadingStateReducer 
});

const initialState = {};

const middleware = [thunk];

const store = createStore(
    reducer,
    initialState,
    composeWithDevTools(applyMiddleware(...middleware))
);

export default store;
